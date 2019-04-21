<?php
/**
 * Thanks to BenaeSan for providing the French translation
 * On 2017-04-06 17:05
 */

return [
	'collection:object:album' => 'Albums photo',
	'photos:addphotos' => 'Envoyer des photos',
	'photos:group_albums' => 'Albums photo de groupe',
	'item:object:tidypics_batch' => 'Envoies de photo',
	'tidypics:enable_group_images' => 'Activer le module de photos de groupe',
	'tidypics:mostcommented:nosuccess' => 'Il n\'y a eu aucune photo commentée jusqu’à maintenant.',
	'tidypics:mostcommentedthismonth:nosuccess' => 'Il n\'y a eu aucune photo commentée ce mois-ci jusqu’à maintenant.',
	'tidypics:mostcommentedlastmonth' => 'Les plus commentées du dernier mois',
	'tidypics:mostcommentedlastmonth:nosuccess' => 'Il n\'y a eu aucune photo commentée le mois dernier.',
	'tidypics:mostcommentedthisyear' => 'Les plus commentées de l\'année',
	'tidypics:mostcommentedthisyear:nosuccess' => 'Il n\'y a eut aucune photos de commentées pour le moment.',
	'tidypics:mostcommentedtoday:nosuccess' => 'Il n\'y a eut aucune photos de commentées aujourd\'hui.',
	'tidypics:mostviewed:nosuccess' => 'Aucune photo n\'as été vu pour le moment.',
	'tidypics:mostviewedthisyear:nosuccess' => 'Aucune photo n\'as été vu cette année.',
	'tidypics:mostviewedthismonth:nosuccess' => 'Aucune photo n\'as été vu ce mois.',
	'tidypics:mostviewedlastmonth:nosuccess' => 'Aucune photo n\'as été vu le mois dernier.',
	'tidypics:mostviewedtoday:nosuccess' => 'Aucune photo n\'as été vu aujourd\'hui.',
	'tidypics:recentlyviewed:nosuccess' => 'Il n\'y a pas d\'image qui à été vu récemment.',
	'tidypics:recentlycommented:nosuccess' => 'Il a pas d\'image qui as été commenté récemment.',
	'tidypics:albums' => 'Album photo',
	'tidypics:siteimagesall' => 'Toutes les photos',
	'tidypics:siteimagesall:nosuccess' => 'Il n\'y a pas encore de photo sur ce site.',
	'tidypics:siteimagesowner' => 'les photos de %s',
	'tidypics:siteimagesowner:nosuccess' => 'Vous n\'avez pas encore envoyé de photo',
	'tidypics:siteimagesfriends' => 'Photos des amis',
	'tidypics:siteimagesfriends:nosuccess' => 'Vos amis n\'ont pas encore envoyés de photo.',
	'tidypics:siteimagesgroup' => 'les photos du groupe %s',
	'tidypics:siteimagesgroup:nosuccess' => 'Il n\'y a pas encore de photo envoyée dans ce groupe.',
	'tidypics:mostrecent:description' => 'Ce widget liste les photos les plus récemment envoyées sur sur le site.',
	'tidypics:albums_mostrecent' => 'Les albums les plus récent',
	'tidypics:albums_mostrecent:description' => 'Ce widget liste les albums les plus récemment créés.',
	'tidypics:highestrated:nosuccess' => 'Il n\'y a pas encore de photo noté.',
	'tidypics:highestvotecount' => 'Les photos les mieux notées',
	'tidypics:highestvotecount:nosuccess' => 'Il n\'y a pas encore de photo noté.',
	'tidypics:recentlyvoted' => 'Photos notées récemment',
	'tidypics:recentlyvoted:nosuccess' => 'Il n\'y a pas encore de photo noté.',
	'tidypics:settings:restrict_tagging' => 'Si l\'ajout de tag est activé, autorise l\'ajout de tag seulement pour le propriétaire de la photo (et les admins)',
	'tidypics:settings:slideshow' => 'Activer le diaporama',
	'tidypics:settings:site_menu_link' => 'Élément de menu qui dirige vers',
	'tidypics:settings:site_menu_photos' => 'Toute les photos',
	'tidypics:settings:site_menu_albums' => 'Tous les albums photo',
	'tidypics:settings:max_uploads' => 'Nombre maximum d\'image autorisé à être téléversée en une seule fois:',
	'tidypics:settings:max_uploads_explanation' => '(Attention en augmentant ce nombre ! Tout d\'abord, en utilisant le formulaire d\'envoi basique, vous aurez autant de champs que d\'image dans le formulaire. Ensuite, vous devrez peut être changer certaines variables de configuration de PHP comme post_max_size (taille maximum d\'envoi), etc. suivant le nombre d\'image et la lourdeurs de celle-ci. Et enfin, suivant les options choisi pour le flux d\'activité du site(river) sur l\'envoi d\'image. Vous aurez peut être un nombre important d\'entrée pour chaque téléversement ou alors une seul entrée avec un aperçu de chaque image envoyés durant ce traitement)',
	'tidypics:settings:thumbnail_optimization' => 'Optimisation de la taille de la miniature',
	'tidypics:settings:optimization:none' => 'Aucune',
	'tidypics:settings:optimization:simple' => 'Simple',
	'tidypics:settings:optimization:complex' => 'Complexe',
	'tidypics:settings:thumbnail_optimization_explanation' => '(Actuellement utilisé avec \'ImageMagick executable\' comme bibliothèque d\'image. Veuillez faire des test en amont avant de l\'utiliser sur un serveur de production! \'Aucune\' utilise le même paramètre que les versions précédente de Tidypics pour créer les miniatures. \'Simple\' utilise quelques paramètres pour diminuer la taille du fichier de miniature et \'Complexe\' utilise encore plus de méthodes supplémentaire. Les paramètres d\'optimisation de la taille des fichiers, permet de diminuer le poids des miniatures mais peu aussi dégrader la qualité de l\'image. L\'optimisation complète peut avoir des incidences sur la charge du serveur pour créer les miniatures. La sortie - poids de l\'image et la qualité - dépend de l\'image d\'origine aussi le résultat peut varier. Veuillez tester les différentes solutions avant de faire votre choix pour l\'utilisation en production.',
	'tidypics:settings:river_comments_thumbnails' => 'Inclure une image de prévisualisation dans le flux d\'activité(river) lors de l\'ajout d\'un commentaire sur les albums ainsi que les images.',
	'tidypics:settings:river_thumbnails_size' => 'Taille de l\'image de prévisualisation dans le flux d\'activité (Si la prévisualisation est affichée)',
	'tidypics:option:river_comments_thumbnails_small' => 'Prévisualisation dans l\'album',
	'tidypics:option:river_comments_thumbnails_tiny' => 'Prévisualisation de la taille de la miniature',
	'tidypics:option:river_comments_include_preview' => 'Inclure une image de prévisualisation',
	'tidypics:option:river_comments_no_preview' => 'Pas d\'image de prévisualisation',
	'tidypics:settings:imagesize_width' => 'Largeur',
	'tidypics:settings:imagesize_height' => 'Hauteur',
	'tidypics:settings:imagesize_square' => 'Format carré',
	'tidypics:settings:imagesize_defaultsize_tiny' => '(Par défaut: 60x60px, format carré)',
	'tidypics:settings:imagesize_defaultsize_small' => '(Par défaut: 153x153px, format carré)',
	'tidypics:settings:imagesize_defaultsize_large' => '(Par défaut: 600x600px, format carré)',
	'tidypics:settings:sizes:instructs' => 'Vous aurez peut être besoin de changer le CSS si vous changer la taille par défaut. La taille défini ici sera aussi utilisé si vous recréez les miniatures.',
	'tidypics:settings:client_resizing' => 'Taille/résolution de l\'image coté client avant le téléversement',
	'tidypics:settings:client_resizing_help' => '(Marche seulement avec le formulaire d\'envoi en HTML5; IL PEUT ÉCHOUER AVEC LES FICHIERS LOURD - les limites dépendent de l\'appareil coté clients; fonctionne seulement pour les images au format JPG/JPEG/PNG; la qualité de l\'image après le traitement peut ne pas être satisfaisant!)',
	'tidypics:settings:resizing_max' => 'Résolution de l\'image maximum autorisée (px)',
	'tidypics:settings:resizing_max_help' => '(Seules les images avec une résolution plus grande seront réduite avec l\'envoi; les images plus petites ne seront pas modifiées coté client; le processus de réduction prend la plus grande image puis diminue la taille dans chaque dimension spécifiée et ajuste les tailles proportionnellement. Soyez prudent avec un paramétrage avec des limites trop grandes pour la réduction - et également l\'envoi - peut échouer)',
	'tidypics:settings:remove_exif' => 'Enlever les données EXIF de l\'image avant l\'envoi',
	'tidypics:settings:remove_exif_help' => '(Fonctionne seulement avec le formulaire d\'envoi HTML5 ET avec l\'option de réduction d\'image coté client activé; Fonctionne seulement avec des fichiers images JPG/JPEG; l\'orientation de l\'image est corrigé coté client avant la suppression des données EXIF, si nécessaire; CELA PEUT ÉCHOUER POUR DES IMAGES LOURDES - la limite dépend du matériel coté client)',
	'tidypics:option:single' => 'Une entrée avec seulement la première photo du lot',
	'tidypics:option:batch' => 'Une entrée avec toutes les photos du lot',
	'tidypics:settings:resize_thumbnails_title' => 'Recréation des toutes les miniatures',
	'tidypics:settings:resize_thumbnails_instructions' => 'Les miniatures pour toutes les photos actuellement disponibles sont recréées en utilisant les tailles de miniatures définis (voir l\'onglet "Paramètre"). ATTENTION: Suivant le nombre de photos sur le sites, cela peut prendre TRÈS LONGTEMPS ! <b>Veuillez faire une copie de la base de données du site et du répertoire data dans tout les cas avant de commencer !</b>',
	'tidypics:settings:resize_thumbnails_count' => 'Les miniatures de %s images au total sera recréées.',
	'tidypics:settings:resize_thumbnails_start' => 'Lancer la recréation de toutes les miniatures',
	'tidypics:resize_thumbnails:success_processed' => 'Nombre de photos traitées:',
	'tidypics:resize_thumbnails:error_invalid_image_info' => 'Nombre de photo traitées avec des données d\'image invalide:',
	'tidypics:resize_thumbnails:error_recreate_failed' => 'Nombre de photos traitées où la recréation des miniatures à échouées:',
	'tidypics:resize_thumbnails:finished' => 'La recréation des miniatures de toutes les %s photos s\'est terminées avec succès',
	'tidypics:resize_thumbnails:finished_with_errors' => 'La recréation des miniatures à été terminé. Ils y a quelques erreurs malgré tout: %s photos avec des données invalide (la miniature n\'a pas été recréée pour celle-ci) et sur %s photos, il s\'est produit une erreur durant la création de ces miniatures.',
	'tidypics:lib_tools:error' => 'Impossible de démarrer ImageMagick. Veuillez vérifier le chemin.',
	'tidypics:thumbnail_tool_blurb' => 'Cette pages vous permet de créer des miniatures si la création de miniature à échoué durant l\'envoi. Il peut survenir des problèmes si la bibliothèque d\'image n\'est pas configurée correctement ou si il n\'a pas assez de mémoire pour la bibliothèque GD pour charger et redimensionnée les images. Si vos utilisateurs ont des problèmes de créations de miniature et que votre configuration est correct, vous pouvez essayer de refaire les miniatures. Trouvez l\'identifiant unique de l\'image (Aussi appeler GUID. C\'est le numéro à la fin de l\'URL lorsque vous visualisez une photo) et entrez le ci-dessous. En plus de la création de la miniature, il faut aussi vérifier si le GUID est inclus dans la vue liste des albums et au cas où ce n\'est pas la photo qui est ajouté comme première entrée de la liste.',
	'tidypics:delete_image' => 'Supprimer image',
	'tidypics:delete_image_id' => 'ID de la photo',
	'tidypics:delete_image_blurb' => 'Cette page vous autorise à supprimer une entrée d\'image si cette photo ne peut être supprimé via le bouton suppression du site. Ceci peut être nécessaire au cas ou quelque chose c\'est vraiment mal passé pendant l\'envoi de l\'image (ce qui heureusement n\'arrive que très rarement !) et la page correspondante à l\'image est cassée. Trouvez l\'identifiant unique de l\'image (Aussi appeler GUID. C\'est le numéro à la fin de l\'URL lorsque vous visualisez une photo) et entrez le ci-dessous.',
	'tidypics:delete_image:success' => 'L\'image-entité Tidypics as été supprimé.',
	'tidypics:delete_image:no_image' => 'Ce GUID ne correspond pas à une image-entié Tidypics. Suppression annulé.',
	'tidypics:uploader:no_flash' => 'Votre navigateur ne supporte pas suffisamment HTML5 ou HTML4. Malheureusement, l\'envoi de photos ne fonctionnera pas. Veuillez mettre à jour votre navigateur.',
	'tidypics:uploader:instructs' => 'Ils y a trois étapes faciles pour ajouter des photos dans votre album en utilisant ce formulaire d\'envoi: sur cette page vous avez besoin de sélectionner les photos en premier et de les envoyer dans une seconde étape. Après l\'envoi, vous serez automatiquement redirigé vers une nouvelle page où vous pourrez définir les titres et les descriptions pour ces images.<br><br>Vous pouvez envoyer jusqu\'à %s photo à la fois(%s Mo maximum par photo).',
	'tidypics:album_select_help' => '(Avant de commencer l\'envoi de vos photos, vous devez soit sélectionnez un de vos albums soit choisir dans créer un nouveau.)',
	'tidypics:album_select:no_results' => 'Désolé, mais il n\'y a pas d\'albums où vous pouvez envoyer des photos et vous n\'avez pas les permissions pour un créer un nouveau.',
	'tidypics:continue' => 'Continuer',
	'tidypics:uploader:filetype' => 'Types de fichier image autorisé',
	'album:created_by' => 'Par',
	'tidypics:quit' => 'Quitter',
	'tidypics:tags:wordtags' => 'Tag(s):',
	'tidypics:tags:membertag' => 'Membre:',
	'tidypics:tags:taggedby' => '(Taggé par %s)',
	'tidypics:usertagged' => 'Photos où vous êtes taggé',
	'tidypics_tagged_members' => 'Membres taggé dans cette photo',
	'tidypics:usertags_photos:nosuccess' => 'Vous n\'avez pas encore été taggé sur aucune photos.',
	'tidypics:phototagging:nosuccess' => 'L\'ajout de tag à échoué car il n\'y a pas de tag entré ou tout les tags entré sont des tags déjà existant.',
	'tidypics:phototagging:success_partly' => 'Les tags ont été ajoutés mais les existant ont était ignorés.',
	'tidypics:widget:no_images' => 'Pas encore de photo disponible.',
	'tidypics:widget:no_albums' => 'Pas encore d\'albums disponible.',
	'image:river:created_single_entry' => '%s a ajouté la photo %s et %s de plus dans l\'album %s',
	'image:river:wordtagged' => '%s a ajouté de nouveau tags sur la photo %s',
	'image:river:wordtagged_single' => '%s a ajouté un nouveau tag sur la photo %s',
	'tidypics:updatealbum_subject' => 'Nouvelle photos dans l\'album',
	'tidypics:notify:summary_newalbum' => 'Nouvelle photo appelé %s',
	'tidypics:notify:subject_newalbum' => 'Nouvel album photo: %s',
	'tidypics:notify:body_newalbum' => '%s a créé un nouvel album photo: %s

Voir et commenter dans cet album:
%s',
	'tidypics:notify:summary_updatealbum' => 'Nouvelles photos dans l\'album %s',
	'tidypics:notify:subject_updatealbum' => 'Nouvelles photos dans l\'album %s',
	'tidypics:notify:body_updatealbum' => '%s a ajouté des photos dans l\'album %s

Voir et commenter dans cette album:
%s',
	'tidypics:exceedmax_number' => 'L\'envoi est limité à %s photos à la fois.',
	'album:error' => 'Une erreur est survenu lors de la création de l\'album.',
	'tidypics:utilities:broken_images' => 'Trouver les images cassées',
	'tidypics:utilities:broken_images:blurb' => 'Cette outils va trouver et vous permettre de supprimer les entités d\'image qui ne sont pas liés physiquement avec des fichiers image du répertoire data. Si vous avez beaucoup d\'images, cela risque de prendre du temps.

Attention: Si vos images ne s\'affiche plus après une mise à jour de Elgg, une migration vers un autre serveur, des changements dans les paramétrage du site ou du chemin vers le répertoire data, utiliser cette outils pourrait supprimer toutes les images du site dans la base de données. En cas de doute, visitez le site de la communauté Elgg pour voir les conseils de réparation.

Dans TOUT les cas, avant d\'utiliser cet utilitaire faite une sauvegarde de votre base de données et de votre répertoire data!',
	'tidypics:utilities:broken_images:found_images' => 'Images cassées trouvées: %s',
	'tidypics:utilities:broken_images:delete' => 'Suppression de toutes les images cassées.',
	'tidypics:utilities:broken_images:deleted_images' => 'Images cassées supprimer: %s',
	'tidypics:stats' => 'Statistiques',
	'tidypics:viewsbyowner' => 'par %s membres (vous exclus)',
	'image:river:tagged' => '%s a été taggé %s sur la photo %s',
	'tidypics:newalbum' => '%s a créé un nouvel album photo',
	'album:friends' => 'Albums photo des amis',
	'tidypics:taginstruct' => 'Sélectionnez la zone que vous souhaitez tagger ou %s.<br>Taper le nom d\'un membre du site ou ajoutez un tag à la photo.',
	'tidypics:disabled' => 'Désactivé',
	'tidypics:enabled' => 'Activé',
	'admin:settings:photos' => 'Tidypics',
	'photos:add' => 'Créer un album',
	'photos:group' => 'Photos du groupe',
	'tidypics:nophotosingroup' => 'Ce groupe n\'a aucune photo pour le moment',
	'tidypics:upgrade' => 'Mettre à jour',
	'tidypics:sort' => 'Tri de l\'album %s',
	'tidypics:none' => 'Aucun album photo',
	'tidypics:settings:main' => 'Paramètres primaires',
	'tidypics:help' => 'Aide',
	'tidypics:settings:uploader' => 'Utiliser l\'outil de chargement Flash',
	'tidypics:settings:tinysize' => 'Taille des miniatures',
	'tidypics:settings:heading:img_lib' => 'Paramètres de la bibliothèque d\'image',
	'tidypics:settings:heading:main' => 'Paramètres principaux',
	'tidypics:settings:heading:river' => 'Options d\'intégration dans la rivière d\'activité',
	'tidypics:settings:heading:sizes' => 'Taille des miniatures',
	'tidypics:settings:heading:groups' => 'Paramètres du groupe',
	'tidypics:option:all' => 'Tout',
	'tidypics:option:none' => 'Aucun',
	'tidypics:option:cover' => 'Couverture',
	'tidypics:option:set' => 'Jeu d\'images',
	'tidypics:server_info' => 'Informations du serveur',
	'tidypics:server_info:gd_desc' => 'Elgg a besoin que l\'extension GD soit chargée',
	'tidypics:server_info:exec_desc' => 'Nécessaire pour la ligne de commande d\'ImageMagick',
	'tidypics:server_info:memory_limit_desc' => 'Augmentez la valeur de memory_limit',
	'tidypics:server_info:peak_usage_desc' => 'Ceci est à peu près le minimum par page',
	'tidypics:server_info:upload_max_filesize_desc' => 'Taille maximale d\'une image chargée sur le serveur',
	'tidypics:server_info:post_max_size_desc' => 'Taille maximale d\'une requête POST = somme des tailles des images + formulaire HTML',
	'tidypics:server_info:max_input_time_desc' => 'Durée qu\'attend le script avant la fin de l\'envoi des fichiers',
	'tidypics:server_info:max_execution_time_desc' => 'Durée maximale d\'exécution d\'un script',
	'tidypics:server_info:php_version' => 'Version de PHP',
	'tidypics:server_info:memory_limit' => 'Mémoire disponible pour PHP',
	'tidypics:server_info:peak_usage' => 'Mémoire utilisée pour charger cette page',
	'tidypics:server_info:upload_max_filesize' => 'Taille maximale des fichiers à envoyer sur le serveur',
	'tidypics:server_info:post_max_size' => 'Taille maximale des requêtes POST',
	'tidypics:server_info:max_input_time' => 'Durée maximale de saisie',
	'tidypics:server_info:max_execution_time' => 'Durée d\'exécution maximale',
	'tidypics:imtest' => 'ImageMagick',
	'tidypics:server_config' => 'Configuration du serveur',
	'tidypics:server_configuration_doc' => 'Documentation de la configuration du serveur',
	'tidypics:lib_tools:testing' => 'Tidypics a besoin de connaître l\'emplacement des exécutables de ImageMagick si vous l\'avez choisie comme bibliothèque graphique. Votre hébergeur devrait pouvoir vous renseigner à ce sujet. Vous pouvez tester si l\'emplacement est correct ci-dessous. S\'il est bon, cela devrait afficher la version d\'ImageMagick installée sur votre serveur.',
	'tidypics:thumbnail_tool' => 'Création des miniatures',
	'tidypics:thumbnail_tool:unknown_image' => 'Impossible de récupérer l\'image d\'origine',
	'tidypics:thumbnail_tool:invalid_image_info' => 'Erreur lors de la récupération des informations de l\'image.',
	'tidypics:thumbnail_tool:create_failed' => 'Echec de la création des miniatures.',
	'tidypics:thumbnail_tool:created' => 'Miniatures créées.',
	'album:sort' => 'Trier',
	'album:cover_link' => 'Créer une couverture',
	'tidypics:title:quota' => 'Quota',
	'tidypics:uploader:choose' => 'Choisir des photos',
	'tidypics:uploader:upload' => 'Charger des photos',
	'tidypics:uploader:describe' => 'Décrire les photos',
	'tidypics:uploader:basic' => 'Vous pouvez charger jusqu\'à %s photos à la fois (%s Mo maximum par photo)',
	'tidypics:sort:instruct' => 'Triez l\'album photo en cliquant et en déplaçant les images. Puis cliquez sur le bouton Enregistrer.',
	'tidypics:sort:no_images' => 'Aucune image à trier. Chargez d\'abord des images en cliquant sur le lien ci-dessus.',
	'album:num' => 'Photos de %s',
	'image:index' => '%u de %u',
	'tidypics:phototagging:delete:success' => 'Le tag de la photo a été retiré.',
	'tidypics:phototagging:delete:error' => 'Erreur non non identifiée lors de la suppression du tag de la photo.',
	'tidypics:phototagging:delete:confirm' => 'Retirer ce tag ?',
	'image:river:created:multiple' => '%s a ajouté %u photos à l\'album %s',
	'image:river:tagged:unknown' => '%s a identifié %s dans une photo',
	'river:object:album:create' => '%s a créé un nouvel album photo %s',
	'river:comment:object:image' => '%s a commenté la photo %s',
	'river:comment:object:album' => '%s a commenté l\'album %s',
	'tidypics:newalbum_subject' => 'Nouvel album photo',
	'tidypics:updatealbum' => '%s a publié de nouvelles photos dans l\'album %s',
	'album:save_cover_image' => 'Image de couverture enregistrée.',
	'tidypics:album:sorted' => 'L\'album %s est trié',
	'tidypics:album:could_not_sort' => 'Impossible de trier l\'album %s. Veuillez vérifier qu\'il y a bien des images dans l\'album et réessayez.',
	'tidypics:baduploadform' => 'Une erreur s\'est produite avec le formulaire d\'envoi',
	'tidypics:deletefailed' => 'Désolé, la suppression a échoué.',
	'tidypics:deleted' => 'Suppression réussie.',
	'tidypics:cannot_upload_exceeds_quota' => 'Image non chargée. La taille du fichier dépasse la limite autorisée.',
	'album:invalid_album' => 'Album invalide',
	'album:cannot_save_cover_image' => 'Impossible d\'enregistrer l\'image de couverture',
	'image:blank' => 'Veuillez donner un titre à cette image.',
	'image:error' => 'Impossible d\'enregistrer l\'image.',
	'untitled' => 'Sans titre',
	'image' => 'Image',
	'images' => 'Images',
	'caption' => 'Légende',
	'photos' => 'Photos',
	'images:upload' => 'Charger des images',
	'album' => 'Album photo',
	'albums' => 'Albums photo',
	'album:slideshow' => 'Voir diaporama',
	'album:yours' => 'Vos albums photo',
	'album:yours:friends' => 'Les albums photo de vos amis',
	'album:user' => 'Albums photo de %s',
	'album:all' => 'Tout les albums photo',
	'item:object:image' => 'Photos',
	'item:object:album' => 'Albums',
	'tidypics:uploading:images' => 'Veuillez patientez, nous chargeons les fichiers.',
	'tidypics:enablephotos' => 'Activer les albums photo pour les groupes',
	'tidypics:editprops' => 'Modifier les propriétés des images',
	'tidypics:mostcommented' => 'Images les plus commentées.',
	'tidypics:mostcommentedthismonth' => 'Les plus commentés ce mois-ci',
	'tidypics:mostcommentedtoday' => 'Les plus commentés ce jour-ci',
	'tidypics:mostviewed' => 'Images les plus vues',
	'tidypics:mostviewedthisyear' => 'Les plus vus cette année.',
	'tidypics:mostviewedthismonth' => 'Les plus vus ce mois-ci',
	'tidypics:mostviewedlastmonth' => 'Les plus vus le mois dernier',
	'tidypics:mostviewedtoday' => 'Les plus vus aujourd\'hui',
	'tidypics:recentlyviewed' => 'Images récemment vues',
	'tidypics:recentlycommented' => 'Image récemment commentées',
	'tidypics:mostrecent' => 'Images les plus récentes',
	'tidypics:yourmostviewed' => 'Vos images les plus vues',
	'tidypics:yourmostrecent' => 'Vos images les plus récentes',
	'tidypics:friendmostviewed' => 'Les images les plus vues de %s',
	'tidypics:friendmostrecent' => 'Les images les plus récentes de %s',
	'tidypics:highestrated' => 'Les images les mieux notées',
	'tidypics:views' => 'Vues: %s',
	'tidypics:viewsbyothers' => '(%s par vous)',
	'tidypics:administration' => 'Administration Tydipics',
	'tidypics:thumbnail' => 'Création des vignettes',
	'tidypics:settings' => 'Paramétrages',
	'tidypics:settings:image_lib' => 'Librairie graphique',
	'tidypics:settings:download_link' => 'Voir le lien de download',
	'tidypics:settings:tagging' => 'Activer les tags sur les photos',
	'tidypics:settings:exif' => 'Voir les données EXIF',
	'tidypics:settings:view_count' => 'Voir le compteur',
	'tidypics:settings:grp_perm_override' => 'Autoriser l\'acés total aux membres du groupe',
	'tidypics:settings:maxfilesize' => 'Taille maximum des images	en Mb:',
	'tidypics:settings:quota' => 'Quota Utilisateur/Groupe (Mb):',
	'tidypics:settings:quota_help' => '(O égal pas de quota)',
	'tidypics:settings:watermark' => 'Entrez le texte qui doit figure sur le WaterMark - fonction non vraiment sure:',
	'tidypics:settings:im_path' => 'Chemin de l\'exécutable ImageMagick, terminé par un slash',
	'tidypics:settings:img_river_view' => 'Combien d\'entrées dans le river pour chaque lot de traitement des fichiers chargés',
	'tidypics:settings:album_river_view' => 'Montrer la couverture de l\'album ou un ensemble de photos pour tout nouvel album',
	'tidypics:settings:largesize' => 'Taille initiale de l\'image',
	'tidypics:settings:smallsize' => 'Taille de la vue de l\'album',
	'tidypics:settings:im_id' => 'Identifiant de l\'image',
	'album:create' => 'Créer un nouvel album',
	'album:add' => 'Ajouter un Album photo',
	'album:addpix' => 'Ajouter des photos à l\'album',
	'album:edit' => 'Modifier l\'album',
	'album:delete' => 'Supprimer l\'album',
	'image:edit' => 'Modifier l\'image',
	'image:delete' => 'Supprimer l\'image',
	'image:download' => 'Télécharger l\'image',
	'album:title' => 'Titre',
	'album:desc' => 'Description',
	'album:tags' => 'Tags',
	'album:cover' => 'Faire de cette image la couverture de l\'album',
	'tidypics:quota' => 'Quota utilisé:',
	'image:total' => 'Images dans l\'album:',
	'image:by' => 'Image ajoutée par',
	'album:by' => 'Album créé par',
	'album:created:on' => 'Création',
	'image:none' => 'Aucune image n\'a encore été ajoutée',
	'image:back' => 'Précédent',
	'image:next' => 'Suivant',
	'tidypics:finish_tagging' => 'Arrêter de tagger',
	'tidypics:tagthisphoto' => 'Tagger cette photo',
	'tidypics:actiontag' => 'Tag',
	'tidypics:actioncancel' => 'Annuler',
	'tidypics:usertag' => 'Photo taggée par %s',
	'tidypics:phototagging:success' => 'La photo a été correctement taggée.',
	'tidypics:phototagging:error' => 'Erreur innatendue durant le taggage',
	'tidypics:tag:subject' => 'Vous avez été taggé dans une photo !!!',
	'tidypics:tag:body' => 'Vous avez été taggé dans la photo %s par %s !!!
La photo peut être consultée ici: %s',
	'tidypics:posted' => 'a posté une photo',
	'tidypics:widget:albums' => 'Albums photo',
	'tidypics:widget:album_descr' => 'Échantillon de vos albums photo',
	'tidypics:widget:num_albums' => 'Nombre de photos à montrer',
	'tidypics:widget:latest' => 'Dernières photos',
	'tidypics:widget:latest_descr' => 'Montrer les dernières photos',
	'tidypics:widget:num_latest' => 'Nombre d\'images à montrer',
	'album:more' => 'Voir tout les albums',
	'image:river:created' => '%s a ajouté la photo %s à l\'album %s',
	'image:river:item' => 'une photo',
	'image:river:annotate' => 'commentaire sur la photo',
	'album:river:item' => 'un album',
	'album:river:annotate' => 'un commentaire sur l\'album photo',
	'tidypics:upl_success' => 'Vos images ont été correctement chargées.',
	'image:saved' => 'Votre image a été correctement enregistrée',
	'images:saved' => 'Toutes les images ont été correctement enregistrées',
	'image:deleted' => 'Votre image a correctement été supprimée',
	'image:delete:confirm' => 'Confirmez-vous la suppression de cette image',
	'images:edited' => 'Vos images ont été correctement mises à jour',
	'album:edited' => 'Votre album a correctement été mis à jour',
	'album:saved' => 'Votre album a correctement été enregistré',
	'album:deleted' => 'Votre album a correctement été supprimé',
	'album:delete:confirm' => 'Confirmez-vous la suppression de cet album',
	'album:created' => 'Votre nouvel album a été créé',
	'tidypics:settings:save:ok' => 'Réglages du plugin Tydipics enregistrés',
	'tidypics:upgrade:success' => 'Mise à jour de Tydipics effectuée',
	'tidypics:partialuploadfailure' => 'Des erreurs sont survenues durant le chargement des images (%s sur %s images)',
	'tidypics:completeuploadfailure' => 'Echec du chargement des images ',
	'tidypics:exceedpostlimit' => 'Trop d\'images trop lourdes - essayez de charges des images plus petites',
	'tidypics:noimages' => 'Aucune image sélectionnée',
	'tidypics:image_mem' => 'Image trop large - taille trop grosse',
	'tidypics:image_pixels' => 'L\'image a trop de pixels',
	'tidypics:unk_error' => 'Erreur inconnue de chargement',
	'tidypics:save_error' => 'Erreur inconnue lors de l\'enregistrement de l\'image sur le serveur',
	'tidypics:not_image' => 'Type d\'image non reconnu',
	'image:downloadfailed' => 'Désolé, image indisponible pour le moment',
	'tidypics:nosettings' => 'L\'administrateur n\'a pas effectué les reglages minimaux des albums',
	'tidypics:exceed_quota' => 'Quota fixé par l\'administrateur dépassé',
	'images:notedited' => 'Toutes les images n\'ont pas été correctement mises à jour',
	'album:none' => 'Aucun album encore créé',
	'album:uploadfailed' => 'Désolé, nous ne pouvons pas enregistrer l\'album',
	'album:deletefailed' => 'Votre album ne peut pas être supprimé pour le moment',
	'album:blank' => 'Donnez un titre et une description à cet album',
	'tidypics:upgrade:failed' => 'Mise à jour de Tydipics infructueuse',
];