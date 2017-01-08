<?php
/**
 * View an image
 *
 * @author Cash Costello
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 */

// get the photo entity
$photo_guid = elgg_extract('guid', $vars);
$photo = get_entity($photo_guid);
if (!$photo || !elgg_instanceof($photo, 'object', 'image')) {
	register_error(elgg_echo('noaccess'));
	$_SESSION['last_forward_from'] = current_page_url();
	forward('');
}
$album = $photo->getContainerEntity();
$album_container = $album->getContainerEntity();
if (!$album_container) {
	register_error(elgg_echo('noaccess'));
	$_SESSION['last_forward_from'] = current_page_url();
	forward('');
}

// set page owner based on owner of photo album
if ($album) {
	elgg_set_page_owner_guid($album->getContainerGUID());
}
$owner = elgg_get_page_owner_entity();
elgg_group_gatekeeper();

$photo->addView();

if (elgg_get_plugin_setting('tagging', 'tidypics')) {
	elgg_load_js('jquery.imgareaselect');
	elgg_require_js('tidypics/tagging');
}

// set up breadcrumbs
elgg_push_breadcrumb(elgg_echo('photos'), 'photos/siteimagesall');
elgg_push_breadcrumb(elgg_echo('tidypics:albums'), 'photos/all');
if (elgg_instanceof($owner, 'group')) {
	elgg_push_breadcrumb($owner->name, "photos/group/$owner->guid/all");
} else {
	elgg_push_breadcrumb($owner->name, "photos/owner/$owner->username");
}
elgg_push_breadcrumb($album->getTitle(), $album->getURL());
elgg_push_breadcrumb($photo->getTitle());

if (!$owner instanceof ElggGroup) {
	$owner = elgg_get_logged_in_user_entity();
}

if (tidypics_can_add_new_photos(null, $owner)) {
	$url = elgg_get_site_url() . "ajax/view/photos/selectalbum/?owner_guid=" . $owner->getGUID();
	$url = elgg_format_url($url);
	elgg_register_menu_item('title', array(
		'name' => 'addphotos',
		'href' => 'javascript:',
		'data-colorbox-opts' => json_encode([
			'href' => $url,
		]),
		'text' => elgg_echo("photos:addphotos"),
		'link_class' => 'elgg-button elgg-button-action elgg-lightbox',
	));
}

if (elgg_get_plugin_setting('download_link', 'tidypics')) {
	// add download button to title menu
	elgg_register_menu_item('title', array(
		'name' => 'download',
		'href' => "photos/download/$photo_guid",
		'text' => elgg_echo('image:download'),
		'link_class' => 'elgg-button elgg-button-action',
	));
}

$content = elgg_view_entity($photo, array('full_view' => true));

$body = elgg_view_layout('content', array(
	'filter' => false,
	'content' => $content,
	'title' => $photo->getTitle(),
	'sidebar' => elgg_view('photos/sidebar_im', array(
		'page' => 'tp_view',
		'image' => $photo,
	)),
));

echo elgg_view_page($photo->getTitle(), $body);
