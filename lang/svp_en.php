<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de https://trad.spip.net/tradlang_module/svp?lang_cible=en
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'The actions are being processed. Please wait...',
	'actions_a_faire' => 'Actions to process',
	'actions_demandees' => 'Actions requested:',
	'actions_en_erreur' => 'Occurring errors',
	'actions_necessaires' => 'The following additional actions will be performed:',
	'actions_non_traitees' => 'Actions not processed',
	'actions_realises' => 'Actions processed',
	'afficher_les_plugins_incompatibles' => 'Show incompatible plugins',
	'alerte_compatibilite' => 'Forced compatibility',
	'alerte_compatibilite_version_autorisee' => 'Plugins compatible with SPIP <code>@version@</code> can be enabled.',

	// B
	'bouton_activer' => 'Enable',
	'bouton_actualiser' => 'Refresh',
	'bouton_actualiser_tout' => 'Refresh the repositories',
	'bouton_appliquer' => 'Apply',
	'bouton_confirmer' => 'Confirm',
	'bouton_desactiver' => 'Disable',
	'bouton_desinstaller' => 'Uninstall',
	'bouton_installer' => 'Download and enable',
	'bouton_modifier_depot' => 'Edit the repository',
	'bouton_supprimer' => 'Delete',
	'bouton_up' => 'Update',
	'bulle_actualiser_depot' => 'Refresh the packages of the repository',
	'bulle_actualiser_tout_depot' => 'Refresh packages of all repositories',
	'bulle_afficher_xml_plugin' => 'Content of the plugin XML file',
	'bulle_ajouter_spipzone' => 'Add the SPIP-Zone repository',
	'bulle_aller_demonstration' => 'Go to the demo page',
	'bulle_aller_depot' => 'Go to the page of the repository',
	'bulle_aller_documentation' => 'Go to the documentation page',
	'bulle_aller_plugin' => 'Go to the plugin page',
	'bulle_supprimer_depot' => 'Delete the repository and its packages',
	'bulle_telecharger_archive' => 'Download the archive',
	'bulle_telecharger_fichier_depot' => 'Download the XML feed of the repository',
	'bulle_telecharger_librairie' => 'Download the library',

	// C
	'cacher_les_plugins_incompatibles' => 'Hide incompatible plugins',
	'config_activer_log_verbeux' => 'Enable verbose logs?',
	'config_activer_log_verbeux_explication' => 'This option makes the logs much verbose.',
	'config_activer_pas_a_pas' => 'Enable the step-by-step mode?',
	'config_activer_pas_a_pas_explication' => 'Enabling this mode will display a review after every action taken, rather than having only an overall review of all actions performed at the end of the process.',
	'config_activer_runtime' => 'Enable the runtime mode?',
	'config_activer_runtime_explication' => 'The runtime mode (yes) only loads inactive plugins compatible with the current version of your SPIP, which is highly recommended for most uses. In not runtime mode (no), all plugins from a repository are loaded, regardless of the current version of SPIP. This is only useful when using SVP to present all existing plugins as does the site SPIP (plugins.spip.net)',
	'config_autoriser_activer_paquets_obsoletes' => 'Allow activation of obsolete packages?',
	'config_autoriser_activer_paquets_obsoletes_explication' => 'Obsolete packages are local packages that are older than other local packages. Obsolescence is established on the basis of the status (stable, testing, dev) of the package and on the basis of its version. Enable this option if you still want to activate these outdatedplugins.',
	'config_depot_editable' => 'Allow repository edition?',
	'config_depot_editable_explication' => 'This makes editable the informations of a repository and enable eventually to associate keywords or documents to it. This option shouldn’t interest anyone! Rather leave "no"!',
	'confirmer_desinstaller' => 'Warning, uninstalling a plugin <b>wipes out</b> its data from the database and it is irreversible.<br />If you are not absolutely sure, just disable the plugin.',
	'confirmer_telecharger_dans' => 'The plugin will be loaded into a directory (@dir@) which already exists.
