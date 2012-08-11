<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.net/tradlang_module/svp?lang_cible=ru
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'Выполняются операции. Пожалуйста, подождите немного…',
	'actions_a_faire' => 'Выполнить операцию',
	'actions_demandees' => 'Необходимо выполнить операцию :',
	'actions_en_erreur' => 'Произошли ошибки',
	'actions_necessaires' => 'Будут выполнены следующие операции :',
	'actions_non_traitees' => 'Операция не выполнена',
	'actions_realises' => 'Операция выполнена',
	'afficher_les_plugins_incompatibles' => 'Показать несовместимые плагины',
	'alerte_compatibilite' => 'Принудительная совместимость',

	// B
	'bouton_activer' => 'Включить',
	'bouton_actualiser' => 'Обновить',
	'bouton_actualiser_tout' => 'Обновить репозитории',
	'bouton_appliquer' => 'Применить',
	'bouton_confirmer' => 'Подтвердить',
	'bouton_desactiver' => 'Отключить',
	'bouton_desinstaller' => 'Удалить',
	'bouton_installer' => 'Загрузить и включить',
	'bouton_modifier_depot' => 'Редактировать репозиторий',
	'bouton_supprimer' => 'Удалить',
	'bouton_up' => 'Обновить',
	'bulle_actualiser_depot' => 'Обновить пакеты в репозитории',
	'bulle_actualiser_tout_depot' => 'Обновить пакеты во всех репозиториях',
	'bulle_afficher_xml_plugin' => 'Содержимое XML файла плагина',
	'bulle_ajouter_spipzone' => 'Добавить репозиторий  SPIP-Zone',
	'bulle_aller_depot' => 'Перейти на страницу репозитория',
	'bulle_aller_documentation' => 'Перейти на страницу с документацией',
	'bulle_aller_plugin' => 'Перейти на страницу пакета',
	'bulle_supprimer_depot' => 'Удалить репозиторий и его пакеты',
	'bulle_telecharger_archive' => 'Скачать архивный файл',
	'bulle_telecharger_fichier_depot' => 'Добавить XML файл репоизитрия',
	'bulle_telecharger_librairie' => 'Скачать библиотеку',

	// C
	'cacher_les_plugins_incompatibles' => 'Скрыть несовместимые плагины',
	'categorie_aucune' => 'Тематика не задана',
	'categorie_auteur' => 'Автора, авторизация, управление  правами доступа',
	'categorie_communication' => 'Интерактивность, коммуникации',
	'categorie_date' => 'Расписания, календари, дата и время',
	'categorie_divers' => 'Внешние сервисы, новые объекты',
	'categorie_edition' => 'Работа с текстом, печать',
	'categorie_maintenance' => 'Настройки и обслуживание',
	'categorie_multimedia' => 'Файлы мультимедиа, галереи, картинки',
	'categorie_navigation' => 'Навигация, поиск',
	'categorie_outil' => 'Средства разработки',
	'categorie_performance' => 'Оптимизация, быстродействие, безопасность',
	'categorie_squelette' => 'Шаблоны',
	'categorie_statistique' => 'SEO и статистика',
	'categorie_theme' => 'Темы оформления',
	'config_activer_log_verbeux' => 'Включить подробное логирование?',
	'config_activer_log_verbeux_explication' => 'Эта опция позволяет вести подробное логирование действий…',
	'config_activer_pas_a_pas' => 'Включить пошаговый режим?',
	'config_activer_pas_a_pas_explication' => 'Activer ce mode permet d\'afficher un bilan après chaque action réalisée, au lieu d\'avoir uniquement un bilan global de toutes les actions effectuées à la fin des traitements.', # NEW
	'config_activer_runtime' => 'Activer le mode runtime ?', # NEW
	'config_activer_runtime_explication' => 'Le mode runtime (oui) ne charge que les plugins compatibles avec la version courante de votre SPIP, ce qui est fortement conseillé pour la plupart des usages. En mode non runtime (non), tous les plugins d\'un dépôt sont chargés, quelle que soit la version du SPIP en cours. Cela est uniquement utile pour utiliser SVP afin de présenter tous les plugins existants comme le fait le site Plugins SPIP (plugins.spip.net)', # NEW
	'config_autoriser_activer_paquets_obsoletes' => 'Разрешить включать устаревшие плагины ?',
	'config_autoriser_activer_paquets_obsoletes_explication' => 'Les paquets obsolètes sont des paquets locaux présents qui sont plus anciens que d\'autres paquets locaux. L\'obsolescence est établie sur la base de l\'état (stable, test, dev) du paquet ainsi que sur la base de sa version. Activez cette option si vous souhaitez malgré tout pouvoir activer ces plugins obsolètes.', # NEW
	'config_depot_editable' => 'Разрешить редактирование репозитория?',
	'config_depot_editable_explication' => 'Cela rend éditable les informations d\'un dépot et permet ainsi de leur joindre éventuellement des mots-clés ou documents. Cette option ne devrait intéresser personne ! Préférez laisser «non» !', # NEW
	'confirmer_telecharger_dans' => 'Эта операция перезапишет содержимое папки.
