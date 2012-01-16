<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.org
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'Vykonávajú sa akcie. Prosím, počkajte.',
	'actions_a_faire' => 'Akcie, ktoré treba vykonať',
	'actions_demandees' => 'Vyžadované akcie:',
	'actions_en_erreur' => 'Chyby, ktoré sa vyskytli',
	'actions_necessaires' => 'Budú vykonané tieto dodatočné akcie:',
	'actions_non_traitees' => 'Nevykonané akcie',
	'actions_realises' => 'Vykonané akcie',

	// B
	'bouton_activer' => 'Aktivovať',
	'bouton_actualiser' => 'Aktualizovať',
	'bouton_actualiser_tout' => 'Aktualizovať depozitáre',
	'bouton_appliquer' => 'Použiť',
	'bouton_desactiver' => 'Deaktivovať',
	'bouton_desinstaller' => 'Odinštalovať',
	'bouton_installer' => 'Stiahnuť a aktivovať',
	'bouton_modifier_depot' => 'Zmeniť depozitár',
	'bouton_supprimer' => 'Odstrániť',
	'bouton_up' => 'Aktualizovať',
	'bulle_actualiser_depot' => 'Aktualizovať balíky v depozitári',
	'bulle_actualiser_tout_depot' => 'Aktualizovať balíky vo všetkých depozitároch',
	'bulle_afficher_xml_plugin' => 'Obsah súboru XML zásuvného modulu',
	'bulle_ajouter_spipzone' => 'Pridať depozitár SPIP-Zone',
	'bulle_aller_depot' => 'Prejsť na stránku tohto depozitára',
	'bulle_aller_documentation' => 'Prejsť na stránku dokumentácie',
	'bulle_aller_plugin' => 'Prejsť na stránku zásuvného modulu',
	'bulle_supprimer_depot' => 'Odstrániť depozitár a jeho balíky',
	'bulle_telecharger_archive' => 'Stiahnuť archív',
	'bulle_telecharger_fichier_depot' => 'Stiahnuť súbor XML depozitára',
	'bulle_telecharger_librairie' => 'Stiahnuť knižnicu',

	// C
	'categorie_aucune' => 'Bez kategórie',
	'categorie_auteur' => 'Prihlásenie, autor, povolenie',
	'categorie_communication' => 'Komunikácia, interaktivita, odkazovač',
	'categorie_date' => 'Diáre, kalendár, dátum',
	'categorie_divers' => 'Nové objekty, externé služby',
	'categorie_edition' => 'Publikovanie, tlač, písanie',
	'categorie_maintenance' => 'Konfigurácia, údržba',
	'categorie_multimedia' => 'Obrázky, galéria, multimédiá',
	'categorie_navigation' => 'Navigácia, vyhľadávanie, organizácia',
	'categorie_outil' => 'Nástroj na vývoj',
	'categorie_performance' => 'Optimalizácia, výkon, bezpečnosť',
	'categorie_squelette' => 'Šablóna',
	'categorie_statistique' => 'Odkazovanie, štatistiky',
	'categorie_theme' => 'Farebný motív',
	'config_activer_log_verbeux' => 'Aktivovať podrobné protokoly?',
	'config_activer_log_verbeux_explication' => 'Cette option rend les logs de SVP beaucoup plus locaces…', # NEW
	'config_activer_pas_a_pas' => 'Aktivovať režim Krok za krokom?',
	'config_activer_pas_a_pas_explication' => 'Activer ce mode permet d\'afficher un bilan
		après chaque action réalisée, au lieu d\'avoir uniquement un bilan global
		de toutes les actions effectuées à la fin des traitements.', # NEW
	'config_activer_runtime' => 'Aktivovať režim runtime?',
	'config_activer_runtime_explication' => '
		Le mode runtime (oui) ne charge que les plugins compatibles avec la version courante de votre SPIP,
		ce qui est fortement conseillé pour la plupart des usages.
		
		En mode non runtime (non), tous les plugins d\'un dépôt sont chargés,
		quelle que soit la version du SPIP en cours. Cela est uniquement utile pour
		utiliser SVP afin de présenter tous les plugins existants comme le fait
		le site Plugins SPIP (plugins.spip.net)', # NEW
	'config_autoriser_activer_paquets_obsoletes' => 'Umožniť aktiváciu zastaralých balíkov?',
	'config_autoriser_activer_paquets_obsoletes_explication' => 'Les paquets obsolètes sont des paquets
		locaux présents qui sont plus anciens que d\'autres paquets locaux. L\'obsolescence
		est établie sur la base de l\'état (stable, test, dev) du paquet ainsi que sur la
		base de sa version.

		Activez cette option si vous souhaitez malgré tout pouvoir activer ces plugins obsolètes.
		', # NEW
	'config_depot_editable' => 'Umožniť upravovanie depozitárov?',
	'config_depot_editable_explication' => 'Cela rend éditable les informations d\'un dépot,
		et permet ainsi de leur joindre éventuellement des mots clés ou documents.
		Cette option ne devrait intéresser personne ! Préférez laisser «non» !', # NEW

	// E
	'erreur_actions_non_traitees' => 'Certaines actions n\'ont pas été réalisées.
			Cela peut provenir d\'une erreur lors des actions à réaliser, ou d\'un affichage de cette page
			alors que des actions sont encore en cours. Les actions avaient été lancées par @auteur@ le @date@.', # NEW
	'erreur_dir_dib_ecriture' => 'Le répertoire des bibliothèques @dir@ n\'est pas accessible en écriture. Impossible d\'y charger une bibliothèque !', # NEW
	'erreur_dir_dib_indefini' => 'Le répertoire _DIR_LIB n\'est pas défini. Impossible d\'y charger une bibliothèque !', # NEW
	'erreur_dir_plugins_auto_ecriture' => 'Le répertoire de paquets @dir@ n\'est pas accessible en écriture. Impossible d\'y charger un paquet !', # NEW
	'erreur_dir_plugins_auto_indefini' => 'Le répertoire _DIR_PLUGIN_AUTO n\'est pas défini. Impossible d\'y charger un paquet !', # NEW
	'erreur_teleporter_chargement_source_impossible' => 'Zdroj @source@ sa nedá nahrať',
	'erreur_teleporter_destination_erreur' => 'Répertoire @dir@ non accessible pour téléporter', # NEW
	'erreur_teleporter_echec_deballage_archive' => 'Súbor @fichier@ sa nedá rozbaliť',
	'erreur_teleporter_format_archive_non_supporte' => 'Le format @extension@ n\'est pas supporté par le téléporteur', # NEW
	'erreur_teleporter_methode_inconue' => 'Méthode @methode@ inconnue pour téléporter', # NEW
	'erreur_teleporter_type_fichier_inconnu' => 'Neznámy typ súboru pre zdroj @source@',

	// F
	'fieldset_debug' => 'Ladiť',
	'fieldset_edition' => 'Upraviť',
	'fieldset_fonctionnement' => 'Fonctionnement', # NEW

	// I
	'info_1_depot' => '1 depozitár',
	'info_1_paquet' => '1 balík',
	'info_1_plugin' => '1 zásuvný modul',
	'info_admin_plugin_actif_non_verrou_non' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.', # NEW
	'info_admin_plugin_actif_non_verrou_tous' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.', # NEW
	'info_admin_plugin_actif_oui_verrou_non' => 'Cette page liste les plugins actifs et non verrouillés du site.', # NEW
	'info_admin_plugin_actif_oui_verrou_tous' => 'Cette page liste tous les plugins actifs du site, verrouillés ou pas.', # NEW
	'info_admin_plugin_verrou_non' => 'Cette page liste tous les plugins non verrouillés du site, actifs ou pas.', # NEW
	'info_admin_plugin_verrou_tous' => 'Na tejto stránke sa nachádza zoznam všetkých zásuvných modulov stránky.',
	'info_admin_plugin_verrouille' => 'Cette page liste les plugins verrouillés du site. Ces plugins sont forcément actifs. Aucune action n\'est possible à partir de cette interface.', # NEW
	'info_adresse_spipzone' => 'SPIP-Zone – Zásuvné moduly',
	'info_ajouter_depot' => 'En ajoutant des dépôts à votre base, vous aurez la possiblité d\'obtenir des informations et d\'effectuer des recherches sur tous les paquets hébergés par les dépôts ajoutés.<br />Un dépôt est décrit par un fichier XML contenant les informations sur le dépôt et sur tous ses paquets.', # NEW
	'info_aucun_depot' => 'žiaden depozitár',
	'info_aucun_depot_ajoute' => 'Aucun dépôt disponible !<br /> Utilisez le formulaire ci-dessous pour ajouter le dépôt «SPIP-Zone - Plugins» dont l\'url est déjà pré-remplie ou un autre dépôt de votre choix.', # NEW
	'info_aucun_paquet' => 'žiaden balík',
	'info_aucun_plugin' => 'žiaden zásuvný modul',
	'info_boite_charger_plugin' => '<strong>Cette page est uniquement accessible aux webmestres du site.</strong><p>Elle vous permet de rechercher des plugins mis à disposition par les dépôts enregistrés dans votre configuration et de les installer physiquement sur votre serveur</p>', # NEW
	'info_boite_depot_gerer' => '<strong>Cette page est uniquement accessible aux webmestres du site.</strong><p>Elle permet l\'ajout et l\'actualisation des dépôts de plugins.</p>', # NEW
	'info_charger_plugin' => 'Pour ajouter un ou plusieurs plugins, effectuez préalablement une recherche multi-critères sur les plugins de la galaxie SPIP. La recherche n\'inclut que les plugins compatibles avec la version SPIP installée et signale les plugins déjà actifs sur le site.', # NEW
	'info_compatibilite_dependance' => 'Pour @compatibilite@ :', # NEW
	'info_contributions_hebergees' => '@total_autres@ autre(s) contribution(s) hébergée(s)', # NEW
	'info_critere_phrase' => 'Saisissez les mots-clés à chercher dans le préfixe, le nom, le slogan, la description et les auteurs des plugins', # NEW
	'info_depots_disponibles' => '@total_depots@ depozitár(ov/e)',
	'info_fichier_depot' => 'Saisissez l\'url du fichier de description du dépôt à ajouter.<br />Pour ajouter le dépôt «SPIP-Zone - Plugins» cliquez sur ce lien : ', # NEW
	'info_nb_depots' => '@nb@ depozitárov',
	'info_nb_paquets' => '@nb@ balíkov',
	'info_nb_plugins' => '@nb@ zásuvných modulov',
	'info_paquets_disponibles' => '@total_paquets@ dostupný(ch) balík(ov)',
	'info_plugin_incompatible' => 'nekompatibilná verzia',
	'info_plugin_installe' => 'už je nainštalovaný',
	'info_plugin_obsolete' => 'zastaraná verzia',
	'info_plugins_disponibles' => '@total_plugins@ dostupný(ch) zásuvný(ch) modul(ov)',
	'info_plugins_heberges' => '@total_plugins@ plugin(s) hébergé(s)', # NEW
	'info_tri_nom' => 'zoradené v abecednom poradí',
	'info_tri_score' => 'classé(s) selon leur pertinence décroissante', # NEW
	'info_type_depot_git' => 'Depozitár spravovaný cez GIT',
	'info_type_depot_manuel' => 'Depozitár spravovaný manuálne',
	'info_type_depot_svn' => 'Depozitár spravovaný cez SVN',
	'info_verrouille' => 'Tento zásuvný modul sa nedá deaktivovať alebo odinštalovať.',
	'installation_en_cours' => 'Les actions demandées sont en cours de traitement', # NEW

	// L
	'label_1_autre_contribution' => 'iný príspevok',
	'label_actualise_le' => 'Aktualizovaný',
	'label_branches_spip' => 'Kompatibilný',
	'label_categorie' => 'Kategória',
	'label_compatibilite_spip' => 'Kompatibilita',
	'label_critere_categorie' => 'Kategórie',
	'label_critere_depot' => 'Depozitáre',
	'label_critere_doublon' => 'Kompatibilita',
	'label_critere_etat' => 'États', # NEW
	'label_critere_phrase' => 'Vyhľadávať v zásuvných moduloch',
	'label_modifie_le' => 'Zmenený',
	'label_n_autres_contributions' => 'iné príspevky',
	'label_prefixe' => 'Préfixe', # NEW
	'label_selectionner_plugin' => 'Vybrať tento zásuvný modul',
	'label_tags' => 'Tagy',
	'label_type_depot' => 'Typ depozitára:',
	'label_type_depot_git' => 'Depozitár pod GITom',
	'label_type_depot_manuel' => 'Manuálny depozitár',
	'label_type_depot_svn' => 'Depozitár pod SVN',
	'label_url_archives' => 'URL priečinka s archívmi',
	'label_url_brouteur' => 'URL koreňového adresára zdrojov',
	'label_url_serveur' => 'URL servera',
	'label_version' => 'Verzia',
	'label_xml_depot' => 'Súbor XML depozitára',
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'Nainštalovať zásuvné moduly',
	'legende_rechercher_plugins' => 'Hľadať zásuvné moduly',

	// M
	'message_action_finale_get_fail' => 'Zásuvný modul "@plugin@" (verzia: @version@) sa nepodarilo správne obnoviť',
	'message_action_finale_get_ok' => 'Zásuvný modul "@plugin@" (verzia: @version@) bol úspešne obnovený',
	'message_action_finale_getlib_fail' => 'Inštalácia knižnice "@plugin@" sa nepodarila',
	'message_action_finale_getlib_ok' => 'Knižnica "@plugin@" bola nainštalovaná',
	'message_action_finale_geton_fail' => 'Stiahnutie alebo aktivácia zásuvného modulu "@plugin@" (verzia: @version@) neprebehla správne',
	'message_action_finale_geton_ok' => 'Stiahnutie a aktivácia zásuvného modulu "@plugin@" (verzia: @version@) prebehli úspešne',
	'message_action_finale_install_fail' => 'Inštalácia zásuvného modulu "@plugin@" (verzia: @version@) sa nepodarila',
	'message_action_finale_install_ok' => 'Inštalácia zásuvného modulu "@plugin@" (verzia: @version@) bola úspešne dokončená',
	'message_action_finale_kill_fail' => 'Súbory zásuvného modulu "@plugin@" (verzia: @version@) sa nedajú úplne odstrániť',
	'message_action_finale_kill_ok' => 'Súbory zásuvného modulu "@plugin@" (verzia: @version@) boli úspešne odstránené',
	'message_action_finale_off_fail' => 'Deaktivácia zásuvného modulu "@plugin@" (verzia: @version@) nebola úspešne dokončená',
	'message_action_finale_off_ok' => 'Deaktivácia zásuvného modulu "@plugin@" (verzia: @version@) bola úspešne dokončená',
	'message_action_finale_on_fail' => 'Aktivácia zásuvného modulu "@plugin@" (verzia: @version@) nebola úspešne dokončená',
	'message_action_finale_on_ok' => 'Aktivácia zásuvného modulu "@plugin@" (verzia: @version@) nebola úspešne dokončená',
	'message_action_finale_stop_fail' => 'Odinštalovanie zásuvného modulu "@plugin@" (verzia: @version@) nebolo dokončené úspešne',
	'message_action_finale_stop_ok' => 'Aktivácia zásuvného modulu "@plugin@" (verzia: @version@) bola úspešne dokončená',
	'message_action_finale_up_fail' => 'Aktualizácia zásuvného modulu "@plugin@" (z verzie: @version@ na @version_maj@) neprebehla správne',
	'message_action_finale_up_ok' => 'Aktualizácia zásuvného modulu "@plugin@" (z verzie: @version@ na @version_maj@) prebehla úspešne',
	'message_action_finale_upon_fail' => 'La mise à jour et l\'activation du plugin « @plugin@ » (de la version : @version@ à @version_maj@) ne se sont pas correctement déroulés', # NEW
	'message_action_finale_upon_ok' => 'La mise à jour et l\'activation du plugin « @plugin@ » (de la version : @version@ à @version_maj@) se sont correctement déroulés', # NEW
	'message_action_get' => 'Stiahnuť zásuvný modul "@plugin@" (verzia: @version@)',
	'message_action_getlib' => 'Stiahnuť knižnicu "<a href="@version@" class="spip_out">@plugin@</a>"',
	'message_action_geton' => 'Stiahnuť a aktivovať zásuvný modul "@plugin@" (verzia: @version@)',
	'message_action_install' => 'Nainštaluje sa zásuvný modul "@plugin@" (verzia: @version@)',
	'message_action_kill' => 'Odstraňujú sa súbory zásuvného modulu "@plugin@" (verzia: @version@)',
	'message_action_off' => 'Deaktivovať zásuvný modul "@plugin@" (verzia: @version@)',
	'message_action_on' => 'Aktivovať zásuvný modul "@plugin@" (verzia: @version@)',
	'message_action_stop' => 'Odinštalovať zásuvný modul "@plugin@" (verzia: @version@)',
	'message_action_up' => 'Aktualizácia zásuvného modulu "@plugin@" (verzie @version@ na  @version_maj@)',
	'message_action_upon' => 'Aktualizácia a aktivácia zásuvného modulu "@plugin@" (verzia: @version@)',
	'message_dependance_plugin' => 'Zásuvný modul @plugin@ si vyžaduje @dependance@.',
	'message_dependance_plugin_version' => 'Zásuvný modul @plugin@ si vyžaduje @dependance@ @version@',
	'message_erreur_aucun_plugin_selectionne' => 'Nevybrali ste žiaden zásuvný modul.',
	'message_erreur_ecriture_lib' => '@plugin@ a besoin de la bibliothèque <a href="@lib_url@">@lib@</a>
   								placée dans le répertoire <var>lib/</var> à la racine de votre site.
   								Cependant, ce répertoire n\'est pas accessible en écriture.
   								Vous devez l\'installer manuellement ou donner des permissions d\'écriture
   								à ce répertoire.', # NEW
	'message_erreur_maj_inconnu' => 'Neznámy zásuvný modul (@id@) sa nedá aktualizovať.',
	'message_erreur_plugin_introuvable' => 'Nedá sa nájsť zásuvný modul @plugin@ na @action@.',
	'message_erreur_plugin_non_actif' => 'Il est impossible de désactiver un plugin non actif.', # NEW
	'message_incompatibilite_spip' => '@plugin@  nie je kompatibilný s verziou SPIPu, ktorú používate.',
	'message_nok_aucun_depot_disponible' => 'Aucun plugin n\'est disponible ! Veuillez vous rendre dans la page de gestion des dépôts pour ajouter des listes de plugins.', # NEW
	'message_nok_aucun_paquet_ajoute' => 'Le dépôt « @url@ » ne fournit aucun nouveau paquet par rapport à la base déjà enregistrée. Il n\'a donc pas été ajouté', # NEW
	'message_nok_aucun_plugin_selectionne' => 'Nevybrali ste žiadne zásuvné moduly. Vyberte, prosím, zásuvné moduly, ktoré sa majú nainštalovať',
	'message_nok_champ_obligatoire' => 'Toto pole je povinné',
	'message_nok_depot_deja_ajoute' => 'L\'adresse « @url@ » correspond à un dépôt déjà ajouté', # NEW
	'message_nok_maj_introuvable' => 'Aktualizácia zásuvného modulu @plugin@ sa nenašla (@id@).',
	'message_nok_plugin_inexistant' => 'Požadovaný zásuvný modul neexistuje (@plugin@).',
	'message_nok_sql_insert_depot' => 'Pri pridávaní depozitára @objet@ sa vyskytla chyba SQL',
	'message_nok_url_depot_incorrecte' => 'Adresa "@url@" je nesprávna',
	'message_nok_xml_non_conforme' => 'Le fichier XML « @fichier@ » de description du dépôt n\'est pas conforme', # NEW
	'message_ok_aucun_plugin_trouve' => 'Vybraným kritériám nevyhovuje žiaden zásuvný modul.',
	'message_ok_depot_ajoute' => 'Depozitár "@url@" bol priadaný.',
	'message_ok_plugins_trouves' => '@nb_plugins@ plugin(s) correspondent aux critères choisis (@tri@). Sélectionnez ci-dessous les plugins que vous souhaitez télécharger et activer sur votre serveur.', # NEW

	// N
	'nettoyer_actions' => 'Vymazať tieto akcie! Takto vymažete zoznam akcií, ktoré ešte treba vykonať.',

	// O
	'onglet_depots' => 'Spravovať depozitáre',
	'option_categorie_toute' => 'Všetky kategórie',
	'option_depot_tout' => 'Všetky depozitáre',
	'option_doublon_non' => 'Najnovšia verzia',
	'option_doublon_oui' => 'Všetky kompatibilné verzie',
	'option_etat_tout' => 'Tous les états', # NEW

	// P
	'placeholder_phrase' => 'predpona, názov, slogan, popis alebo autor',
	'plugin_info_actif' => 'Aktívny zásuvný modul',
	'plugin_info_up' => 'K dispozícii je aktualizácia zásuvného modulu (verzia @version@)',
	'plugin_info_verrouille' => 'Zamknutý zásuvný modul',
	'plugins_inactifs_liste' => 'Neaktívne',
	'plugins_non_verrouilles_liste' => 'Nezamknuté',
	'plugins_verrouilles_liste' => 'Zamknuté',

	// R
	'resume_table_depots' => 'Zoznam pridaných depozitárov',
	'resume_table_paquets' => 'Zoznam balíkov',
	'resume_table_plugins' => 'Zoznam zásuvných modulov @categorie@',

	// T
	'titre_depot' => 'Depozitár',
	'titre_depots' => 'Depozitáre',
	'titre_form_ajouter_depot' => 'Pridať depozitár',
	'titre_form_configurer_svp' => 'Nastaviť server zásuvných modulov',
	'titre_liste_autres_contributions' => 'Šablóny, knižnice, sady ikon, atď.',
	'titre_liste_autres_depots' => 'Ostatné depozitáre',
	'titre_liste_depots' => 'Zoznam dostupných depozitárov',
	'titre_liste_paquets_plugin' => 'Zoznam balíkov zásuvného modulu',
	'titre_liste_plugins' => 'Zoznam zásuvných modulov',
	'titre_logo_depot' => 'Logo depozitára',
	'titre_logo_plugin' => 'Logo zásuvného modulu',
	'titre_nouveau_depot' => 'Nový depozitár',
	'titre_page_configurer' => 'Server zásuvných modulov',
	'titre_paquet' => 'Balík',
	'titre_paquets' => 'Balíky',
	'titre_plugin' => 'Zásuvný modul',
	'titre_plugins' => 'Zásuvné moduly',
	'tout_cocher' => 'Označiť všetky',
	'tout_cocher_up' => 'Vyhľadať aktualizácie',
	'tout_decocher' => 'Odznačiť všetky'
);

?>