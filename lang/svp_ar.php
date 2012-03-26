<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.org/tradlang_module/svp?lang_cible=ar
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'العمليات قيد التنفيذ. الرجاء الانتظار...',
	'actions_a_faire' => 'العمليات قيد التنفيذ',
	'actions_demandees' => 'العمليات المطلوبة:',
	'actions_en_erreur' => 'الأخطاء الحاصلة',
	'actions_necessaires' => 'سيتم تنفيذ العمليات الإضافية التالية:',
	'actions_non_traitees' => 'العمليات غير المنفذة',
	'actions_realises' => 'العمليات المنفذة',
	'afficher_les_plugins_incompatibles' => 'Afficher les plugins incompatibles', # NEW

	// B
	'bouton_activer' => 'تفعيل',
	'bouton_actualiser' => 'تحديث',
	'bouton_actualiser_tout' => 'تحديث المستودعات',
	'bouton_appliquer' => 'تطبيق',
	'bouton_confirmer' => 'Confirmer', # NEW
	'bouton_desactiver' => 'إيقاف',
	'bouton_desinstaller' => 'إزالة التثبيت',
	'bouton_installer' => 'تحميل وتفعيل',
	'bouton_modifier_depot' => 'تعديل المستودع',
	'bouton_supprimer' => 'حذف',
	'bouton_up' => 'ترقية',
	'bulle_actualiser_depot' => 'تحديث حزم المستودع',
	'bulle_actualiser_tout_depot' => 'تحديث حزم كل المستودعات',
	'bulle_afficher_xml_plugin' => 'محتوى ملف XML الخاص بالملحق',
	'bulle_ajouter_spipzone' => 'إضافة المستودع SPIP-Zone',
	'bulle_aller_depot' => 'الانتقال الى صفحة هذا المستودع',
	'bulle_aller_documentation' => 'الانتقال الى صفحة التوثيق',
	'bulle_aller_plugin' => 'الانتقال الى صفحة الملحق',
	'bulle_supprimer_depot' => 'حذف المستودع وحزمه',
	'bulle_telecharger_archive' => 'تحميل الأرشيف',
	'bulle_telecharger_fichier_depot' => 'تحميل ملف XML الخاص بالمستودع',
	'bulle_telecharger_librairie' => 'تحميل المكتبة',

	// C
	'cacher_les_plugins_incompatibles' => 'Cacher les plugins incompatibles', # NEW
	'categorie_aucune' => 'بدون تصنيف',
	'categorie_auteur' => 'تعريف، مؤلف، سماح',
	'categorie_communication' => 'تواصل، تفاعلية، مراسلة',
	'categorie_date' => 'المفكرة، الروزنامة، التاريخ',
	'categorie_divers' => 'عناصر جديدة، خدمات خارجية',
	'categorie_edition' => 'تحرير، طباعة، كتابة',
	'categorie_maintenance' => 'إعداد، صيانة',
	'categorie_multimedia' => 'صور، صالات عرض، وسائط متعددة',
	'categorie_navigation' => 'تصفح، بحث، تنظيم',
	'categorie_outil' => 'أدوات تطوير',
	'categorie_performance' => 'تحسين، أداء أمان',
	'categorie_squelette' => 'صفحات نموذجية',
	'categorie_statistique' => 'فهرسة، إحصاءات',
	'categorie_theme' => 'الموضوع',
	'config_activer_log_verbeux' => 'تفعيل السجلات المفصلة؟',
	'config_activer_log_verbeux_explication' => 'هذا الخيار يجعل سجلات خادم معلومات الملحقات أكثر تفصيلاً...',
	'config_activer_pas_a_pas' => 'تفعيل وضعية الخطوة خطوة؟',
	'config_activer_pas_a_pas_explication' => 'ان فعيل هذه الوضعية يسمح بعرض جردة بعد كل عملية منفذة، بدلاً من جردة عامة لكل العمليات المنفذة بعد انتهاء المعالجة. ',
	'config_activer_runtime' => 'تفعيل وضعية «خلال التشغيل» (runtime)؟',
	'config_activer_runtime_explication' => 'لا تحمّل وضعية «خلال التشغيل» (نعم) الا الملحقات المتوافقة مع إصدار SPIP الحالي، وهي الوضعية المستحسنة لمعظم الاستخدامات. في وضعية خارج «خلال التشغيل» (كلا)، يتم تحميل كل ملحقات المخزن مهما كان إصدار SPIP وذلك لعرض كل الملحقات الموجودة تماماً كما يفعل موقع ملحقات SPIP (اي plugins.spip.net)',
	'config_autoriser_activer_paquets_obsoletes' => 'السماح بتفعيل الحزم القديمة؟',
	'config_autoriser_activer_paquets_obsoletes_explication' => 'الحزم القديمة هي حزم محلية أقدم من حزم محلية أخرى. ويتم تحديد القدم على قاعدة حالة الحزمة (ثابتة، تجريبية او قيد التطوير) ورقم إصدارها. اذا رغبت في تفعيل ملحقات قديمة، قم بتفعيل هذا الخيار.',
	'config_depot_editable' => 'السماح بتحرير المستودعات؟',
	'config_depot_editable_explication' => 'يجعل من معلومات مخزن قابلة للتحرير ويتيح هكذا ربطها بمفاتيح او مستندات. ليس من المتوقع ان يهتم اجد بهذا الخيار! فالأفضل ان تترك «كلا»!',
	'confirmer_telecharger_dans' => 'Le plugin sera chargé dans un répertoire (@dir@) qui existe déjà.
	Cela écrasera le contenu de ce répertoire.
	Une copie de l\'ancien contenu sera sauvegardé dans « @dir_backup@ ».
		Vous devez confirmer cette action.', # NEW

	// E
	'erreur_actions_non_traitees' => 'لقد تم تنفيذ بعض العمليات. قد يأتي ذلك من خطأ في عمليات ستنفذ او من عرض هذه الصفحة بينما هناك عمليات قيد التنفيذ. تم إطلاق العمليات من قبل @auteur@ في @date@.',
	'erreur_dir_dib_ecriture' => 'مجلد المكتبات @dir@ غير متاح للكتابة. لا يمكن تغيير اي مكتبة داخله!',
	'erreur_dir_dib_indefini' => 'المجلد _DIR_LIB غير محدد. لا يمكن تغيير اي مكتبة داخله!',
	'erreur_dir_plugins_auto' => 'المجلد «plugins/auto» الذي يتيح تحميل الرزم 