Плагин будет загружен в существующую папку « @dir@».
Старые файлы будут сохранены в папке« @dir_backup@ ».
Вам необходимо подтвердить выполнение этой операции.
		',

	// E
	'erreur_actions_non_traitees' => 'Некоторые операции не были выполнены. Возможно, были ошибки в процессе выполнения. Выполнение операции инициировал @auteur@  @date@.',
	'erreur_dir_dib_ecriture' => 'Отсутствуют права на запись папки @dir@. Невозможно загркзить библиотеку!',
	'erreur_dir_dib_indefini' => 'Не задано значение _DIR_LIB. Невозможно загрузить библиотеку!',
	'erreur_dir_plugins_auto' => 'Le répertoire « plugins/auto » permettant de télécharger des paquets
		n\'est pas créé ou n\'est pas accessible en écriture.
		<strong>Vous devez le créer pour pouvoir installer de nouveaux plugins depuis cette interface.</strong>', # NEW
	'erreur_dir_plugins_auto_ecriture' => 'Отсутствуют права на запись в папке @dir@. Невозможно загрузить пакет!',
	'erreur_dir_plugins_auto_indefini' => 'Не указана папка _DIR_PLUGIN_AUTO. Невозможно загрузить плагин!',
	'erreur_dir_plugins_auto_titre' => 'недоступна папка « plugins/auto »!',
	'erreur_teleporter_chargement_source_impossible' => 'Невозможно загрузить источник @source@',
	'erreur_teleporter_destination_erreur' => 'Папка @dir@ недоступна для  загрузчика файлов',
	'erreur_teleporter_echec_deballage_archive' => 'Не получается разархивировать файл @fichier@',
	'erreur_teleporter_format_archive_non_supporte' => 'Формат файлов @extension@ не поддерживается загрузчиком файлов',
	'erreur_teleporter_methode_inconue' => 'Неизвестный метод @methode@ для загрузчика файлов',
	'erreur_teleporter_type_fichier_inconnu' => 'Неизвестный тип файла для источника @source@',
	'erreurs_xml' => 'Невозможно прочитать некоторый XML описания',
	'explication_destination' => 'Le chemin sera calculé depuis le nom de l\'archive si vous ne le remplissez pas.', # NEW

	// F
	'fieldset_debug' => 'Отладка',
	'fieldset_edition' => 'Édition', # NEW
	'fieldset_fonctionnement' => 'Fonctionnement', # NEW

	// I
	'info_1_depot' => '1 репозиторий',
	'info_1_paquet' => '1 пакет',
	'info_1_plugin' => '1 плагин',
	'info_admin_plugin_actif_non_verrou_non' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.', # NEW
	'info_admin_plugin_actif_non_verrou_tous' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.', # NEW
	'info_admin_plugin_actif_oui_verrou_non' => 'Список всех включенных плагинов (кроме системных).',
	'info_admin_plugin_actif_oui_verrou_tous' => 'Список всех включенных плагинов, установленных и системных.',
	'info_admin_plugin_verrou_non' => 'Список всех плагинов, кроме системных. Включенные и отключенные.',
	'info_admin_plugin_verrou_tous' => 'Список всех плагинов на сайте.',
	'info_admin_plugin_verrouille' => 'Cette page liste les plugins actifs et verrouillés (placés dans le répertoire <code>@dir_plugins_dist@</code>).
	Si vous souhaitez les désactiver,
	veuillez contacter le webmestre du site,
	ou vous reporter <a href="http://programmer.spip.org/repertoire_plugins_dist">à la documentation</a>.', # NEW
	'info_adresse_spipzone' => 'Плагины SPIP-Zone',
	'info_ajouter_depot' => 'En ajoutant des dépôts à votre base, vous aurez la possiblité d\'obtenir des informations et d\'effectuer des recherches sur tous les paquets hébergés par les dépôts ajoutés.<br />Un dépôt est décrit par un fichier XML contenant les informations sur le dépôt et sur tous ses paquets.', # NEW
	'info_aucun_depot' => 'Нет репозитория',
	'info_aucun_depot_ajoute' => 'Aucun dépôt disponible !<br /> Utilisez le formulaire ci-dessous pour ajouter le dépôt «SPIP-Zone - Plugins» dont l\'url est déjà pré-remplie ou un autre dépôt de votre choix.', # NEW
	'info_aucun_paquet' => 'нет пакетов',
	'info_aucun_plugin' => 'Нет плагинов',
	'info_boite_charger_plugin' => '<strong>Cette page est uniquement accessible aux webmestres du site.</strong><p>Elle vous permet de rechercher des plugins mis à disposition par les dépôts enregistrés dans votre configuration et de les installer physiquement sur votre serveur</p>', # NEW
	'info_boite_depot_gerer' => '<strong>Страница доступна только для вебмастера сайта.</strong><p>Тут вы можете добавлять и изменять репозитории плагинов.</p>',
	'info_charger_plugin' => 'Pour ajouter un ou plusieurs plugins, effectuez préalablement une recherche multi-critères sur les plugins de la galaxie SPIP. La recherche n\'inclut que les plugins compatibles avec la version SPIP installée et signale les plugins déjà actifs sur le site.', # NEW
	'info_compatibilite_dependance' => 'Для @compatibilite@ :',
	'info_contributions_hebergees' => '@total_autres@ autre(s) contribution(s) hébergée(s)', # NEW
	'info_critere_phrase' => 'Задайте слово  для поиска в названии, описании, слогане, префиксе или разработчиков плагинов.',
	'info_depots_disponibles' => '@total_depots@ репозиториев',
	'info_fichier_depot' => 'Saisissez l\'url du fichier de description du dépôt à ajouter.<br />Pour ajouter le dépôt «SPIP-Zone - Plugins» cliquez sur ce lien : ', # NEW
	'info_nb_depots' => '@nb@ репозиториев',
	'info_nb_paquets' => '@nb@ пакетов',
	'info_nb_plugins' => '@nb@ плагинов',
	'info_paquets_disponibles' => 'доступно @total_paquets@ пакетов',
	'info_plugin_attente_dependance' => 'не хватает зависимых пакетов',
	'info_plugin_incompatible' => 'несовместимая версия',
	'info_plugin_installe' => 'уже установлено',
	'info_plugin_obsolete' => 'устаревшая версия',
	'info_plugins_disponibles' => 'доступно @total_plugins@ плагинов',
	'info_plugins_heberges' => 'Размещено @total_plugins@ плагинов',
	'info_tri_nom' => 'в алфавитном порядке',
	'info_tri_score' => 'сортировать по ревалентности',
	'info_type_depot_git' => 'Репозиторий под управлением GIT',
	'info_type_depot_manuel' => 'Простой репозиторий ( без системы управления версиями)',
	'info_type_depot_svn' => 'Репозиторий на системе SVN',
	'info_verrouille' => 'Системный плагин. Его нельзя отключить или удалить.',
	'installation_en_cours' => 'Выполняются запрошенные операции',

	// L
	'label_1_autre_contribution' => 'autre contribution', # NEW
	'label_actualise_le' => 'Обновление',
	'label_archive' => 'Ссылка на архивный файл плагина ',
	'label_branches_spip' => 'Совместимый',
	'label_categorie' => 'Тематика',
	'label_compatibilite_spip' => 'Совместимость',
	'label_critere_categorie' => 'Тематика',
	'label_critere_depot' => 'Репозиторий',
	'label_critere_doublon' => 'Совместимость',
	'label_critere_etat' => 'Статус',
	'label_critere_phrase' => 'Найти плагин',
	'label_destination' => 'Chemin depuis le répertoire « auto » où déposer le plugin', # NEW
	'label_modifie_le' => 'Изменялось',
	'label_n_autres_contributions' => 'autres contributions', # NEW
	'label_prefixe' => 'Префикс',
	'label_selectionner_plugin' => 'Выбрать плагин',
	'label_tags' => 'Теги',
	'label_type_depot' => 'Тип репозитория :',
	'label_type_depot_git' => 'GIT репозиторий',
	'label_type_depot_manuel' => 'Простой репозиторий',
	'label_type_depot_svn' => 'SVN репозиторий',
	'label_url_archives' => 'URL архивного файла',
	'label_url_brouteur' => 'URL корневой папки с исходным кодом',
	'label_url_serveur' => 'URL сервера',
	'label_version' => 'Версия',
	'label_xml_depot' => 'XML файл репозитория',
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'Установить плагин',
	'legende_rechercher_plugins' => 'Поиск плагинов',

	// M
	'message_action_finale_get_fail' => 'Не удалось загрузить плагин « @plugin@ » (версия : @version@) ',
	'message_action_finale_get_ok' => 'Плагин « @plugin@ » (версия : @version@) успешно загружен',
	'message_action_finale_getlib_fail' => 'Не удалось установить библиотеку « @plugin@ »',
	'message_action_finale_getlib_ok' => 'Библиотека « @plugin@ » успешно установлена',
	'message_action_finale_geton_fail' => 'Не удалось загрузить и установить плагин « @plugin@ » (версия : @version@) ',
	'message_action_finale_geton_ok' => 'Плагин « @plugin@ » (версия : @version@) успешно загружен и установлен',
	'message_action_finale_install_fail' => 'Не удалось установить плагин « @plugin@ » (версия : @version@) ',
	'message_action_finale_install_ok' => 'Плагин « @plugin@ » (версия : @version@) успешно установлен',
	'message_action_finale_kill_fail' => 'Не удалось удалить файлы плагина « @plugin@ » (версия : @version@)',
	'message_action_finale_kill_ok' => 'Файлі плагин « @plugin@ » (версия : @version@) успешно удалены',
	'message_action_finale_off_fail' => 'Не удалось отключить плагин « @plugin@ » (версия : @version@) ',
	'message_action_finale_off_ok' => 'Плагин « @plugin@ » (version : @version@) успешно отключен',
	'message_action_finale_on_fail' => 'Не удалось включить плагин « @plugin@ » (версия : @version@) ',
	'message_action_finale_on_ok' => 'Плагин « @plugin@ » (версия : @version@) включен ',
	'message_action_finale_stop_fail' => 'Не удалось удалить плагин « @plugin@ » (версия: @version@)',
	'message_action_finale_stop_ok' => 'Плагин « @plugin@ » (версия : @version@) успешно удален',
	'message_action_finale_up_fail' => 'Не удалось обновить плагин « @plugin@ » с версии @version@ до @version_maj@',
	'message_action_finale_up_ok' => 'Обновление плагина « @plugin@ » (с версии : @version@ до  @version_maj@) прошло успешно',
	'message_action_finale_upon_fail' => 'Не удалось обновить и включить плагин « @plugin@ » (с  @version@ до @version_maj@) ',
	'message_action_finale_upon_ok' => 'Плагин « @plugin@ » успешно обновлен с версии  @version@ до @version_maj@ и включен',
	'message_action_get' => 'Загрузить плагин « @plugin@ » (версия : @version@)',
	'message_action_getlib' => 'Скачать библиотеку « <a href="@version@" class="spip_out">@plugin@</a> »',
	'message_action_geton' => 'Скачать и включить плагин « @plugin@ » (версия : @version@)',
	'message_action_install' => 'Будет установлен плагин « @plugin@ » (версия : @version@) va être installé',
	'message_action_kill' => 'Удалить файлы из плагина « @plugin@ » (version : @version@)',
	'message_action_off' => 'Отключить плагин « @plugin@ » (версия : @version@)',
	'message_action_on' => 'Включить плагин « @plugin@ » (версия : @version@)',
	'message_action_stop' => 'Удалить плагин « @plugin@ » (версия : @version@)',
	'message_action_up' => 'Обновить плагин « @plugin@ » (с @version@ до @version_maj@)',
	'message_action_upon' => 'Обновление и активация плагина « @plugin@ » (версия: @version@)',
	'message_dependance_plugin' => 'Для  @plugin@ необходим @dependance@.',
	'message_dependance_plugin_version' => 'Для установки @plugin@ необходим @dependance@ @version@',
	'message_erreur_aucun_plugin_selectionne' => 'Ни один плагин не выбран.',
	'message_erreur_ecriture_lib' => '@plugin@ a besoin de la bibliothèque <a href="@lib_url@">@lib@</a> placée dans le répertoire <var>lib/</var> à la racine de votre site. Cependant, ce répertoire n\'est pas accessible en écriture. Vous devez l\'installer manuellement ou donner des permissions d\'écriture à ce répertoire.', # NEW
	'message_erreur_maj_inconnu' => 'Невозможно обновить неизвестный плагин (@id@).',
	'message_erreur_plugin_introuvable' => 'Не получается найти плагин @plugin@ для @action@.',
	'message_erreur_plugin_non_actif' => 'Нельзя отключить отключенный плагин.',
	'message_incompatibilite_spip' => '@plugin@  не совместим с текущей версией вашей CMS SPIP.',
	'message_nok_aucun_depot_disponible' => 'Aucun plugin n\'est disponible ! Veuillez vous rendre dans la page de gestion des dépôts pour ajouter des listes de plugins.', # NEW
	'message_nok_aucun_paquet_ajoute' => 'Le dépôt « @url@ » ne fournit aucun nouveau paquet par rapport à la base déjà enregistrée. Il n\'a donc pas été ajouté', # NEW
	'message_nok_aucun_plugin_selectionne' => 'Aucun plugin à installer. Veuillez sélectionner les plugins à installer', # NEW
	'message_nok_champ_obligatoire' => 'Поле, обязательное для заполнения',
	'message_nok_depot_deja_ajoute' => 'URL « @url@ » соответствует уже добавленному репозиторию',
	'message_nok_maj_introuvable' => 'Mise à jour du plugin @plugin@ introuvable (@id@).', # NEW
	'message_nok_plugin_inexistant' => 'Запрошенный плагин не существует(@plugin@).',
	'message_nok_sql_insert_depot' => 'Произошла SQL ошибка при добавления репозитория @objet@',
	'message_nok_url_depot_incorrecte' => 'Адрес « @url@ » задан неправильно',
	'message_nok_xml_non_conforme' => 'Не подходит описание XML файла « @fichier@',
	'message_ok_aucun_plugin_trouve' => 'Не найдены плагины по заданным критериям поиска.',
	'message_ok_depot_ajoute' => 'Репозиторий « @url@ » успешно добавлен.',
	'message_ok_plugins_trouves' => '@nb_plugins@ plugin(s) correspondent aux critères choisis (@tri@). Sélectionnez ci-dessous les plugins que vous souhaitez télécharger et activer sur votre serveur.', # NEW
	'message_telechargement_archive_effectue' => 'Файл успешно разархивирован в папке @dir@.',

	// N
	'nettoyer_actions' => 'Nettoyer ces actions ! Cela effacera la liste des actions qui restent à traiter.', # NEW

	// O
	'onglet_depots' => 'Репозитории',
	'option_categorie_toute' => 'Все разделы',
	'option_depot_tout' => 'Все репозитории',
	'option_doublon_non' => 'Последняя версия',
	'option_doublon_oui' => 'Все совместимые версии',
	'option_etat_tout' => 'Все статусы',

	// P
	'placeholder_phrase' => 'префикс, название, слоган, описание или автор',
	'plugin_info_actif' => 'Плагин включен',
	'plugin_info_up' => 'Доступна новая версия плагина(версия @version@)',
	'plugin_info_verrouille' => 'Системный плагин',
	'plugins_inactifs_liste' => 'Выключенные',
	'plugins_non_verrouilles_liste' => 'Не обязательные',
	'plugins_verrouilles_liste' => 'Обязательные',

	// R
	'resume_table_depots' => 'Список добавленных репозиториев',
	'resume_table_paquets' => 'Список пакетов',
	'resume_table_plugins' => 'Плагины в разделе @categorie@',

	// T
	'telecharger_archive_plugin_explication' => 'Vous pouvez télécharger une archive qui se chargera
		dans votre répertoire « plugins/auto », en écrivant l\'URL de l\'archive dans le champ de saisie.', # NEW
	'titre_depot' => 'Репозиторий',
	'titre_depots' => 'Репозитории',
	'titre_form_ajouter_depot' => 'Добавить репозиторий',
	'titre_form_charger_plugin' => 'Найти и установить плагин',
	'titre_form_charger_plugin_archive' => 'Скачать архивный файл с плагином',
	'titre_form_configurer_svp' => 'Настроить сервер с плагинами',
	'titre_liste_autres_contributions' => 'Шаблоны, библиотеки, наборы иконок...',
	'titre_liste_autres_depots' => 'Другие репозитории',
	'titre_liste_depots' => 'Список доступных репозиториев',
	'titre_liste_paquets_plugin' => 'Список пакетов в плагине',
	'titre_liste_plugins' => 'Список плагинов',
	'titre_logo_depot' => 'Логотип репозитория',
	'titre_logo_plugin' => 'Логотип плагина',
	'titre_nouveau_depot' => 'Новый репозиторий',
	'titre_page_configurer' => 'Сервер плагинов',
	'titre_paquet' => 'Пакет',
	'titre_paquets' => 'Пакеты',
	'titre_plugin' => 'Плагин',
	'titre_plugins' => 'Плагины',
	'tout_cocher' => 'Выбрать все',
	'tout_cocher_up' => 'Проверить обновления',
	'tout_decocher' => 'Убрать выделение'
);

?>
