<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.net/tradlang_module/svp?lang_cible=it
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'Le azioni sono in corso di esecuzione. Attendere prego ...',
	'actions_a_faire' => 'Azioni da processare',
	'actions_demandees' => 'Azioni richieste:',
	'actions_en_erreur' => 'Errori',
	'actions_necessaires' => 'Le seguenti operazioni addizionali saranno eseguite:',
	'actions_non_traitees' => 'Azioni non eseguite',
	'actions_realises' => 'Azioni eseguite',
	'afficher_les_plugins_incompatibles' => 'Mostra i plugin incompatibili',
	'alerte_compatibilite' => 'Compatibilità forzata',

	// B
	'bouton_activer' => 'Attiva',
	'bouton_actualiser' => 'Aggiorna',
	'bouton_actualiser_tout' => 'Aggiorna il repository',
	'bouton_appliquer' => 'Applica',
	'bouton_confirmer' => 'Conferma',
	'bouton_desactiver' => 'Disattiva',
	'bouton_desinstaller' => 'Disinstalla',
	'bouton_installer' => 'Scarica e attiva',
	'bouton_modifier_depot' => 'Modifica il repository',
	'bouton_supprimer' => 'Cancella',
	'bouton_up' => 'Aggiorna',
	'bulle_actualiser_depot' => 'Aggiorna i pacchetti del repository',
	'bulle_actualiser_tout_depot' => 'Aggiorna i pacchetti di tutti i repository',
	'bulle_afficher_xml_plugin' => 'Contenuto del file XML del plugin',
	'bulle_ajouter_spipzone' => 'Aggiungi il repository SPIP-Zone',
	'bulle_aller_depot' => 'Mostra la lista dei plugin del repository',
	'bulle_aller_documentation' => 'Vai alla pagina della documentazione',
	'bulle_aller_plugin' => 'Vai alla pagina dei plugin',
	'bulle_supprimer_depot' => 'Cancella il repository e i suoi pacchetti',
	'bulle_telecharger_archive' => 'Scarica l’archivio',
	'bulle_telecharger_fichier_depot' => 'Scarica il feed XML dal repository',
	'bulle_telecharger_librairie' => 'Scarica la libreria',

	// C
	'cacher_les_plugins_incompatibles' => 'Nascondi i plugin incompatibili',
	'categorie_aucune' => 'Nessuna categoria',
	'categorie_auteur' => 'Autenticazione, autore, autorizzazione',
	'categorie_communication' => 'Comunicazione, interattività, messagistica',
	'categorie_date' => 'Agenda, calendario, date',
	'categorie_divers' => 'Nuovi oggetti, servizi esterni',
	'categorie_edition' => 'Modifica, stampa, scrittura',
	'categorie_maintenance' => 'Configurazione, manutenzione',
	'categorie_multimedia' => 'Immagini, gallerie, multimedialità',
	'categorie_navigation' => 'Navigazione, ricerca, organizzazione',
	'categorie_outil' => 'Strumenti di sviluppo',
	'categorie_performance' => 'Ottimizzazione, prestazioni, sicurezza',
	'categorie_squelette' => 'Template',
	'categorie_statistique' => 'SEO, statistiche',
	'categorie_theme' => 'Temi',
	'config_activer_log_verbeux' => 'Abilita il logging verboso?',
	'config_activer_log_verbeux_explication' => 'Questa opzione rende il log di SVP più verboso...',
	'config_activer_pas_a_pas' => 'Attivare la modalità passo-passo?',
	'config_activer_pas_a_pas_explication' => 'Attivando di questa modalità verrà visualizzata una revisione dopo ogni azione intrapresa, piuttosto che avere solo una unica revisione generale di tutte le azioni eseguite alla fine del processo.',
	'config_activer_runtime' => 'Attivare la modalità runtime?',
	'config_activer_runtime_explication' => 'La modalità runtime (si) carica solamente plugin inattivi compatibili con la versione corrente di SPIP, questo è altamente raccomandato per la maggior parte degli usi. In modalità non runtime (no), tutti i plugin di un repository vengono caricati, indipendentemente dalla versione corrente di SPIP. Questo è utile solo quando si utilizza SVP per presentare tutti i plugin esistenti, come fa il sito SPIP (plugins.spip.net)',
	'config_autoriser_activer_paquets_obsoletes' => 'Autorizzare l’attivazione dei pacchetti obsoleti?',
	'config_autoriser_activer_paquets_obsoletes_explication' => 'Pacchetti obsoleti sono pacchetti locali che sono più vecchi rispetto agli altri pacchetti locali. L’obsolescenza di un pacchetto è stabilita sulla base dello stato (stable, testing, dev) del pacchetto e in base della sua versione. Attivare questa opzione se si vuole attivare questi plugin obsoleti.',
	'config_depot_editable' => 'Consentire la modifica dei repository?',
	'config_depot_editable_explication' => 'Questo rende modificabili le informazioni di un repository e abilitata eventualmente l’associazione di parole chiave o documenti ad esso. Questa opzione non dovrebbe interessanre nessuno! Quindi lasciate "no"!',
	'confirmer_telecharger_dans' => 'Il plugin sarà caricato nella directory (@dir@) che esiste già.
