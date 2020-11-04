<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de https://trad.spip.net/tradlang_module/svp?lang_cible=fr_tu
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'Les actions sont en cours de traitement. Patience…',
	'actions' => 'Actions',
	'actions_a_faire' => 'Actions à traiter',
	'actions_demandees' => 'Actions demandées :',
	'actions_en_erreur' => 'Erreurs survenues',
	'actions_necessaires' => 'Les actions supplémentaires suivantes seront effectuées :',
	'actions_non_traitees' => 'Actions non réalisées',
	'actions_realises' => 'Actions réalisées',
	'afficher_les_plugins_incompatibles' => 'Afficher les plugins incompatibles',
	'alerte_compatibilite' => 'Compatibilité forcée',
	'alerte_compatibilite_version_autorisee' => 'Les plugins compatibles avec SPIP <code>@version@</code> peuvent être activés.',

	// B
	'bouton_activer' => 'Activer',
	'bouton_actualiser' => 'Actualiser',
	'bouton_actualiser_tout' => 'Actualiser les dépôts',
	'bouton_appliquer' => 'Appliquer',
	'bouton_configurer' => 'Configurer',
	'bouton_confirmer' => 'Confirmer',
	'bouton_desactiver' => 'Désactiver',
	'bouton_desinstaller' => 'Désinstaller',
	'bouton_installer' => 'Télécharger et activer',
	'bouton_modifier_depot' => 'Modifier le dépôt',
	'bouton_supprimer' => 'Supprimer',
	'bouton_up' => 'Mettre à jour',
	'bulle_actualiser_depot' => 'Actualiser les paquets du dépôt',
	'bulle_actualiser_tout_depot' => 'Actualiser les paquets de tous les dépôts',
	'bulle_afficher_xml_plugin' => 'Contenu du fichier XML du plugin',
	'bulle_ajouter_spipzone' => 'Ajouter le dépôt SPIP-Zone',
	'bulle_aller_demonstration' => 'Se rendre sur la page de démonstration',
	'bulle_aller_depot' => 'Se rendre sur la page de ce dépôt',
	'bulle_aller_documentation' => 'Se rendre sur la page de documentation',
	'bulle_aller_plugin' => 'Se rendre sur la page du plugin',
	'bulle_supprimer_depot' => 'Supprimer le dépôt et ses paquets',
	'bulle_telecharger_archive' => 'Télécharger l’archive',
	'bulle_telecharger_fichier_depot' => 'Télécharger le fichier XML du dépôt',
	'bulle_telecharger_librairie' => 'Télécharger la bibliothèque',

	// C
	'cacher_les_plugins_incompatibles' => 'Cacher les plugins incompatibles',
	'config_activer_log_verbeux' => 'Activer les logs verbeux ?',
	'config_activer_log_verbeux_explication' => 'Cette option rend les logs de SVP beaucoup plus locaces…',
	'config_activer_pas_a_pas' => 'Activer le mode pas-à-pas ?',
	'config_activer_pas_a_pas_explication' => 'Activer ce mode permet d’afficher un bilan après chaque action réalisée, au lieu d’avoir uniquement un bilan global de toutes les actions effectuées à la fin des traitements.',
	'config_activer_runtime' => 'Activer le mode runtime ?',
	'config_activer_runtime_explication' => 'Le mode runtime (oui) ne charge que les plugins compatibles avec la version courante de votre SPIP, ce qui est fortement conseillé pour la plupart des usages. En mode non runtime (non), tous les plugins d’un dépôt sont chargés, quelle que soit la version du SPIP en cours. Cela est uniquement utile pour utiliser SVP afin de présenter tous les plugins existants comme le fait le site Plugins SPIP (plugins.spip.net)',
	'config_autoriser_activer_paquets_obsoletes' => 'Autoriser l’activation des paquets obsolètes ?',
	'config_autoriser_activer_paquets_obsoletes_explication' => 'Les paquets obsolètes sont des paquets locaux présents qui sont plus anciens que d’autres paquets locaux. L’obsolescence est établie sur la base de l’état (stable, test, dev) du paquet ainsi que sur la base de sa version. Active cette option si tu souhaites malgré tout pouvoir activer ces plugins obsolètes.',
	'config_depot_editable' => 'Permettre l’édition des dépôts ?',
	'config_depot_editable_explication' => 'Cela rend éditable les informations d’un dépôt et permet ainsi de leur joindre éventuellement des mots-clés ou documents. Cette option ne devrait intéresser personne ! Préférez laisser « non » !',
	'confirmer_desinstaller' => 'Attention, la désinstallation d’un plugin <b>efface</b> ses données de la base et est irréversible.<br />Si tu n’es pas certain, désactives simplement le plugin.',
	'confirmer_telecharger_dans' => 'Le plugin sera chargé dans un répertoire (@dir@) qui existe déjà.
	Cela écrasera le contenu de ce répertoire.
	Une copie de l’ancien contenu sera sauvegardé dans « @dir_backup@ ».
		Tu dois confirmer cette action.',

	// E
	'erreur_actions_non_traitees' => 'Certaines actions n’ont pas été réalisées. Cela peut provenir d’une erreur lors des actions à réaliser, ou d’un affichage de cette page alors que des actions sont encore en cours. Les actions avaient été lancées par @auteur@ le @date@.',
	'erreur_auth_plugins_ajouter_lib' => 'Tu n’as pas les droits nécessaires pour ajouter une bibliothèque.',
	'erreur_dir_dib_ecriture' => 'Le répertoire des bibliothèques @dir@ n’est pas accessible en écriture. Impossible d’y charger une bibliothèque !',
	'erreur_dir_dib_indefini' => 'Le répertoire _DIR_LIB n’est pas défini. Impossible d’y charger une bibliothèque !',
	'erreur_dir_plugins_auto' => 'Le répertoire « plugins/auto » permettant de télécharger des paquets
		n’est pas créé ou n’est pas accessible en écriture.
		<strong>Tu dois le créer pour pouvoir installer de nouveaux plugins depuis cette interface.</strong>',
	'erreur_dir_plugins_auto_ecriture' => 'Le répertoire de paquets @dir@ n’est pas accessible en écriture. Impossible d’y charger un paquet !',
	'erreur_dir_plugins_auto_indefini' => 'Le répertoire _DIR_PLUGINS_AUTO n’est pas défini. Impossible d’y charger un paquet !',
	'erreur_dir_plugins_auto_titre' => '« plugins/auto » est inaccessible !',
	'erreur_teleporter_chargement_source_impossible' => 'Chargement impossible de la source @source@',
	'erreur_teleporter_destination_erreur' => 'Répertoire @dir@ non accessible pour téléporter',
	'erreur_teleporter_echec_deballage_archive' => 'Impossible de déballer @fichier@',
	'erreur_teleporter_format_archive_non_supporte' => 'Le format @extension@ n’est pas supporté par le téléporteur',
	'erreur_teleporter_methode_inconue' => 'Méthode @methode@ inconnue pour téléporter',
	'erreur_teleporter_type_fichier_inconnu' => 'Type de fichier inconnu pour la source @source@',
	'erreurs_xml' => 'Impossible de lire certaines descriptions XML',
	'etat_actif' => 'Actif',
	'etat_inactif' => 'Inactif',
	'etat_obsolete' => 'Obsolète',
	'etat_verrouille' => 'Verrouillé',
	'explication_destination' => 'Le chemin sera calculé depuis le nom de l’archive si tu ne le remplis pas.',

	// F
	'fieldset_debug' => 'Débug',
	'fieldset_edition' => 'Édition',
	'fieldset_fonctionnement' => 'Fonctionnement',
	'fieldset_typologie' => 'Typologie des plugins',
	'filtrer' => 'Filtrer',

	// I
	'info_0_plugin' => 'aucun plugin',
	'info_1_depot' => '1 dépôt',
	'info_1_paquet' => '1 paquet',
	'info_1_plugin' => '1 plugin',
	'info_admin_plugin_actif_non_verrou_non' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.',
	'info_admin_plugin_actif_non_verrou_tous' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.',
	'info_admin_plugin_actif_oui_verrou_non' => 'Cette page liste les plugins actifs et non verrouillés du site.',
	'info_admin_plugin_actif_oui_verrou_tous' => 'Cette page liste tous les plugins actifs du site, verrouillés ou pas.',
	'info_admin_plugin_verrou_non' => 'Cette page liste tous les plugins non verrouillés du site, actifs ou pas.',
	'info_admin_plugin_verrou_tous' => 'Cette page liste tous les plugins du site.',
	'info_admin_plugin_verrouille' => 'Cette page liste les plugins actifs et verrouillés (placés dans le répertoire <code>@dir_plugins_dist@</code>).
	Si tu souhaites les désactiver,
	contacte le webmestre du site,
	ou reporte-toi <a href="https://programmer.spip.net/repertoire_plugins-dist">à la documentation</a>.',
	'info_adresse_spipzone' => 'SPIP-Zone - Plugins',
	'info_ajouter_depot' => 'En ajoutant des dépôts à votre base, tu auras la possiblité d’obtenir des informations et d’effectuer des recherches sur tous les paquets hébergés par les dépôts ajoutés.<br />Un dépôt est décrit par un fichier XML contenant les informations sur le dépôt et sur tous ses paquets.',
	'info_aucun_depot' => 'aucun dépôt',
	'info_aucun_depot_ajoute' => 'Aucun dépôt disponible !<br /> Utilise le formulaire ci-dessous pour ajouter le dépôt « SPIP-Zone - Plugins » dont l’url est déjà pré-remplie ou un autre dépôt de ton choix.',
	'info_aucun_paquet' => 'aucun paquet',
	'info_aucun_plugin' => 'aucun plugin',
	'info_boite_charger_plugin' => '<strong>Cette page est uniquement accessible aux webmestres du site.</strong><p>Elle te permet de rechercher des plugins mis à disposition par les dépôts enregistrés dans ta configuration et de les installer physiquement sur ton serveur</p>',
	'info_boite_depot_gerer' => '<strong>Cette page est uniquement accessible aux webmestres du site.</strong><p>Elle permet l’ajout et l’actualisation des dépôts de plugins.</p>',
	'info_charger_plugin' => 'Pour ajouter un ou plusieurs plugins, effectue préalablement une recherche multi-critères sur les plugins de la galaxie SPIP. La recherche n’inclut que les plugins compatibles avec la version SPIP installée et signale les plugins déjà actifs sur le site.',
	'info_compatibilite_dependance' => 'Pour @compatibilite@ :',
	'info_contributions_hebergees' => '@total_autres@ autre(s) contribution(s) hébergée(s)',
	'info_critere_phrase' => 'Saisis les mots-clés à chercher dans le préfixe, le nom, le slogan, la description et les auteurs des plugins',
	'info_depots_disponibles' => '@total_depots@ dépôt(s)',
	'info_fichier_depot' => 'Saisis l’url du fichier de description du dépôt à ajouter.<br />Pour ajouter le dépôt « SPIP-Zone - Plugins » clique sur ce lien : ',
	'info_logiciel_version' => '@logiciel@ @signe@ @version@',
	'info_logiciel_version_intervalle' => '@logiciel@ @signe_min@ @version_min@ et @signe_max@ @version_max@',
	'info_nb_depots' => '@nb@ dépôts',
	'info_nb_paquets' => '@nb@ paquets',
	'info_nb_plugins' => '@nb@ plugins',
	'info_paquets_disponibles' => '@total_paquets@ paquet(s) disponible(s)',
	'info_plugin_attente_dependance' => 'dépendances manquantes',
	'info_plugin_incompatible' => 'version incompatible',
	'info_plugin_installe' => 'déjà installé',
	'info_plugin_obsolete' => 'version obsolète',
	'info_plugins_disponibles' => '@total_plugins@ plugin(s) disponible(s)',
	'info_plugins_heberges' => '@total_plugins@ plugin(s) hébergé(s)',
	'info_tri_nom' => 'classé(s) par ordre alphabétique',
	'info_tri_score' => 'classé(s) selon leur pertinence décroissante',
	'info_type_depot_git' => 'Dépôt géré sous GIT',
	'info_type_depot_manuel' => 'Dépôt géré manuellement',
	'info_type_depot_svn' => 'Dépôt géré sous SVN',
	'info_verrouille' => 'Impossible de désactiver ou de désinstaller ce plugin.',
	'installation_en_cours' => 'Les actions demandées sont en cours de traitement',

	// L
	'label_1_autre_contribution' => 'autre contribution',
	'label_actualise_le' => 'Actualisé le',
	'label_archive' => 'URL de l’archive',
	'label_branches_spip' => 'Compatible',
	'label_compatibilite_spip' => 'Compatiblité',
	'label_critere_depot' => 'Dépôts',
	'label_critere_doublon' => 'Compatibilité',
	'label_critere_etat' => 'États',
	'label_critere_phrase' => 'Rechercher dans les plugins',
	'label_destination' => 'Chemin depuis le répertoire « auto » où déposer le plugin',
	'label_etat' => 'État',
	'label_modifie_le' => 'Modifié le',
	'label_n_autres_contributions' => 'autres contributions',
	'label_plugin_description' => 'Description de la version @version@',
	'label_prefixe' => 'Préfixe',
	'label_selectionner_plugin' => 'Sélectionner ce plugin',
	'label_tags' => 'Tags',
	'label_type_depot' => 'Type de dépôt :',
	'label_type_depot_git' => 'Dépôt sous GIT',
	'label_type_depot_manuel' => 'Dépôt manuel',
	'label_type_depot_svn' => 'Dépôt sous SVN',
	'label_url_archives' => 'URL du conteneur des archives',
	'label_url_brouteur' => 'URL de la racine des sources',
	'label_url_serveur' => 'URL du serveur',
	'label_version' => 'Version',
	'label_xml_depot' => 'Fichier XML du dépôt',
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'Installer des plugins',
	'legende_rechercher_plugins' => 'Rechercher des plugins',
	'lien_demo' => 'Démonstration',
	'lien_details_moins' => 'Moins d’infos',
	'lien_details_plus' => 'Plus d’infos',
	'lien_documentation' => 'Documentation',

	// M
	'message_action_finale_get_fail' => 'Le plugin « @plugin@ » (version : @version@) n’a pu être correctement récupéré',
	'message_action_finale_get_ok' => 'Le plugin « @plugin@ » (version : @version@) a été correctement récupéré',
	'message_action_finale_getlib_fail' => 'L’installation de la bibliothèque « @plugin@ » a échoué',
	'message_action_finale_getlib_ok' => 'La bibliothèque « @plugin@ » a été installée',
	'message_action_finale_geton_fail' => 'Le téléchargement ou l’activation du plugin « @plugin@ » (version : @version@) ne se sont pas correctement déroulés',
	'message_action_finale_geton_ok' => 'Le téléchargement et l’activation du plugin « @plugin@ » (version : @version@) se sont correctement déroulés',
	'message_action_finale_install_fail' => 'L’installation du plugin « @plugin@ » (version : @version@) a échoué',
	'message_action_finale_install_ok' => 'L’installation du plugin « @plugin@ » (version : @version@) s’est correctement déroulée',
	'message_action_finale_kill_fail' => 'Les fichiers du plugin « @plugin@ » (version : @version@) n’ont pu être correctement effacés',
	'message_action_finale_kill_ok' => 'Les fichiers du plugin « @plugin@ » (version : @version@) ont été correctement effacés',
	'message_action_finale_off_fail' => 'La désactivation du plugin « @plugin@ » (version : @version@) ne s’est pas correctement déroulée',
	'message_action_finale_off_ok' => 'La désactivation du plugin « @plugin@ » (version : @version@) s’est correctement déroulée',
	'message_action_finale_on_fail' => 'L’activation du plugin « @plugin@ » (version : @version@) ne s’est pas correctement déroulée',
	'message_action_finale_on_ok' => 'L’activation du plugin « @plugin@ » (version : @version@) s’est correctement déroulée',
	'message_action_finale_stop_fail' => 'La désinstallation du plugin « @plugin@ » (version : @version@) ne s’est pas correctement déroulée',
	'message_action_finale_stop_ok' => 'La désinstallation du plugin « @plugin@ » (version : @version@) s’est correctement déroulée',
	'message_action_finale_up_fail' => 'La mise à jour du plugin « @plugin@ » (de la version : @version@ à @version_maj@) ne s’est pas correctement déroulée',
	'message_action_finale_up_ok' => 'La mise à jour du plugin « @plugin@ » (de la version : @version@ à @version_maj@) s’est correctement déroulée',
	'message_action_finale_upon_fail' => 'La mise à jour et l’activation du plugin « @plugin@ » (de la version : @version@ à @version_maj@) ne se sont pas correctement déroulées',
	'message_action_finale_upon_ok' => 'La mise à jour et l’activation du plugin « @plugin@ » (de la version : @version@ à @version_maj@) se sont correctement déroulées',
	'message_action_get' => 'Télécharger le plugin « @plugin@ » (version : @version@)',
	'message_action_getlib' => 'Télécharger la bibliothèque « <a href="@version@" class="spip_out">@plugin@</a> »',
	'message_action_geton' => 'Télécharger et activer le plugin « @plugin@ » (version : @version@)',
	'message_action_install' => 'Le plugin « @plugin@ » (version : @version@) va être installé',
	'message_action_kill' => 'Suppression des fichiers du plugin « @plugin@ » (version : @version@)',
	'message_action_off' => 'Désactiver le plugin « @plugin@ » (version : @version@)',
	'message_action_on' => 'Activer le plugin « @plugin@ » (version : @version@)',
	'message_action_stop' => 'Désinstaller le plugin « @plugin@ » (version : @version@)',
	'message_action_up' => 'Mise à jour du plugin « @plugin@ » (de la version @version@ à @version_maj@)',
	'message_action_upon' => 'Mise à jour et activation du plugin « @plugin@ » (version : @version@)',
	'message_dependance_extension_php' => 'Le plugin @plugin@ nécessite l’extension PHP @dependance@.',
	'message_dependance_php' => 'Le plugin @plugin@ nécessite @dependance@',
	'message_dependance_plugin' => 'Le plugin @plugin@ dépend de @dependance@.',
	'message_erreur_aucun_plugin_selectionne' => 'Aucun plugin sélectionné.',
	'message_erreur_ecriture_lib' => '@plugin@ a besoin de la bibliothèque <a href="@lib_url@">@lib@</a> placée dans le répertoire <var>lib/</var> à la racine de votre site. Cependant, ce répertoire n’existe pas ou n’est pas accessible en écriture. Tu dois installer manuellement cette bibliothèque ou créer ce répertoire en lui donnant des permissions d’écriture.',
	'message_erreur_maj_inconnu' => 'Mise à jour impossible d’un plugin inconnu.',
	'message_erreur_plugin_introuvable' => 'Il est impossible de trouver le plugin @plugin@ pour @action@.',
	'message_erreur_plugin_non_actif' => 'Il est impossible de désactiver un plugin non actif.',
	'message_incompatibilite_spip' => '@plugin@  n’est pas compatible avec la version de SPIP que tu utilises.',
	'message_nok_aucun_depot_disponible' => 'Aucun plugin n’est disponible ! Rends-toi dans la page de gestion des dépôts pour ajouter des listes de plugins.',
	'message_nok_aucun_paquet_ajoute' => 'Le dépôt « @url@ » ne fournit aucun nouveau paquet par rapport à la base déjà enregistrée. Il n’a donc pas été ajouté',
	'message_nok_aucun_plugin_selectionne' => 'Aucun plugin à installer. Sélectionne les plugins à installer',
	'message_nok_champ_obligatoire' => 'Ce champ est obligatoire',
	'message_nok_depot_deja_ajoute' => 'L’adresse « @url@ » correspond à un dépôt déjà ajouté',
	'message_nok_maj_introuvable' => 'Mise à jour du plugin @plugin@ introuvable.',
	'message_nok_plugin_inexistant' => 'Le plugin demandé est inexistant (@plugin@).',
	'message_nok_sql_insert_depot' => 'Erreur SQL lors de l’ajout du dépôt @objet@',
	'message_nok_url_archive' => 'L’URL de l’archive est invalide',
	'message_nok_url_depot_incorrecte' => 'L’adresse « @url@ » est incorrecte',
	'message_nok_xml_non_conforme' => 'Le fichier XML « @fichier@ » de description du dépôt n’est pas conforme',
	'message_nok_xml_non_recupere' => 'Le fichier XML « @fichier@ » n’a pas pu être récupéré',
	'message_ok_aucun_plugin_trouve' => 'Aucun plugin ne correspond aux critères choisis.',
	'message_ok_depot_ajoute' => 'Le dépôt « @url@ » a été ajouté.',
	'message_ok_plugins_trouves' => '@nb_plugins@ plugin(s) correspondent aux critères choisis (@tri@). Sélectionne ci-dessous les plugins que tu souhaites télécharger et activer sur ton serveur.',
	'message_telechargement_archive_effectue' => 'L’archive a été correctement extraite dans @dir@.',

	// N
	'nettoyer_actions' => 'Nettoyer ces actions ! Cela effacera la liste des actions qui restent à traiter.',

	// O
	'onglet_depots' => 'Gérer les dépôts',
	'option_depot_tout' => 'Tous les dépôts',
	'option_doublon_non' => 'La version la plus récente',
	'option_doublon_oui' => 'Toutes les versions compatibles',
	'option_etat_tout' => 'Tous les états',

	// P
	'placeholder_phrase' => 'préfixe, nom, slogan, description ou auteur',
	'plugin_info_actif' => 'Plugin actif',
	'plugin_info_up' => 'Une mise à jour est disponible (@version@)',
	'plugin_info_up_x' => 'Une mise à jour majeure est disponible (@version@). Penses à vérifier les incompatibilités.',
	'plugin_info_up_y' => 'Une mise à jour fonctionnelle est disponible (@version@).',
	'plugin_info_up_z' => 'Une mise à jour corrective est disponible (@version@).',
	'plugin_info_verrouille' => 'Plugin verrouillé',
	'plugins_inactifs_liste' => 'Inactifs',
	'plugins_non_verrouilles_liste' => 'Non verrouillés',
	'plugins_verrouilles_liste' => 'Verrouillés',

	// R
	'resume_table_depots' => 'Liste des dépôts ajoutés',
	'resume_table_paquets' => 'Liste des paquets',
	'resume_table_plugins' => 'Liste des plugins @categorie@',

	// T
	'telecharger_archive_plugin_explication' => 'Tu peux télécharger une archive qui se chargera
		dans ton répertoire « plugins/auto », en écrivant l’URL de l’archive dans le champ de saisie.',
	'titre_depot' => 'Dépôt',
	'titre_depots' => 'Dépôts',
	'titre_form_ajouter_depot' => 'Ajouter un dépôt',
	'titre_form_charger_plugin' => 'Rechercher et ajouter des plugins',
	'titre_form_charger_plugin_archive' => 'Télécharger un plugin depuis son archive',
	'titre_form_configurer_svp' => 'Configurer le Serveur de Plugins',
	'titre_liste_autres_contributions' => 'Squelettes, bibliothèques, jeux d’icones...',
	'titre_liste_autres_depots' => 'Autres dépôts',
	'titre_liste_depots' => 'Liste des dépôts disponibles',
	'titre_liste_paquets_plugin' => 'Liste des paquets du plugin',
	'titre_liste_plugins' => 'Liste des plugins',
	'titre_logo_depot' => 'Logo du dépôt',
	'titre_logo_plugin' => 'Logo du plugin',
	'titre_nouveau_depot' => 'Nouveau dépôt',
	'titre_page_configurer' => 'Serveur de Plugins',
	'titre_paquet' => 'Paquet',
	'titre_paquets' => 'Paquets',
	'titre_plugin' => 'Plugin',
	'titre_plugins' => 'Plugins',
	'tout_cocher' => 'Tout cocher',
	'tout_cocher_up' => 'Cocher les mises à jour',
	'tout_decocher' => 'Tout décocher'
);
