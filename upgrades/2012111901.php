<?php
use Elgg\Database\QueryBuilder;
use Elgg\Database\Clauses\JoinClause;

// Only admin users can run this upgrade
if ( !elgg_is_admin_logged_in() ) {
	return;
}

$file_version = elgg_get_upgrade_file_version(basename(__FILE__));
$upgrade_version = elgg_get_plugin_setting('upgrade_version', 'tidypics');

if ( $upgrade_version and $file_version <= $upgrade_version) {
	return;
}

// $db_prefix = elgg_get_config('dbprefix');
elgg_call(ELGG_IGNORE_ACCESS, function() use ($file_version) {

// Count tidypics_batch entities that need to correct the access_id
$options = [
	'type' => 'object',
	'subtype' => TidypicsBatch::SUBTYPE,
	'limit' => false,
	'count' => true,
	'joins' => [
		new JoinClause('entities', 'e2', function(QueryBuilder $qb, $joined_alias, $main_alias) use ($user) {
			return $qb->compare("$joined_alias.guid", '=', "$main_alias.container_guid");
		}),
	],
	'wheres' => [
		function(QueryBuilder $qb) {
			return $qb->compare('e.access_id', '<>', 'e2.access_id');
		},
	],
];
$tidypics_batch = elgg_get_entities($options);

// If no entities found set upgrade as runned
if (!$tidypics_batch) {
	return elgg_set_plugin_setting('upgrade_version', $file_version, 'tidypics');
}

// Correct the access_id of the tidypics_batch entities
if ($tidypics_batch) {
	$options['count'] = false;
	$batch = new ElggBatch('elgg_get_entities', $options, 'tidypics_2012111901');
	// Correct the access_id from river itens
	$tidypics_batch_river = elgg_get_river([
		'object_guid' => $batch->callbackResult,
		'action_type' => 'create',
		'type' => 'object',
		'subtype' => TidypicsBatch::SUBTYPE,
		'limit' => false.
	]);
	tidypics_adjust_river_access_id($tidypics_batch_river);
	error_log("Tidypics batches upgrade (2012111901) succeeded");
}
});

// Set upgrade as runned
return elgg_set_plugin_setting('upgrade_version', $file_version, 'tidypics');

/**
 * Change the tidypics_batch's access_id to container's access_id (album object)
 *
 * @param ElggObject $entity
 * @param string 	 $getter
 * @param array 	 $options
 */
function tidypics_2012111901($entity, $getter, $options) {
	$album = $entity->getContainerEntity();
	if ($guid = tidypics_adjust_batch_access_id($entity, $album) ) {
		return $guid;
	}
}

/**
 * Change the tidypics_batch's access_id
 *
 * @param ElggObject $entity
 * @param ElggObject $album
 * @return void
 */
function tidypics_adjust_batch_access_id(ElggObject $entity = null, ElggObject $album = null) {
	if (!($entity instanceof TidypicsBatch) or !($album instanceof TidypicsAlbum)) {
		return false;
	}

	if ( $entity->access_id != $album->access_id ) {
		$entity->access_id = $album->access_id;
		return $entity->save();
	}
}

/**
 * Change the river iten's access_id to album access_id
 *
 * @param Array $river_itens
 * @return void
 */
function tidypics_adjust_river_access_id(array $river_itens = null) {
	if ( !$river_itens or !count($river_itens) ) {
		return;
	}
	foreach ($river_itens as $item) {
		$object = $item->getObjectEntity();
		$access_id = $object->access_id;
		if ( $item->access_id != $access_id ) {
			update_river_access_by_object($object->guid, $access_id);
		}
	}
}