Questo sovrascriverà il contenuto della directory.
Una copia dei vecchi file saranno salvati in "@dir_backup@".
Devi confermare questa azione.',

	// E
	'erreur_actions_non_traitees' => 'Alcune azioni non possono essere eseguite. Questo potrebbe dipendere da un’errore intercorso durante l’esecuzione dell’azione oppure dalla visualizzazione di questa pagina mentre le azioni erano in attesa. Le azioni sono state iniziare da @auteur@ il @date@.',
	'erreur_auth_plugins_ajouter_lib' => 'Non hai i permessi per aggiungere una libreria.',
	'erreur_dir_dib_ecriture' => 'La directory della libreria @dir@ non è scrivibile. Impossibile caricare una libreria!',
	'erreur_dir_dib_indefini' => 'La directory _DIR_LIB non è definita. Impossibile caricare la libreria!',
	'erreur_dir_plugins_auto' => 'La directory "plugins/auto" che permette il download dei pacchetti non esiste oppure non è scrivibile
<strong>Dovete crearla per consentire l’installazione di nuovi plugin a partire da questa interfaccia.</strong>',
	'erreur_dir_plugins_auto_ecriture' => 'La directory dei pacchetti @dir@ non è accessibile e scrivibile. Impossibile caricare un pacchetto!',
	'erreur_dir_plugins_auto_indefini' => 'La directory _DIR_PLUGIN_AUTO non è definita. Impossibile caricarvi il pacchetto.', # MODIF
	'erreur_dir_plugins_auto_titre' => '"plugins/auto" non è accessibile!',
	'erreur_teleporter_chargement_source_impossible' => 'Impossibile caricare la sorgente @source@',
	'erreur_teleporter_destination_erreur' => 'La directory @dir@ non è accessibile',
	'erreur_teleporter_echec_deballage_archive' => 'Impossibile estrarre @fichier@',
	'erreur_teleporter_format_archive_non_supporte' => 'Il formato @extension@ non è supportato',
	'erreur_teleporter_methode_inconue' => 'Metodo @methode@ sconosciuto',
	'erreur_teleporter_type_fichier_inconnu' => 'Tipo di file sconosciuto per la sorgente @source@',
	'erreurs_xml' => 'Impossibile leggere alcune descrizioni XML',
	'explication_destination' => 'Il percorso calcolato dal nome delle archivio se non viene compilato.