This will overwrite the content of this directory.
A copy of the old files will be saved in "@dir_backup@".
You must confirm this action.',

	// E
	'erreur_actions_non_traitees' => 'Some actions have not been performed. This may be due to an error during actions to be processed, or of a display of this page while actions are still pending. Actions were initiated by @auteur@ at @date@.',
	'erreur_auth_plugins_ajouter_lib' => 'You do not have permission to add a library.',
	'erreur_dir_dib_ecriture' => 'The library directory @dir@ is not writable. Impossible to load a library!',
	'erreur_dir_dib_indefini' => '_DIR_LIB directory is not defined. Impossible to load a library!',
	'erreur_dir_plugins_auto' => 'The directory "plugins/auto" allowing to download packages
is not created or is not writable.
<strong> You must create it in order to install new plugins from that interface. </ strong>',
	'erreur_dir_plugins_auto_ecriture' => 'The package directory @dir@ is not writable. Unable to load a package!',
	'erreur_dir_plugins_auto_indefini' => 'The folder _DIR_PLUGINS_AUTO is not defined. Can not load a package in it!',
	'erreur_dir_plugins_auto_titre' => '"plugins/auto" is inaccessible!',
	'erreur_teleporter_chargement_source_impossible' => 'Impossible to load the source @source@',
	'erreur_teleporter_destination_erreur' => 'Directory "@dir@" is not accessible to teleport',
	'erreur_teleporter_echec_deballage_archive' => 'Unable to extract @fichier@',
	'erreur_teleporter_format_archive_non_supporte' => 'Format "@extension@" is not supported by the teleporter',
	'erreur_teleporter_methode_inconue' => 'Unknown method "@methode@" for teleport',
	'erreur_teleporter_type_fichier_inconnu' => 'Unknown file type for the source @source@',
	'erreurs_xml' => 'Unable to read some XML descriptions',
	'explication_destination' => 'The path will be calculated from the archive name if you don’t fill it.',

	// F
	'fieldset_debug' => 'Debug',
	'fieldset_edition' => 'Editing',
	'fieldset_fonctionnement' => 'Way it works',
	'fieldset_typologie' => 'Plugins classification',
	'filtrer' => 'Filter',

	// I
	'info_0_plugin' => 'No plugin',
	'info_1_depot' => '1 repository',
	'info_1_paquet' => '1 package',
	'info_1_plugin' => '1 plugin',
	'info_admin_plugin_actif_non_verrou_non' => 'This page lists the inactive plugins of the site. These plugins are always unlocked.',
	'info_admin_plugin_actif_non_verrou_tous' => 'This page lists the inactive plugins of the site. These plugins are always unlocked.',
	'info_admin_plugin_actif_oui_verrou_non' => 'This page lists the active and unlocked plugins of the site.',
	'info_admin_plugin_actif_oui_verrou_tous' => 'This page lists all the active plugins of the site, locked or not.',
	'info_admin_plugin_verrou_non' => 'This page lists all unlocked plugins of the site, active or not.',
	'info_admin_plugin_verrou_tous' => 'This page lists all the plugins of the website.',
	'info_admin_plugin_verrouille' => 'This page lists the active and locked plugins (stored in the <code>@dir_plugins_dist@</code> directory). 
	If you wish to disable them, please contact the webmaster of the site or see <a href="http://programmer.spip.net/repertoire_plugins-dist">the documentation</a>.',
	'info_adresse_spipzone' => 'SPIP-Zone - Plugins',
	'info_ajouter_depot' => 'By adding repositories to your base, you will have the possibility to get information and to search on all packages hosted by the added repositories.<br />A repository is described by an XML file containing the informations on the deposit and on all its packages.',
	'info_aucun_depot' => 'No repository',
	'info_aucun_depot_ajoute' => 'No repository available!<br />Use the form below to add the repository "SPIP-Zone - Plugins" whose url is already pre-filled or another repository of your choice.',
	'info_aucun_paquet' => 'no package',
	'info_aucun_plugin' => 'No plugin',
	'info_boite_charger_plugin' => '<strong>This page is only available to the webmasters of the site.</strong><p>It allows you to search plugins available on the repositories stored in your configuration and install them physically on your server</p>',
	'info_boite_depot_gerer' => '<strong>This page is only available to the webmasters of the site.</strong><p>It allows adding and updating plugins repositories.</p>',
	'info_charger_plugin' => 'To add one or more plugins, perform a prior multi-criteria search on plugins of the SPIP galaxy. The search only includes plugins compatible with the SPIP version installed and reports plugins already active on the site.',
	'info_compatibilite_dependance' => 'For @compatibilite@ :',
	'info_contributions_hebergees' => '@total_autres@ other hosted contribution(s)',
	'info_critere_phrase' => 'Enter keywords to search in the prefix, the name, the slogan, the description and the authors of the plugins',
	'info_depots_disponibles' => '@total_depots@ repositories',
	'info_fichier_depot' => 'Type in the url of the description file of the repository to add.<br />To add the repository "SPIP-Zone - Plugins" click on this link:',
	'info_logiciel_version' => '@logiciel@ @signe@ @version@',
	'info_logiciel_version_intervalle' => '@logiciel@ @signe_min@ @version_min@ and @signe_max@ @version_max@',
	'info_nb_depots' => '@nb@ repositories',
	'info_nb_paquets' => '@nb@ packages',
	'info_nb_plugins' => '@nb@ plugins',
	'info_paquets_disponibles' => '@total_paquets@ available package(s)',
	'info_plugin_attente_dependance' => 'missing dependencies',
	'info_plugin_incompatible' => 'incompatible version',
	'info_plugin_installe' => 'already installed',
	'info_plugin_obsolete' => 'obsolete version',
	'info_plugins_disponibles' => '@total_plugins@ available plugin(s)',
	'info_plugins_heberges' => '@total_plugins@ hosted plugin(s)',
	'info_tri_nom' => 'sorted in alphabetical order',
	'info_tri_score' => 'sorted according to their decreasing relevance',
	'info_type_depot_git' => 'Repository managed by GIT',
	'info_type_depot_manuel' => 'Repository managed manually',
	'info_type_depot_svn' => 'Repository managed by SVN',
	'info_verrouille' => 'Unable to disable or uninstall this plugin.',
	'installation_en_cours' => 'The requested actions are in process',

	// L
	'label_1_autre_contribution' => 'other contribution',
	'label_actualise_le' => 'Updated on',
	'label_archive' => 'URL of the archive',
	'label_branches_spip' => 'Compatible',
	'label_compatibilite_spip' => 'Compatiblity',
	'label_critere_depot' => 'Repositories',
	'label_critere_doublon' => 'Compatibility',
	'label_critere_etat' => 'States',
	'label_critere_phrase' => 'Search in plugins',
	'label_destination' => 'Path from the directory "auto" where to drop the plugin',
	'label_modifie_le' => 'Edited on',
	'label_n_autres_contributions' => 'other contributions',
	'label_plugin_description' => 'Description of version @version@',
	'label_prefixe' => 'Prefix',
	'label_selectionner_plugin' => 'Sélect this plugin',
	'label_tags' => 'Tags',
	'label_type_depot' => 'Kind of repository:',
	'label_type_depot_git' => 'Repository under GIT',
	'label_type_depot_manuel' => 'Manual repository',
	'label_type_depot_svn' => 'Repository under SVN',
	'label_url_archives' => 'URL of the archives container',
	'label_url_brouteur' => 'URL of the sources root',
	'label_url_serveur' => 'Server URL',
	'label_version' => 'Version ',
	'label_xml_depot' => 'XML file of the repository',
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'Install plugins',
	'legende_rechercher_plugins' => 'Search plugins',
	'lien_demo' => 'Demo',
	'lien_documentation' => 'Documentation',

	// M
	'message_action_finale_get_fail' => 'The plugin "@plugin@" (Version : @version@) couldn’t be successfully downloaded',
	'message_action_finale_get_ok' => 'The plugin "@plugin@" (Version : @version@) has been successfully downloaded',
	'message_action_finale_getlib_fail' => 'The installation of the library "@plugin@" failed',
	'message_action_finale_getlib_ok' => 'The library "@plugin@" has been installed',
	'message_action_finale_geton_fail' => 'The download or the activation of the plugin "@plugin@" (Version: @version@) were not successful',
	'message_action_finale_geton_ok' => 'The download and the activation of the plugin "@plugin@" (Version: @version@) were successful',
	'message_action_finale_install_fail' => 'The installation of the plugin "@plugin@" (version: @version@) failed',
	'message_action_finale_install_ok' => 'The installation of the plugin "@plugin@" (Version: @version@) was successful',
	'message_action_finale_kill_fail' => 'The files of the plugin "@plugin@" (Version: @version@) couldn’t be properly deleted',
	'message_action_finale_kill_ok' => 'The files of the plugin "@plugin@" (Version: @version@) have been properly deleted',
	'message_action_finale_off_fail' => 'The deactivation of the plugin "@plugin@" (Version: @version@) was not successful',
	'message_action_finale_off_ok' => 'The deactivation of the plugin "@plugin@" (Version: @version@) was successful',
	'message_action_finale_on_fail' => 'The activation of the plugin "@plugin@" (Version: @version@) was not successful',
	'message_action_finale_on_ok' => 'The activation of the plugin "@plugin@" (Version: @version@) was successful',
	'message_action_finale_stop_fail' => 'Uninstallation of the plugin "@plugin@" (Version: @version@) was not successful',
	'message_action_finale_stop_ok' => 'Uninstallation of the plugin "@plugin@" (Version: @version@) was successful',
	'message_action_finale_up_fail' => 'The update of the plugin "@plugin@" (from version @version@ to @version_maj@) was not successful',
	'message_action_finale_up_ok' => 'The update of the plugin "@plugin@" (from version @version@ to @version_maj@) was successful',
	'message_action_finale_upon_fail' => 'The update and activation of the plugin "@plugin@" (from version @version@ to @version_maj@) were not correctly done',
	'message_action_finale_upon_ok' => 'The update and activation of the plugin "@plugin@" (from version @version@ to @version_maj@) were correctly done',
	'message_action_get' => 'Download the plugin "@plugin@" (Version : @version@)',
	'message_action_getlib' => 'Download the library "<a href="@version@" class="spip_out">@plugin@</a>"',
	'message_action_geton' => 'Download and activate the plugin "@plugin@" (Version : @version@)',
	'message_action_install' => 'The plugin "@plugin@" (version: @version@) will be installed',
	'message_action_kill' => 'Delete files from the plugin "@plugin@" (Version : @version@)',
	'message_action_off' => 'Deactivate the plugin "@plugin@" (Version : @version@)',
	'message_action_on' => 'Activate the plugin "@plugin@" (version: @version@)',
	'message_action_stop' => 'Uninstall the plugin "@plugin@" (version: @version@)',
	'message_action_up' => 'Updating the plugin "@plugin@" (from version @version@ to @version_maj@)',
	'message_action_upon' => 'Updating and activating the plugin "@plugin@" (Version : @version@)',
	'message_dependance_extension_php' => 'The plugin @plugin@ requires the PHP extension @dependance@.',
	'message_dependance_php' => 'The plugin @plugin@ requires @dependance@',
	'message_dependance_plugin' => 'The plugin @plugin@ depends on the plugin @dependance@.',
	'message_erreur_aucun_plugin_selectionne' => 'No plugin selected.',
	'message_erreur_ecriture_lib' => '@plugin@ requires the library <a href="@lib_url@">@lib@</a> stored in the <var>lib/</var> at the root of your site. However, this directory doesn’t exist or doesn’t have write permission. You must manually install the library or create this directory with write permission.',
	'message_erreur_maj_inconnu' => 'Impossible update of an unknown plugin.',
	'message_erreur_plugin_introuvable' => 'It is impossible to find the plugin@plugin@ for @action@.',
	'message_erreur_plugin_non_actif' => 'It is impossible to disable a plugin not active.',
	'message_incompatibilite_spip' => '@plugin@ is not compatible with the SPIP version you use.',
	'message_nok_aucun_depot_disponible' => 'No plugin is available! Please go to the page of repositories management to add lists of plugins.',
	'message_nok_aucun_paquet_ajoute' => 'The repository "@url@" doesn’t provide any new packet compared to the base already stored. It has not been added',
	'message_nok_aucun_plugin_selectionne' => 'No plugin to install. Please select the plugins you want to install.',
	'message_nok_champ_obligatoire' => 'This field is required',
	'message_nok_depot_deja_ajoute' => 'The URL "@url@" matches an already added a repository',
	'message_nok_maj_introuvable' => 'Update of the plugin "@plugin@" not found.',
	'message_nok_plugin_inexistant' => 'The requested plugin does not exist(@plugin@).',
	'message_nok_sql_insert_depot' => 'SQL error when adding the repository @objet@',
	'message_nok_url_archive' => 'The archive’s URL is invalid',
	'message_nok_url_depot_incorrecte' => 'The address "@url@" is incorrect',
	'message_nok_xml_non_conforme' => 'The description XML file "@fichier@" of the repository doesn’t conform',
	'message_nok_xml_non_recupere' => 'The XML file "@fichier@" could not be recovered',
	'message_ok_aucun_plugin_trouve' => 'No plugins that match the selected criteria.',
	'message_ok_depot_ajoute' => 'The repository "@url@" has been added.',
	'message_ok_plugins_trouves' => '@nb_plugins@ plugin(s) match the selected criteria (@tri@). Select below the plugins you want to download and activate on your server.',
	'message_telechargement_archive_effectue' => 'The archive has been correctly extracted in @dir@.',

	// N
	'nettoyer_actions' => 'Clean these actions! This will clear the list of actions that remain to be processed.',

	// O
	'onglet_depots' => 'Repositories management',
	'option_depot_tout' => 'All repositories',
	'option_doublon_non' => 'The latest version',
	'option_doublon_oui' => 'All compatible versions',
	'option_etat_tout' => 'All states',

	// P
	'placeholder_phrase' => 'prefix, name, slogan, description or author',
	'plugin_info_actif' => 'Active plugin',
	'plugin_info_up' => 'An update of the plugin is available (version @version@)',
	'plugin_info_verrouille' => 'Plugin locked',
	'plugins_inactifs_liste' => 'Inactive',
	'plugins_non_verrouilles_liste' => 'Not locked',
	'plugins_verrouilles_liste' => 'Locked',

	// R
	'resume_table_depots' => 'List of added repositories',
	'resume_table_paquets' => 'List of packages',
	'resume_table_plugins' => 'List of plugins @categorie@',

	// T
	'telecharger_archive_plugin_explication' => 'You can download an archive that will be stored in your directory "plugins/auto", by writing the URL of the archive in the input field.',
	'titre_depot' => 'Repository',
	'titre_depots' => 'Repositories',
	'titre_form_ajouter_depot' => 'Add a repository',
	'titre_form_charger_plugin' => 'Search and add plugins',
	'titre_form_charger_plugin_archive' => 'Download plugin from its archive URL',
	'titre_form_configurer_svp' => 'Setup the plugins server',
	'titre_liste_autres_contributions' => 'Templates, libraries, icon sets...',
	'titre_liste_autres_depots' => 'Other repositories',
	'titre_liste_depots' => 'List of available repositories',
	'titre_liste_paquets_plugin' => 'List of packages of the plugin',
	'titre_liste_plugins' => 'List of plugins',
	'titre_logo_depot' => 'Repository logo',
	'titre_logo_plugin' => 'Plugin logo',
	'titre_nouveau_depot' => 'New repository',
	'titre_page_configurer' => 'Plugins server',
	'titre_paquet' => 'Package',
	'titre_paquets' => 'Packages',
	'titre_plugin' => 'Plugin ',
	'titre_plugins' => 'Plugins',
	'tout_cocher' => 'Check all',
	'tout_cocher_up' => 'Check the updates',
	'tout_decocher' => 'Uncheck all'
);