غير موجود او ممنوع من الكتابة.
<strong>يجب إنشاؤه للتمكن من تثبيت ملحقات جديدة من هذه الواجهة.</strong>',
	'erreur_dir_plugins_auto_ecriture' => 'مجلد الحزم @dir@ غير متاح للكتابة. لا يمكن تغيير اي حزمة داخله!',
	'erreur_dir_plugins_auto_indefini' => 'المجلد _DIR_PLUGIN_AUTO غير محدد. لا يمكن تغيير اي حزمة داخله!',
	'erreur_dir_plugins_auto_titre' => 'لا يمكن الوصول الى «plugins/auto»!',
	'erreur_teleporter_chargement_source_impossible' => 'لا يمكن تحميل المصدر @source@',
	'erreur_teleporter_destination_erreur' => 'لا يمكن الوصول الى مجلد @dir@ للنقل البعيد',
	'erreur_teleporter_echec_deballage_archive' => 'لا يمكن فلش الملف @fichier@',
	'erreur_teleporter_format_archive_non_supporte' => 'الناقل البعيد لا يدعم التنسيق @extension@',
	'erreur_teleporter_methode_inconue' => 'اسلوب @methode@ غير معروف للنقل البعيد',
	'erreur_teleporter_type_fichier_inconnu' => 'نوع ملفات غير معروف للمصدر @source@',
	'explication_destination' => 'Le chemin sera calculé depuis le nom de l\'archive si vous ne le remplissez pas.', # NEW

	// F
	'fieldset_debug' => 'كشف الأخطاء',
	'fieldset_edition' => 'تحرير',
	'fieldset_fonctionnement' => 'كيفية العمل',

	// I
	'info_1_depot' => 'مستودع ١',
	'info_1_paquet' => 'حزمة ١',
	'info_1_plugin' => 'ملحق ١',
	'info_admin_plugin_actif_non_verrou_non' => 'تعرض هذه الصفحة الملحقات غير النشطة في الموقع. بالطبع هذه الملحقات غير مقفلة.',
	'info_admin_plugin_actif_non_verrou_tous' => 'تعرض هذه الصفحة الملحقات غير النشطة في الموقع. بالطبع هذه الملحقات غير مقفلة.',
	'info_admin_plugin_actif_oui_verrou_non' => 'تعرض هذه الصفحة الملحقات النشطة وغير المقفلة في الموقع.',
	'info_admin_plugin_actif_oui_verrou_tous' => 'تعرض هذه الصفحة كل الملحقات النشطة في الموقع، ان كانت مقفلة ام لا.',
	'info_admin_plugin_verrou_non' => 'تعرض هذه الصفحة كل الملحقات غير المقفلة  في الموقع، ان كانت نشطة ام لا.',
	'info_admin_plugin_verrou_tous' => 'تعرض هذه الصفحة كل الملحقات في الموقع.',
	'info_admin_plugin_verrouille' => 'تعرض هذه الصفحة الملحقات المقفلة في الموقع. بالطبع هذه الملحقات نشطة وبالتالي لا يمكن تنفيذ اي عملية من هذه الواجهة.', # MODIF
	'info_adresse_spipzone' => 'SPIP-Zone - ملحقات',
	'info_ajouter_depot' => 'بإضافة مستودعات الى قاعدة بياناتك، يمكنك الحصول على معلومات والبحث في كل الحزم التي تشملها المستودعات المضافة.<br />ويتم وصف اي مستودع بواسطة ملف XML يحتوي معلومات المستودع وكل حزمه.',
	'info_aucun_depot' => 'لا وجود لأي مستودع',
	'info_aucun_depot_ajoute' => 'لا يوجد اي مستودع متوافر!<br /> استخدم الاستمارة أدناه لإضافة مستودع «SPIP-Zone - Plugins» المعروف عنوانه مسبقاً او آي مستودع آخر من اختيارك.',
	'info_aucun_paquet' => 'لا وجود لأي حزمة',
	'info_aucun_plugin' => 'لا وجود لأي ملحق',
	'info_boite_charger_plugin' => '<strong>لا يمكن الوصول الى هذه الصفحة الا للمشرفين على الموقع.</strong><p>وتتيح البحث عن ملحقات متوافرة في المستودعات المسجلة في إعداداتكم وتثبيتها فعلياً في خادم الموقع.</p>',
	'info_boite_depot_gerer' => '<strong>لا يمكن الوصول الى هذه الصفحة الا للمشرفين على الموقع.</strong><p>وتتيح إضافة مستودعات ملحقات وتحديثها.</p>',
	'info_charger_plugin' => 'لإضافة ملحق او أكثر، يجب أولاً تنفيذ بحث متعدد المعايير على ملحقات فضاء SPIP. ولا يشمل البحث الا الملحقات المتوافقة مع إصدار SPIP المثبت كما يشير الى الملحقات النشطة في الموقع.',
	'info_compatibilite_dependance' => 'لـ@compatibilite@:',
	'info_contributions_hebergees' => '@total_autres@ مساهمة أخرى مستضافة',
	'info_critere_phrase' => 'إدخال المفاتيح المطلوب البحث عنها في بادئانت الملحقات وأسمائها وشعاراتها ومؤلفيها',
	'info_depots_disponibles' => '@total_depots@  مستودع',
	'info_fichier_depot' => 'إدخال عنوان URL العائد لملف وصف المستودع المطلوب إضافته.<br />لإضافة المستودع «SPIP-Zone - Plugins»، النقر على الرابط:',
	'info_nb_depots' => '@nb@ مستودع',
	'info_nb_paquets' => '@nb@ حزمة',
	'info_nb_plugins' => '@nb@ ملحق',
	'info_paquets_disponibles' => '@total_paquets@ حزمة متوافرة',
	'info_plugin_attente_dependance' => 'dépendances manquantes', # NEW
	'info_plugin_incompatible' => 'إصدار غير متوافق',
	'info_plugin_installe' => 'مثبت',
	'info_plugin_obsolete' => 'إصدار قديم',
	'info_plugins_disponibles' => '@total_plugins@ ملحق متوافر',
	'info_plugins_heberges' => '@total_plugins@ ملحق مستضاف',
	'info_tri_nom' => 'مفرزة أبجدياً',
	'info_tri_score' => 'مرتبة حسب مدى الصلة التنازلي',
	'info_type_depot_git' => 'مستودع مدار في GIT',
	'info_type_depot_manuel' => 'مستودع مدار يدوياً',
	'info_type_depot_svn' => 'مستودع مدار في SVN',
	'info_verrouille' => 'لا يمكن إيقاف او ازالة تثبيت هذا الملحق.',
	'installation_en_cours' => 'العمليات المطلوبة هي قيد التنفيذ',

	// L
	'label_1_autre_contribution' => 'مشاركة أخرى',
	'label_actualise_le' => 'تم التحديث في',
	'label_archive' => 'URL de l\'archive', # NEW
	'label_branches_spip' => 'متوافق',
	'label_categorie' => 'فئة',
	'label_compatibilite_spip' => 'توافق',
	'label_critere_categorie' => 'فئات',
	'label_critere_depot' => 'مستودعات',
	'label_critere_doublon' => 'توافق',
	'label_critere_etat' => 'حالات',
	'label_critere_phrase' => 'بحث في الملحقات',
	'label_destination' => 'Chemin depuis le répertoire « auto » où déposer le plugin', # NEW
	'label_modifie_le' => 'تم التعديل في',
	'label_n_autres_contributions' => 'مشاركات أخرى',
	'label_prefixe' => 'بادئة',
	'label_selectionner_plugin' => 'تحديد هذا الملحق',
	'label_tags' => 'علامات',
	'label_type_depot' => 'نوع المستودع:',
	'label_type_depot_git' => 'مستودع تحت GIT',
	'label_type_depot_manuel' => 'مستودع يدوي',
	'label_type_depot_svn' => 'مستودع تحت SVN',
	'label_url_archives' => 'عنوان URL الخاص بحاوية الأرشيف',
	'label_url_brouteur' => 'عنوان URL الخاص بأصل المصادر',
	'label_url_serveur' => 'عنوان URL الخاص بالخادم',
	'label_version' => 'إصدار',
	'label_xml_depot' => 'ملف XML الخاص بالمستودع',
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'تثبيت ملحقات',
	'legende_rechercher_plugins' => 'البحث عن ملحقات',

	// M
	'message_action_finale_get_fail' => 'لم يتم جلب الملحق «@plugin@» (الإصدار: @version@) بشكل سليم',
	'message_action_finale_get_ok' => 'تم جلب الملحق «@plugin@» (الإصدار: @version@) بشكل سليم',
	'message_action_finale_getlib_fail' => 'فشل تثبيت المكتبة «@plugin@»',
	'message_action_finale_getlib_ok' => 'تم تثبيت مكتبة «@plugin@»',
	'message_action_finale_geton_fail' => 'لم تتم عملية تحميل وتفعيل الملحق «@plugin@» (الإصدار: @version@) بشكل صحيح',
	'message_action_finale_geton_ok' => 'تمت عملية تحميل وتفعيل الملحق «@plugin@» (الإصدار: @version@) بشكل صحيح',
	'message_action_finale_install_fail' => 'فشل تثبيت الملحق «@plugin@» (الإصدار: @version@)',
	'message_action_finale_install_ok' => 'تمت عملية تثبيت الملحق «@plugin@» (الإصدار: @version@) بشكل صحيح',
	'message_action_finale_kill_fail' => 'لم يتم حذف ملفات الملحق « @plugin@» (الإصدار: @version@) بشكل صحيح',
	'message_action_finale_kill_ok' => 'تم حذف ملفات الملحق « @plugin@» (الإصدار: @version@) بشكل صحيح',
	'message_action_finale_off_fail' => 'لم تتم عملية إيقاف الملحق «@plugin@» (الإصدار: @version@) بشكل صحيح',
	'message_action_finale_off_ok' => 'تمت عملية إيقاف الملحق «@plugin@» (الإصدار: @version@) بشكل صحيح',
	'message_action_finale_on_fail' => 'لم تتم عملية تفعيل الملحق «@plugin@» (الإصدار: @version@) بشكل صحيح',
	'message_action_finale_on_ok' => 'تمت عملية تفعيل الملحق «@plugin@» (الإصدار: @version@) بشكل صحيح',
	'message_action_finale_stop_fail' => 'لم تتم عملية إزالة تثبيت الملحق «@plugin@» (الإصدار: @version@) بشكل صحيح',
	'message_action_finale_stop_ok' => 'تمت عملية إزالة تثبيت الملحق «@plugin@» (الإصدار: @version@) بشكل صحيح',
	'message_action_finale_up_fail' => 'لم تتم عملية تحديث الملحق «@plugin@» (من الإصدار: @version@ الى @version_maj@) بشكل صحيح',
	'message_action_finale_up_ok' => 'تمت عملية تحديث الملحق «@plugin@» (من الإصدار: @version@ الى @version_maj@) بشكل صحيح',
	'message_action_finale_upon_fail' => 'لم تتم عملية تحديث وتفعيل الملحق «@plugin@» (من الإصدار: @version@ الى @version_maj@) بشكل صحيح',
	'message_action_finale_upon_ok' => 'تمت عملية تحديث وتفعيل الملحق «@plugin@» (من الإصدار: @version@ الى @version_maj@) بشكل صحيح',
	'message_action_get' => 'تحميل الملحق «@plugin@» (الإصدار: @version@)',
	'message_action_getlib' => 'تحميل المكتبة «<a href="@version@" class="spip_out">@plugin@</a>»',
	'message_action_geton' => 'تحميل الملحق «@plugin@» (الإصدار: @version@) وتفعيله',
	'message_action_install' => 'سيتم تثبيت الملحق «@plugin@» (الإصدار: @version@)',
	'message_action_kill' => 'حذف ملفات الملحق «@plugin@» (الإصدار: @version@)',
	'message_action_off' => 'إيقاف الملحق «@plugin@» (الإصدار: @version@)',
	'message_action_on' => 'تفعيل الملحق «@plugin@» (الإصدار: @version@)',
	'message_action_stop' => 'إزالة تثبيت الملحق «@plugin@» (الإصدار: @version@)',
	'message_action_up' => 'تحديث الملحق «@plugin@» (من الإصدار @version@ الى الإصدار @version_maj@)',
	'message_action_upon' => 'تحديث الملحق «@plugin@» (الإصدار: @version@) وتفعيله',
	'message_dependance_plugin' => 'الملحق @plugin@ يعتمد على @dependance@.',
	'message_dependance_plugin_version' => 'الملحق @plugin@ يعتمد على @dependance@ @version@.',
	'message_erreur_aucun_plugin_selectionne' => 'لا يوجد اي ملحق محدد',
	'message_erreur_ecriture_lib' => 'يتطلب @plugin@ مكتبة <a href="@lib_url@">@lib@</a> الموجودة في مجلد <var>lib/</var> في أصل الموقع. الا ان هذا المجلد ممنوع عن الكتابة. بالتالي يجب تثبيت الملحق يدوياً او إعطاء اذن الكتابة لهذا المجلد.',
	'message_erreur_maj_inconnu' => 'ترقية غير ممكنة لملحق غير معروف (@id@)',
	'message_erreur_plugin_introuvable' => 'لا يمكن العثور على الملحق @plugin@ لـ@action@. ',
	'message_erreur_plugin_non_actif' => 'لا يمكن إيقاف ملحق غير فعال.',
	'message_incompatibilite_spip' => 'لا يتوافق @plugin@ مع إصار SPIP المستخدم هنا.',
	'message_nok_aucun_depot_disponible' => 'لا يوجد اي ملحق متوافر! يجب الذهاب الى صفحة إدارة المستودعات لإضافة لوائح ملحقات.',
	'message_nok_aucun_paquet_ajoute' => 'لا يقدم المستودع «@url@» اي رزمة جديدة مقارنة بالقاعدة المثبتة مسبقاً. بالتالي لم تتم إضافته',
	'message_nok_aucun_plugin_selectionne' => 'لا يوجد اي ملحق للتثبيت. الرجاء تحديد المحلقات المطلوب تثبيتها.',
	'message_nok_champ_obligatoire' => 'هذا الحقل إجباري',
	'message_nok_depot_deja_ajoute' => 'العنوان «@url@» يعود الى مستودع مثبت مسبقاً',
	'message_nok_maj_introuvable' => 'لم يتم العثور على تحديث الملحق @plugin@ (رقم @id@).',
	'message_nok_plugin_inexistant' => 'الملحق المطلوب غير موجود (@plugin@)',
	'message_nok_sql_insert_depot' => 'خطأ SQL لدى إضافة المستودع @objet@',
	'message_nok_url_depot_incorrecte' => '@url@» غير صحيح',
	'message_nok_xml_non_conforme' => 'ملف «@fichier@» لوصف المستودع بتنسيق XML غير ملائم',
	'message_ok_aucun_plugin_trouve' => 'لم يتم العثور على اي ملحق يطابق المعايير المحددة.',
	'message_ok_depot_ajoute' => 'تمت إضافة المستودع @url@.',
	'message_ok_plugins_trouves' => 'يتطابق @nb_plugins@ ملحق مع العايير المحددة (@tri@). الرجاء تحديد أدناه الملحقات المطلوب تحميلها وتفعيلها على الخادم.',
	'message_telechargement_archive_effectue' => 'L\'archive a été correctement extraite dans @dir@.', # NEW

	// N
	'nettoyer_actions' => 'تنظيف هذه العلميات! سيؤدي ذلك الى حذف العمليات قيد التنفيذ.',

	// O
	'onglet_depots' => 'إدارة المستودعات',
	'option_categorie_toute' => 'كل الفئات',
	'option_depot_tout' => 'كل المستودعات',
	'option_doublon_non' => 'أحدث إصدار',
	'option_doublon_oui' => 'كل الإصدارات المتوافقة',
	'option_etat_tout' => 'كل الحالات',

	// P
	'placeholder_phrase' => 'بادئة، اسم، شعار، وصف او مؤلف',
	'plugin_info_actif' => 'ملحق نشط',
	'plugin_info_up' => 'هناك ترقية متوافرة للملحق (الإصدار @version@)',
	'plugin_info_verrouille' => 'ملحق مقفل',
	'plugins_inactifs_liste' => 'غير نشطة',
	'plugins_non_verrouilles_liste' => 'غير مقفلة',
	'plugins_verrouilles_liste' => 'مقفلة',

	// R
	'resume_table_depots' => 'لائحة المستودعات المضافة',
	'resume_table_paquets' => 'لائحة الحزم',
	'resume_table_plugins' => 'لائحة ملحقات @categorie@',

	// T
	'telecharger_archive_plugin_explication' => 'Vous pouvez télécharger une archive qui se chargera
		dans votre répertoire « plugins/auto », en écrivant l\'URL de l\'archive dans le champ de saisie.', # NEW
	'titre_depot' => 'مستودع',
	'titre_depots' => 'مستودعات',
	'titre_form_ajouter_depot' => 'إضافة مستودع',
	'titre_form_charger_plugin' => 'Rechercher et ajouter des plugins', # NEW
	'titre_form_charger_plugin_archive' => 'Télécharger un plugin depuis son archive', # NEW
	'titre_form_configurer_svp' => 'إعداد خادم الملحقات',
	'titre_liste_autres_contributions' => 'صفحات نموذجية، مكتبات، مجموعات أيقونات...',
	'titre_liste_autres_depots' => 'مستودعات أخرى',
	'titre_liste_depots' => 'لائحة المستودعات المتوافرة',
	'titre_liste_paquets_plugin' => 'لائحة حزم الملحق',
	'titre_liste_plugins' => 'لائحة الملحقات',
	'titre_logo_depot' => 'شعار المستودع',
	'titre_logo_plugin' => 'شعار الملحق',
	'titre_nouveau_depot' => 'مستودع جديد',
	'titre_page_configurer' => 'خادم الملحقات',
	'titre_paquet' => 'حزمة',
	'titre_paquets' => 'حزم',
	'titre_plugin' => 'ملحق',
	'titre_plugins' => 'ملحقات',
	'tout_cocher' => 'تحديد الكل',
	'tout_cocher_up' => 'تحديد التحديثات',
	'tout_decocher' => 'إزالة تحديد الكل'
);

?>