',

	// F
	'fieldset_debug' => 'Debug',
	'fieldset_edition' => 'Modifica',
	'fieldset_fonctionnement' => 'Funzionamento',

	// I
	'info_1_depot' => '1 repository',
	'info_1_paquet' => '1 pacchetto',
	'info_1_plugin' => '1 plugin',
	'info_admin_plugin_actif_non_verrou_non' => 'Questa pagine mostra la lista dei plugin inattivi del sito. Questi plugin sono sempre sbloccati.',
	'info_admin_plugin_actif_non_verrou_tous' => 'Questa pagina contiene la lista dei plugin inattivi del sito. Questi plug in sono sempre bloccati.',
	'info_admin_plugin_actif_oui_verrou_non' => 'La pagina liste i plugin attivi e non bloccati del sito.',
	'info_admin_plugin_actif_oui_verrou_tous' => 'La pagina delle liste dei plugin attivi, bloccati e non per il sito.',
	'info_admin_plugin_verrou_non' => 'La pagina mostra tutti i plugin non bloccati del sito, sia attivi che non.',
	'info_admin_plugin_verrou_tous' => 'La pagina lista tutti i plugin del sito.',
	'info_admin_plugin_verrouille' => 'Questa pagina mostra la lista dei plugin attivi e bloccati (posizionati in <code>@dir_plugins_dist@</code>).
