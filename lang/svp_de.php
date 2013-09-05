<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.net/tradlang_module/svp?lang_cible=de
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'Die AKtionen werden ausgeführt. Bitte warten …',
	'actions_a_faire' => 'Auszuführende Aktionen',
	'actions_demandees' => 'Angeforderte Aktionen:',
	'actions_en_erreur' => 'Aufgetretene Fehler',
	'actions_necessaires' => 'Folgende Aktionen werden zusätzlich ausgeführt:',
	'actions_non_traitees' => 'Nicht ausgeführte Aktionen',
	'actions_realises' => 'Ausgeführte Aktionen',
	'afficher_les_plugins_incompatibles' => 'Inkompatible Plugins anzeigen',
	'alerte_compatibilite' => 'Kompatibilität erzwungen',

	// B
	'bouton_activer' => 'Aktivieren',
	'bouton_actualiser' => 'Aktualisieren',
	'bouton_actualiser_tout' => 'Softwaredepots aktualisieren',
	'bouton_appliquer' => 'Anwenden',
	'bouton_confirmer' => 'Bestätigen',
	'bouton_desactiver' => 'Deaktivieren',
	'bouton_desinstaller' => 'Deinstallieren',
	'bouton_installer' => 'Laden und aktivieren',
	'bouton_modifier_depot' => 'Softwaredepot ändern',
	'bouton_supprimer' => 'Löschen',
	'bouton_up' => 'Aktualisieren',
	'bulle_actualiser_depot' => 'Pakete des Softwaredepots aktualisieren',
	'bulle_actualiser_tout_depot' => 'Pakete aller Softwaredepots aktualisieren',
	'bulle_afficher_xml_plugin' => 'Inhalt der XML-Date des Plugins',
	'bulle_ajouter_spipzone' => 'Das Softwaredepot SPIP-Zone hinzufügen',
	'bulle_aller_depot' => 'Seite des Softwaredepots öffnen',
	'bulle_aller_documentation' => 'Dokumentationsseite öffnen',
	'bulle_aller_plugin' => 'Seite des Plugins öffnen',
	'bulle_supprimer_depot' => 'Softwaredepot und Pakete löschen',
	'bulle_telecharger_archive' => 'Archiv laden',
	'bulle_telecharger_fichier_depot' => 'XML-Datei des Softwaredepots laden',
	'bulle_telecharger_librairie' => 'Bibliothek laden',

	// C
	'cacher_les_plugins_incompatibles' => 'Inkompatible Plugins ausblenden',
	'categorie_aucune' => 'Ohne Kategorie',
	'categorie_auteur' => 'Authentifikation, Autor, Autorisation',
	'categorie_communication' => 'Kommunication, Interactivität, Nachrichtensysteme',
	'categorie_date' => 'Termine, Kalender, Datum',
	'categorie_divers' => 'Neue Objekte, externe Services',
	'categorie_edition' => 'Textbearbeitung, Drucken, Redaktion',
	'categorie_maintenance' => 'Verwaltung, Wartung',
	'categorie_multimedia' => 'Bilder, Galerien, Multimedia',
	'categorie_navigation' => 'Navigation, Suchen, Organisation',
	'categorie_outil' => 'Entwicklungswerkzeuge',
	'categorie_performance' => 'Optimierung, Leistungssteigerung, Sicherheit',
	'categorie_squelette' => 'Skelette',
	'categorie_statistique' => 'Linkmanagement, Statistik',
	'categorie_theme' => 'Thema',
	'config_activer_log_verbeux' => 'Ausführliche Logs einschalten?',
	'config_activer_log_verbeux_explication' => 'Mit diese Option werden die ausführlichen SVP-Logs aktiviert…',
	'config_activer_pas_a_pas' => 'Schrittweise Ausführung aktvieren?',
	'config_activer_pas_a_pas_explication' => 'In diesem Modus wird nicht nur eine Zusammenfassung nach Abschluss aller Aktionen sondern das Ergebnis einzeln nach jeder Aktion angezeigt.',
	'config_activer_runtime' => 'Runtime-Modus aktivieren?',
	'config_activer_runtime_explication' => 'Im Runtime-Modus (oui) werden nur mit der gerade ausgeführten Version von SPIP kompatible Plugins geladen. Diese Einstellung empfiehlt sich so gut wie immer. Im abgeschalteten Runtime-Modus (non) werden unabhängig von der jeweiligen SPIP-Version alle Plugins eines Depots geladen. Die einzige sinnvolle Anwendung dieser Einstellung besteht darin, mit SVP alle vorhandenen Plugins anzuzeigen, wie im Fall der Website SPIP-Plugins (plugins.spip.net).',
	'config_autoriser_activer_paquets_obsoletes' => 'Aktivierung überflüssiger Pakete erlauben?',
	'config_autoriser_activer_paquets_obsoletes_explication' => 'Überflüssige Pakete sind lokal vorhandene, die älter als gleichartige lokal installierte sind. Ob ein Paket überflüssig ist, wird anhand seines Status (stabil, test, dev) und aufgrund seiner Version ermittelt. Aktivieren sie diese Option, falls sie solche veralteten Pakete aktivieren möchten.',
	'config_depot_editable' => 'Bearbeitung der Depots erlauben?',
	'config_depot_editable_explication' => 'Hiermit können die Informationen über ein Depot bearbeitet werden und dem Depot z.B. Schlagworte zugeordnet werden. Diese Option sollte in der Regel ohne Nutzen sein! Die Einstellung «non» sollte beibehalten werden!',
	'confirmer_telecharger_dans' => 'Das Plugin wird in das vorhandene Verzeichnis (@dir@) geladen.
	Der Inhalt dieses Verzeichnis wird dabei überschrieben.
	Eine Kopie des Verzeichnisinhalts wird in « @dir_backup@ » angelegt.
		Sie müssen diese Aktion bestätigen.',

	// E
	'erreur_actions_non_traitees' => 'Manche Aktionen konnten nicht ausgefühert werden. Die Ursache kann entweder ein Ausführungsfehler sein, oder diese Seite wurde neu geladen, währen die Aktionen noch nicht abgeschlossen waren. Die Aktionen wurden von @auteur@ am @date@ ausgelöst.',
	'erreur_auth_plugins_ajouter_lib' => 'Vous n\'avez pas les droits nécessaires pour ajouter une librairie.', # NEW
	'erreur_dir_dib_ecriture' => 'In das Verzeichnis für Bibliotheken @dir@ kann nicht geschrieben werden. Bibliotheken können nicht geladen werden!',
	'erreur_dir_dib_indefini' => 'Das Verzeichnis _DIR_LIB wurde nicht definiert. Bibliotheken können dadurch nicht geladen werden !',
	'erreur_dir_plugins_auto' => 'Das Verzeichnis « plugins/auto », in das Pakete geladen werden,