Se vuoi disabilitarla, per favore contatta il webmaster del sito oppure controlla <a href="http://programmer.spip.net/repertoire_plugins-dist">la documentazione</a>.',
	'info_adresse_spipzone' => 'SPIP-Zone - Plugins',
	'info_ajouter_depot' => 'Aggiungendo dei repository hai la possibilità di ottenere informazione e cercare su tutti i pacchetti gestiti dai repository aggiunti<br />Un repository è descritto da un file XML contenente le informazioni del deposito e di tutti i suoi pacchetti.',
	'info_aucun_depot' => 'nessun repository',
	'info_aucun_depot_ajoute' => 'Nessun repository disponibile!<br /> Utilizza il form sottostante per aggiungere il repository "SPIP-Zone - Plugins" il cui URL è già precaricato oppure di un’altro repository a tua scelta.',
	'info_aucun_paquet' => 'nessun pacchetto',
	'info_aucun_plugin' => 'nessun plugin',
	'info_boite_charger_plugin' => '<strong>Questa pagina è solamente accessibile al webmaster del sito.</strong><p>Essa permette di ricercare i plugin disponibili sui repository memorizzati nella tua configurazione e installarli fisicamente nel tuo server</p>',
	'info_boite_depot_gerer' => '<strong>Questa pagina è disponibile solo per il webmaster del sito</strong><p>Essa permette l’aggiunta e l’aggiornamento dei repository dei pluin.</p>',
	'info_charger_plugin' => 'Per aggiungere uno o più plugin, effettuare una ricerca con più criteri nella galassia SPIP. La ricerca include solamente i plugin compatibili con la versione di SPIP installata e riporta quali plugin sono già attivi sul sito.',
	'info_compatibilite_dependance' => 'Per @compatibilite@ :',
	'info_contributions_hebergees' => '@total_autres@ contributi da altri host',
	'info_critere_phrase' => 'Inserire le parole chiave per cercare nei prefissi, nel nome, lo slogan, la descrizione e gli autori del plugin.',
	'info_depots_disponibles' => '@total_depots@ repository',
	'info_fichier_depot' => 'Digita nell’url del file di descrizione del repository da aggiungere.<br />Per aggiungere il repository «SPIP-Zone - Plugins» cliccate su questo link: ',
	'info_nb_depots' => '@nb@ repository',
	'info_nb_paquets' => '@nb@ pacchetti',
	'info_nb_plugins' => '@nb@ plugin',
	'info_paquets_disponibles' => '@total_paquets@ pacchetti disponibili',
	'info_plugin_attente_dependance' => 'dipendenze mancanti',
	'info_plugin_incompatible' => 'versione incompatibile',
	'info_plugin_installe' => 'già installato',
	'info_plugin_obsolete' => 'versione obsoleta',
	'info_plugins_disponibles' => '@total_plugins@ plugin disponibili',
	'info_plugins_heberges' => '@total_plugins@ plugin mantenuti',
	'info_tri_nom' => 'ordinata in ordine alfabetico',
	'info_tri_score' => 'ordinato per rilevanza decrescente',
	'info_type_depot_git' => 'Repository mantenuto su GIT',
	'info_type_depot_manuel' => 'Repository gestione manualmente',
	'info_type_depot_svn' => 'Repository gestito da SVN',
	'info_verrouille' => 'Impossibile disabilitare o disinstallare questo plugin.',
	'installation_en_cours' => 'L’azione richiesta è in esecuzione.',

	// L
	'label_1_autre_contribution' => 'Altri contributi',
	'label_actualise_le' => 'Aggiorna su',
	'label_archive' => 'URL dell’archivio',
	'label_branches_spip' => 'Compatibile',
	'label_categorie' => 'Categoria',
	'label_compatibilite_spip' => 'Compatibilità',
	'label_critere_categorie' => 'Categorie',
	'label_critere_depot' => 'Repository',
	'label_critere_doublon' => 'Compatibilità',
	'label_critere_etat' => 'Stati',
	'label_critere_phrase' => 'Cerca nei plugin',
	'label_destination' => 'Percorso della directory "auto" dove inserire il plugin.',
	'label_modifie_le' => 'Modificato su',
	'label_n_autres_contributions' => 'altri contributi',
	'label_prefixe' => 'Prefisso',
	'label_selectionner_plugin' => 'Seleziona questo plugin',
	'label_tags' => 'Tag',
	'label_type_depot' => 'Tipo di reporsitory:',
	'label_type_depot_git' => 'Repository sotto GIT',
	'label_type_depot_manuel' => 'Repository manuale',
	'label_type_depot_svn' => 'Repository sotto SVN',
	'label_url_archives' => 'URL del contenitore di archivi',
	'label_url_brouteur' => 'URL della radice dei sorgenti',
	'label_url_serveur' => 'URL del server',
	'label_version' => 'Versione',
	'label_xml_depot' => 'File XML del repository',
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'Installa plugin',
	'legende_rechercher_plugins' => 'Cerca plugin',

	// M
	'message_action_finale_get_fail' => 'Il plugin "@plugin@" (versione: @version@) non può essere scaricato con successo',
	'message_action_finale_get_ok' => 'Il plugin "@plugin@" (versione: @version@) è stato scaricato con successo',
	'message_action_finale_getlib_fail' => 'L’installazione della libreria "@plugin@" fallita',
	'message_action_finale_getlib_ok' => 'La libreria "@plugin@" è stata installata',
	'message_action_finale_geton_fail' => 'Il download o l’attivazione del plugin "@plugin@" (versione: @version@) non ha avuto successo',
	'message_action_finale_geton_ok' => 'Il download e l’attivazione del plugin "@plugin@" (versione : @version@) è avvenuta con successo',
	'message_action_finale_install_fail' => 'L’installazione del plugin "@plugin@" (versione: @version@) è fallita',
	'message_action_finale_install_ok' => 'L’installazione del plugin "@plugin@" (versione: @version@) è stata completata con successo',
	'message_action_finale_kill_fail' => 'I file del plugin "@plugin@" (versione: @version@) potrebbero non essere stati cancellati correttamente',
	'message_action_finale_kill_ok' => 'I file del plugin "@plugin@" (versione: @version@) sono stati cancellati correttamente',
	'message_action_finale_off_fail' => 'La disattivazione del plugin "@plugin@" (versione: @version@) non è avvenuta',
	'message_action_finale_off_ok' => 'La disattivazione plugin "@plugin@" (versione: @version@) è stata correttamente eseguita',
	'message_action_finale_on_fail' => 'L’attivazione plugin "@plugin@" (versione: @version@) non è stata correttamente eseguita',
	'message_action_finale_on_ok' => 'L’attivazione plugin "@plugin@" (versione: @version@) è stata correttamente eseguita',
	'message_action_finale_stop_fail' => 'La disinstallazione del plugin "@plugin@" (versione: @version@) non è stata completata con successo',
	'message_action_finale_stop_ok' => 'La disisnstallazione del plugin "@plugin@" (versione: @version@) è stata completata con successo',
	'message_action_finale_up_fail' => 'L’aggiornamento del plugin "@plugin@" (dalla versione: @version@ alla @version_maj@) non è stato eseguito',
	'message_action_finale_up_ok' => 'L’aggiornamento del plugin "@plugin@" (dalla versione: @version@ alla @version_maj@) è stato eseguito correttamente',
	'message_action_finale_upon_fail' => 'L’aggiornamento e l’attivazione del plugin "@plugin@" (dalla versione: @version@ alla @version_maj@) non è stato eseguito correttamente',
	'message_action_finale_upon_ok' => 'L’aggiornamento del plugin "@plugin@" (dalla versione: @version@ alla @version_maj@) è stato correttamente eseguito',
	'message_action_get' => 'Scaricare il plugin "@plugin@" (versione: @version@)',
	'message_action_getlib' => 'Scaricare la libreria "<a href="@version@" class="spip_out">@plugin@</a>"',
	'message_action_geton' => 'Scarico e installazione del plugin "@plugin@" (versione : @version@)',
	'message_action_install' => 'Il plugin "@plugin@" (versione : @version@) verrà installata',
	'message_action_kill' => 'Cancellati i file del plugin "@plugin@" (versione : @version@)',
	'message_action_off' => 'Disattivato il plugin "@plugin@" (versione : @version@)',
	'message_action_on' => 'Attivato il plugin « @plugin@ » (versione : @version@)',
	'message_action_stop' => 'Disinstallando il plugin « @plugin@ » (versione : @version@)',
	'message_action_up' => 'Aggiornando il plugin « @plugin@ » (dalla version @version@ a @version_maj@)',
	'message_action_upon' => 'Aggiornando e attivando il pluin « @plugin@ » (versione : @version@)',
	'message_dependance_plugin' => 'Il plugin @plugin@ dipende da @dependance@.',
	'message_dependance_plugin_version' => 'Il plugin @plugin@ dipende da @dependance@ @version@',
	'message_erreur_aucun_plugin_selectionne' => 'Nessun plugin selezionato.',
	'message_erreur_ecriture_lib' => '@plugin@ richiede la libreria <a href="@lib_url@">@lib@</a> posizionata nella directory <var>lib/</var> sulla radice del vostro sito. Però questa directory non è accessibile in scrittura.  Dovete installarlo manualmente oppure dare i permessi di scrittura in questa directory.',
	'message_erreur_maj_inconnu' => 'Impossibile aggiornare un plugin sconosciuto.',
	'message_erreur_plugin_introuvable' => 'Non è possibile trovare il plugin @plugin@ per @action@.',
	'message_erreur_plugin_non_actif' => 'Non è possibile disabilitare un plugin non attivo.',
	'message_incompatibilite_spip' => '@plugin@ non è compatibile con la versione di SPIP in uso.',
	'message_nok_aucun_depot_disponible' => 'Nessun plugin disponibile! Per favore andare alla pagina di gestione dei repository per aggiungere una lista di plugin.',
	'message_nok_aucun_paquet_ajoute' => 'Il repository "@url@" non fornisce nessun nuovo pacchetto rispetto a quelli già gestiti. Non sarà aggiunto',
	'message_nok_aucun_plugin_selectionne' => 'Nessun plugin da installare. Per favore selezionare il plugin che volete installare.',
	'message_nok_champ_obligatoire' => 'Il campo è richiesto.',
	'message_nok_depot_deja_ajoute' => 'L’URL « @url@ » corrisponde ad un repository già aggiunto.',
	'message_nok_maj_introuvable' => 'L’aggiornamento del plugin @plugin@ non è stato trovato.',
	'message_nok_plugin_inexistant' => 'Il plugin richiesto non esiste (@plugin@).',
	'message_nok_sql_insert_depot' => 'Errore SQL aggiungendo il repository @objet@',
	'message_nok_url_archive' => 'L’URL dell’archivio non è valido',
	'message_nok_url_depot_incorrecte' => 'L’indirizzo « @url@ » è sbagliato',
	'message_nok_xml_non_conforme' => 'Il file XML di descrizione "@fichier@" » del repository non è conforme',
	'message_nok_xml_non_recupere' => 'Il file XML « @fichier@ » non può essere recuperato',
	'message_ok_aucun_plugin_trouve' => 'Nessun plugin corrisponde al criterio selezionato.',
	'message_ok_depot_ajoute' => 'Il repository « @url@ » è stato aggiunto.',
	'message_ok_plugins_trouves' => '@nb_plugins@ plugin corrisponde ai criteri selezionati (@tri@). Selezionare qui sotto i plugin che volete scaricare e attivare sul vostro server.',
	'message_telechargement_archive_effectue' => 'L’archivio è stato correttamente estratto in @dir@.',

	// N
	'nettoyer_actions' => 'Pulite queste azioni! Questo ripulirà la lista delle azioni che rimangono da eseguire.',

	// O
	'onglet_depots' => 'Gestione dei repository',
	'option_categorie_toute' => 'Tutte le categorie',
	'option_depot_tout' => 'Tutti i repository',
	'option_doublon_non' => 'L’ultima versione',
	'option_doublon_oui' => 'Tutte le versioni compatibili',
	'option_etat_tout' => 'Tutti gli stati',

	// P
	'placeholder_phrase' => 'prefissi, nome, slogan, descrizione e autore',
	'plugin_info_actif' => 'Plugin attivi',
	'plugin_info_up' => 'Un’aggiornamento al plugin è disponibile (version @version@)',
	'plugin_info_verrouille' => 'Plugin bloccati',
	'plugins_inactifs_liste' => 'Inattivo',
	'plugins_non_verrouilles_liste' => 'Non bloccato',
	'plugins_verrouilles_liste' => 'Bloccato',

	// R
	'resume_table_depots' => 'Lista dei repository aggiunti',
	'resume_table_paquets' => 'Lista dei pacchetti',
	'resume_table_plugins' => 'Lista dei plugin @categorie@',

	// T
	'telecharger_archive_plugin_explication' => 'Puoi scaricare un’archivio che sarà memorizzato nella directory "plugins/auto", scrivendo l’URL dell’archivio nel campo di input.',
	'titre_depot' => 'Respository',
	'titre_depots' => 'Respository',
	'titre_form_ajouter_depot' => 'Aggiungi un repository',
	'titre_form_charger_plugin' => 'Cerca e aggiungi i plugin',
	'titre_form_charger_plugin_archive' => 'Scarica il plugin usando l’url dell’archivio',
	'titre_form_configurer_svp' => 'Configurazione del server dei plugin',
	'titre_liste_autres_contributions' => 'Template, libreria, set di icone',
	'titre_liste_autres_depots' => 'Altri repository',
	'titre_liste_depots' => 'Lista dei repository disponibili',
	'titre_liste_paquets_plugin' => 'Lista dei pacchetti del plugin',
	'titre_liste_plugins' => 'Lista dei plugin',
	'titre_logo_depot' => 'Logo del repository',
	'titre_logo_plugin' => 'Logo del plugin',
	'titre_nouveau_depot' => 'Nuovo repository',
	'titre_page_configurer' => 'Server dei plugin',
	'titre_paquet' => 'Pacchetto',
	'titre_paquets' => 'Pacchetti',
	'titre_plugin' => 'Plugin',
	'titre_plugins' => 'Plugin',
	'tout_cocher' => 'Controlla tutto',
	'tout_cocher_up' => 'Controlla per aggiornamenti',
	'tout_decocher' => 'Deseleziona tutto'
);

?>