existiert nicht oder hat keinen Schreibrechte.
		<strong>Sie müssen es anlegen, um mit diesem Interface neue Plugins zu installieren.</strong>',
	'erreur_dir_plugins_auto_ecriture' => 'Das Verzeichnis für Pakete @dir@ hat keine Schreibrechte. Es ist so nicht möglich, Pakte zu laden!',
	'erreur_dir_plugins_auto_indefini' => 'Das Verzeichnis _DIR_PLUGIN_AUTO wurde nicht definiert. Das ist erforderlich, um dort Pakete zu laden!',
	'erreur_dir_plugins_auto_titre' => 'auf « plugins/auto » kann nicht zugegriffen werden!',
	'erreur_teleporter_chargement_source_impossible' => 'Die Quelle source @source@ kann nicht geladen werden.',
	'erreur_teleporter_destination_erreur' => 'Das Verzeichnis @dir@ ist für Datenübertragungen nicht zugänglich.',
	'erreur_teleporter_echec_deballage_archive' => 'Die Datei @fichier@ kann nicht entpackt werden.',
	'erreur_teleporter_format_archive_non_supporte' => 'Datenübertragungen im Format @extension@ werden nicht unterstützt.',
	'erreur_teleporter_methode_inconue' => 'Datenübertragung mit der Methode @methode@ ist nicht eingerichtet.',
	'erreur_teleporter_type_fichier_inconnu' => 'Dateityp der Quelle @source@ unbekannt',
	'erreurs_xml' => 'Manche XML-Beschreibungen können nicht gelesen werden.',
	'explication_destination' => 'Der Pfadname wird von der Bezeichnung des Archivs abgeleitet, wenn sie ihn nicht eintragen..',

	// F
	'fieldset_debug' => 'Debug',
	'fieldset_edition' => 'Bearbeiten',
	'fieldset_fonctionnement' => 'Funktionsweise',

	// I
	'info_1_depot' => '1 Depot',
	'info_1_paquet' => '1 Paket',
	'info_1_plugin' => '1 Plugin',
	'info_admin_plugin_actif_non_verrou_non' => 'Diese Seite zeigt eine Liste der inaktiven Plugins de Website. Diese Plugins sind zwangsläufig aktivierbar und deaktivierbar.',
	'info_admin_plugin_actif_non_verrou_tous' => 'Diese Seite zeigt die inaktiven Plugins der Website. Diese Plugins sind nie verriegelt.',
	'info_admin_plugin_actif_oui_verrou_non' => 'Diese Seite zeigt alle aktiven und nicht verriegelten Plugins der Website.',
	'info_admin_plugin_actif_oui_verrou_tous' => 'Diese Seite zeigt alle aktiven Plugins der Website, auch die verriegelten.',
	'info_admin_plugin_verrou_non' => 'Diese Seite zeigt alle nicht gesperrten, aktiven und deaktivierten Plugins der Seite an.',
	'info_admin_plugin_verrou_tous' => 'Diese Seite zeigt alle Plugins der Website an.',
	'info_admin_plugin_verrouille' => 'Diese Seite zeigt alle aktiven und verriegelten  (im Verzeichnis <code>@dir_plugins_dist@</code> gespeicherten) Plugins.
	Wenn sie sie deaktivieren möchten, wenden sie sich bitte an den Webmaster,
	oder ziehen sie die Informationen in <a href="http://programmer.spip.org/repertoire_plugins_dist">zu Rate.</a>.', # MODIF
	'info_adresse_spipzone' => 'SPIP-Zone - Plugins',
	'info_ajouter_depot' => 'Wenn sie Depots in ihre Datenbank eintragen, können sie auf die Informationen über alle dort gespeicherten Pakete zugreifen und gezielt in den im Depot vorhandenen Paketen suchen.<br />Ein Depot wird durch eine XML-Datei beschrieben, die Informationen über das Depot selbst und die in ihm gespeicherten Pakete enthält.',
	'info_aucun_depot' => 'Kein Depot',
	'info_aucun_depot_ajoute' => 'Kein Depot verfügbar!<br /> Verwenden sie das Formular, um das Depot «SPIP-Zone - Plugins» in die Datenbank einzutragen. Sein URL steht bereits im Formular, sie können aber auch ein anderes Depot ihrer Wahl eintragen.',
	'info_aucun_paquet' => 'Kein Paket',
	'info_aucun_plugin' => 'Kein Plugin',
	'info_boite_charger_plugin' => '<strong>Diese Seite ist nur für den Webmaster der Site zugänglich.</strong><p>Sie ermöglicht ihnen, in den eingetragenen Depots nach Plugins zu suchen und diese auf ihrem Server zu installieren.</p>',
	'info_boite_depot_gerer' => '<strong>Diese Seite ist nur für den Webmaster der Site zugänglich.</strong><p>Sie ermöglich das Aktualisieren und Hinzufügen von Depots für Plugins.</p>',
	'info_charger_plugin' => 'Sie können ihrer Website ein oder mehrere Plugins hinzufügen, indem sie eine Auswahl nach ihren Kriterien treffen. Die SPIP-Galaxis wird mit ihren Kriterien nach den mit Ihrer SPIP-Version kompatiblen Plugins durchsucht und zeigt ebenfalls bereits in ihrer Website aktive Plugins an.',
	'info_compatibilite_dependance' => 'Für @compatibilite@ :',
	'info_contributions_hebergees' => '@total_autres@ weitere Kontributionen beherbergt',
	'info_critere_phrase' => 'Geben sie die Schlagworte ein, nach denen in Präfix, Name, Slogan, Beschreibung und Autoren der Plugins gesucht werden soll.',
	'info_depots_disponibles' => '@total_depots@ Depot/s',
	'info_fichier_depot' => 'Bitte geben sie den URL der Datei ein, die den Inhalt des Depots beschreibt.<br />Um «SPIP-Zone - Plugins» hinzuzufügen, klicken sie bitte auf den Link: ',
	'info_nb_depots' => '@nb@ Depots',
	'info_nb_paquets' => '@nb@ Pakete',
	'info_nb_plugins' => '@nb@ Plugins',
	'info_paquets_disponibles' => '@total_paquets@ Paket(e) verfügbar',
	'info_plugin_attente_dependance' => 'fehlende Abhängigkeiten',
	'info_plugin_incompatible' => 'Version inkompatibel',
	'info_plugin_installe' => 'bereits installiert',
	'info_plugin_obsolete' => 'veraltete Version',
	'info_plugins_disponibles' => '@total_plugins@ Plugin(s) verfügbar',
	'info_plugins_heberges' => '@total_plugins@ Plugins beherbergt',
	'info_tri_nom' => 'alphabetisch sortiert',
	'info_tri_score' => 'absteigend nach Relevanz sortiert',
	'info_type_depot_git' => 'Mit GIT verwaltetes Depot.',
	'info_type_depot_manuel' => 'Manuell verwaltetes Depot',
	'info_type_depot_svn' => 'Mit SVN verwaltetes Depot',
	'info_verrouille' => 'Dieses Plugin kann nicht deaktiviert oder deinstalliert werden.',
	'installation_en_cours' => 'Die Befehle werden abgearbeitet.',

	// L
	'label_1_autre_contribution' => 'weitere Kontribution',
	'label_actualise_le' => 'Aktualisiert am',
	'label_archive' => 'URL des Archivs',
	'label_branches_spip' => 'kompatibel mit',
	'label_categorie' => 'Kategorie',
	'label_compatibilite_spip' => 'Kompatibilität',
	'label_critere_categorie' => 'Kategorien',
	'label_critere_depot' => 'Depots',
	'label_critere_doublon' => 'Kompatibilität',
	'label_critere_etat' => 'Status',
	'label_critere_phrase' => 'In Plugins suchen',
	'label_destination' => 'Unterverzeichnis von « auto » in dem das Plugin gespeichert wird',
	'label_modifie_le' => 'Geändert am',
	'label_n_autres_contributions' => 'weitere Kontributionen',
	'label_prefixe' => 'Präfix',
	'label_selectionner_plugin' => 'Plugin auswählen',
	'label_tags' => 'Tags',
	'label_type_depot' => 'Depot-Typ:',
	'label_type_depot_git' => 'GIT-Depot',
	'label_type_depot_manuel' => 'Manuelles Depot',
	'label_type_depot_svn' => 'SVN-Depot',
	'label_url_archives' => 'URL des Archiv-Containers',
	'label_url_brouteur' => 'Basis-URL der Quellen',
	'label_url_serveur' => 'Server-URL',
	'label_version' => 'Version',
	'label_xml_depot' => 'XML-Datei des Depots',
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'Plugins installieren',
	'legende_rechercher_plugins' => 'Plugins suchen',

	// M
	'message_action_finale_get_fail' => 'Das Plugin « @plugin@ » (Version: @version@) konnte nicht geladen werden.',
	'message_action_finale_get_ok' => 'Das Plugin « @plugin@ » (Version: @version@) wurde erfolgreich übertragen.',
	'message_action_finale_getlib_fail' => 'Die Installation der Bibliothek « @plugin@ » ist fehlgeschlagen.',
	'message_action_finale_getlib_ok' => 'Die Biiliothek « @plugin@ » wurde erfolgreich installiert.',
	'message_action_finale_geton_fail' => 'Download oder Aktivierung des Plugins « @plugin@ » (Version: @version@) waren nicht erfolgreich.',
	'message_action_finale_geton_ok' => 'Download und Aktivierung des Plugins « @plugin@ » (version : @version@) wurden erfolgreich durchgeführt.',
	'message_action_finale_install_fail' => 'Die Installation des Plugins « @plugin@ » (Version: @version@) ist fehlgeschlagen.',
	'message_action_finale_install_ok' => 'Die Installation des Plugins « @plugin@ » (Version: @version@) war erfolgreich.',
	'message_action_finale_kill_fail' => 'Die Dateien des Plugins « @plugin@ » (Version: @version@) konnten nicht gelöscht werden.',
	'message_action_finale_kill_ok' => 'Die Dateien des Plugins « @plugin@ » (Version: @version@) wurden erfolgreich gelöscht.',
	'message_action_finale_off_fail' => 'Beim Deaktivieren des Plugins « @plugin@ » (Version :@version@) ist ein Fehler aufgetreten.',
	'message_action_finale_off_ok' => 'Das Plugin « @plugin@ » (Version: @version@) wurde deaktiviert.',
	'message_action_finale_on_fail' => 'Beim Aktivieren des Plugins « @plugin@ » (Version: @version@) ist ein Fehler aufgetreten.',
	'message_action_finale_on_ok' => 'Das Plugin « @plugin@ » (Version: @version@) wurde aktiviert.',
	'message_action_finale_stop_fail' => 'Beim Deinstallieren des Plugins « @plugin@ » (Version: @version@) ist ein Fehler aufgetreten.',
	'message_action_finale_stop_ok' => 'Das Plugin « @plugin@ » (Version: @version@) wurde deinstalliert.',
	'message_action_finale_up_fail' => 'Beim Aktualisieren des Plugins « @plugin@ » (von Version @version@ auf @version_maj@) ist ein Fehler aufgetreten.',
	'message_action_finale_up_ok' => 'Das Plugin « @plugin@ » wurde von Version @version@ auf @version_maj@ aktualisiert.',
	'message_action_finale_upon_fail' => 'Bei der Aktualisierung des Plugins « @plugin@ » (von Version @version@ zu @version_maj@) ist ein Fehler aufgetreten.',
	'message_action_finale_upon_ok' => 'Das Plugin « @plugin@ » wurde erfolgereich von Version @version@ zu @version_maj@ aktualisiert.',
	'message_action_get' => 'Plugin « @plugin@ » (Version: @version@) herunterladen',
	'message_action_getlib' => 'Bibliothek « <a href="@version@" class="spip_out">@plugin@</a> » herunterladen.',
	'message_action_geton' => 'Plugin « @plugin@ » (Version: @version@) herunterladen und aktivieren',
	'message_action_install' => 'Das Plugin « @plugin@ » (Version: @version@) wird installiert.',
	'message_action_kill' => 'Löschen der Dateien des Plugins « @plugin@ » (Version: @version@)',
	'message_action_off' => 'Plugin « @plugin@ » (Version: @version@) deaktivieren',
	'message_action_on' => 'Plugin « @plugin@ » (Version: @version@) aktivieren',
	'message_action_stop' => 'Plugin « @plugin@ » (Version: @version@) deinstallieren',
	'message_action_up' => 'Plugin « @plugin@ » von Version @version@ auf @version_maj@ aktualisieren',
	'message_action_upon' => 'Plugin « @plugin@ » (Version: @version@) aktualisieren und aktivieren',
	'message_dependance_plugin' => 'Das Plugin @plugin@ benötigt @dependance@.',
	'message_dependance_plugin_version' => 'Das Plugin @plugin@ benötigt @dependance@ @version@',
	'message_erreur_aucun_plugin_selectionne' => 'Kein Plugin gewählt',
	'message_erreur_ecriture_lib' => '@plugin@ benötigt die Bibliothek <a href="@lib_url@">@lib@</a> im Verzeichnis <var>lib/</var> des Wurzelverzeichnis Ihrer Website. In dieses Verzeichnis kann nicht geschrieben werden. Sie müssen @plugin@ manuell installieren oder dem Verzeichnis die erforderlichen Schreibrechte zuweisen.',
	'message_erreur_maj_inconnu' => 'Ein unbekanntes Plugin kann nicht aktualisiert werden.',
	'message_erreur_plugin_introuvable' => 'Plugin @plugin@ für @action@ nicht gefunden.',
	'message_erreur_plugin_non_actif' => 'Ein inaktives Plugin kann nicht deaktiviert werden.',
	'message_incompatibilite_spip' => 'Das @plugin@ ist mit der von Ihnen verwendeten SPIP-Version nicht kompatibel.',
	'message_nok_aucun_depot_disponible' => 'Kein Plugin verfügbar! Bitte tragen sie die Liste der Plugins auf der Seite zur Depotverwaltung ein.',
	'message_nok_aucun_paquet_ajoute' => 'Das Depot « @url@ » enthält keine zusätzlichen neuen Pakete. Es wurde aus diesem Grund nicht hinzugefügt.',
	'message_nok_aucun_plugin_selectionne' => 'Kein Plugin istealliert. Bitte wählen sie die zu installierenden Plugins.',
	'message_nok_champ_obligatoire' => 'Dieses Feld muss ausgefüllt werden.',
	'message_nok_depot_deja_ajoute' => 'Die Adresse « @url@ » entspricht einem bereits eingetragenen Depot.',
	'message_nok_maj_introuvable' => 'Aktualisierung des Plugins @plugin@ nicht auffindbar',
	'message_nok_plugin_inexistant' => 'Das angeforderte Plugin (@plugin@) existiert nicht.',
	'message_nok_sql_insert_depot' => 'SQL-Fehler beim Hinzufügen des Depots @objet@',
	'message_nok_url_depot_incorrecte' => 'Die Adresse « @url@ » ist falsch.',
	'message_nok_xml_non_conforme' => 'Formatfehler der XML-Datei « @fichier@ » zur Beschreibung des Depots.',
	'message_nok_xml_non_recupere' => 'Le fichier XML « @fichier@ » n\'a pas pu être récupéré', # NEW
	'message_ok_aucun_plugin_trouve' => 'Diesen Kriterien entsprcht kein Plugin.',
	'message_ok_depot_ajoute' => 'Das Depot « @url@ » wurde hinzugefügt.',
	'message_ok_plugins_trouves' => 'Die Plugin(s) @nb_plugins@ entsprechen den Kriterien (@tri@). Bitte wählen sie, welche sie auf ihren Server laden und aktivieren möchten.',
	'message_telechargement_archive_effectue' => 'Das Archiv wurde erfolgreich nach @dir@ entpackt.',

	// N
	'nettoyer_actions' => 'Aktionen bereinigen! Damit wird die Liste der noch verbleibenden Aktionen gelöcht.',

	// O
	'onglet_depots' => 'Depots verwalten',
	'option_categorie_toute' => 'Alle Kategorien',
	'option_depot_tout' => 'Alle Depots',
	'option_doublon_non' => 'Die neueste Version',
	'option_doublon_oui' => 'Alle kompatiblen Versionen',
	'option_etat_tout' => 'Jeder Status',

	// P
	'placeholder_phrase' => 'Präfix, Name, Slogan, Beschreibung oder Autor',
	'plugin_info_actif' => 'aktives Plugin',
	'plugin_info_up' => 'Eine Aktualisierung des Plugins ist verfügbar (Version@version@)',
	'plugin_info_verrouille' => 'Plugin gesperrt',
	'plugins_inactifs_liste' => 'Inaktiv',
	'plugins_non_verrouilles_liste' => 'Nicht gesperrt',
	'plugins_verrouilles_liste' => 'Gesperrte',

	// R
	'resume_table_depots' => 'Liste der hinzugefügten Depots',
	'resume_table_paquets' => 'Liste der Pakete',
	'resume_table_plugins' => 'Liste der Plugins der Kategorie @categorie@',

	// T
	'telecharger_archive_plugin_explication' => 'Sie können ein Archiv in das Verzeichnis « plugins/auto » laden und entpacken, indem sie seinen URL in das Eingabefeld eingeben.',
	'titre_depot' => 'Depot',
	'titre_depots' => 'Depots',
	'titre_form_ajouter_depot' => 'Ein Depot hinzufügen',
	'titre_form_charger_plugin' => 'Plugins suchen und hinzufügen',
	'titre_form_charger_plugin_archive' => 'Plugin aus seinem Archiv herunterladen',
	'titre_form_configurer_svp' => 'Plugin-Server konfigurieren',
	'titre_liste_autres_contributions' => 'Skelette, Bibliotheken, Icon-Sammlungen...',
	'titre_liste_autres_depots' => 'Andere Depots',
	'titre_liste_depots' => 'Liste der verfügbaren Depots',
	'titre_liste_paquets_plugin' => 'Liste der Pakete des Plugins',
	'titre_liste_plugins' => 'Liste der Plugins',
	'titre_logo_depot' => 'Logo des Depots',
	'titre_logo_plugin' => 'Plugin-Logo',
	'titre_nouveau_depot' => 'Neues Depot',
	'titre_page_configurer' => 'Plugin-Server',
	'titre_paquet' => 'Paket',
	'titre_paquets' => 'Pakete',
	'titre_plugin' => 'Plugin',
	'titre_plugins' => 'Plugins',
	'tout_cocher' => 'Alle markieren',
	'tout_cocher_up' => 'Aktualisierungen markieren',
	'tout_decocher' => 'Alle Markierungen entfernen'
);

?>
