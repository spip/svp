<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de https://trad.spip.net/tradlang_module/svp?lang_cible=pt_br
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'As ações estão sendo processadas. Por favor, aguarde...',
	'actions_a_faire' => 'Ações a tratar',
	'actions_demandees' => 'Ações solicitadas:',
	'actions_en_erreur' => 'Erros ocorridos',
	'actions_necessaires' => 'As ações suplementares a seguir serão efetuadas:',
	'actions_non_traitees' => 'Ações não realizadas',
	'actions_realises' => 'Ações realizadas',
	'afficher_les_plugins_incompatibles' => 'Exibir os plugins incompatíveis',
	'alerte_compatibilite' => 'Compatibilidade forçada',
	'alerte_compatibilite_version_autorisee' => 'Os plugins compatíveis com o SPIP <code>@version@</code> podem ser ativados.',

	// B
	'bouton_activer' => 'Ativar',
	'bouton_actualiser' => 'Atualisar',
	'bouton_actualiser_tout' => 'Atualizar os repositórios',
	'bouton_appliquer' => 'Aplicar',
	'bouton_confirmer' => 'Confirmar',
	'bouton_desactiver' => 'Desativar',
	'bouton_desinstaller' => 'Desinstalar',
	'bouton_installer' => 'Transferir e ativar',
	'bouton_modifier_depot' => 'Alterar o repositório',
	'bouton_supprimer' => 'Excluir',
	'bouton_up' => 'Atualizar',
	'bulle_actualiser_depot' => 'Atualizar os pacotes do repositório',
	'bulle_actualiser_tout_depot' => 'Atualizar os pacotes de todos os repositórios',
	'bulle_afficher_xml_plugin' => 'Conteúdo do arquivo XML do plugin',
	'bulle_ajouter_spipzone' => 'Incluir o repositório SPIP-Zone',
	'bulle_aller_demonstration' => 'Ir para a página de demonstração',
	'bulle_aller_depot' => 'Ir para a página deste repositório',
	'bulle_aller_documentation' => 'Ir para a página da documentação',
	'bulle_aller_plugin' => 'Ir para a página do plugin',
	'bulle_supprimer_depot' => 'Excluir o repositórios destes pacotes',
	'bulle_telecharger_archive' => 'Transferir o arquivo',
	'bulle_telecharger_fichier_depot' => 'Transferir o arquivo XML do repositório',
	'bulle_telecharger_librairie' => 'Transferir a biblioteca',

	// C
	'cacher_les_plugins_incompatibles' => 'Esconder os plugins incompatíveis',
	'config_activer_log_verbeux' => 'Ativas os logs extendidos',
	'config_activer_log_verbeux_explication' => 'Esta opção deixa os logs do SVP muito mais completos...',
	'config_activer_pas_a_pas' => 'Ativar o modo passo-a-passo?',
	'config_activer_pas_a_pas_explication' => 'Ativar este modo permite exibir um resumo após cada ação realizada, em vez de de um resumo apenas global de todas as ações efetuadas ao fim dos processamentos.',
	'config_activer_runtime' => 'Ativar o modo runtime ?',
	'config_activer_runtime_explication' => 'O modo runtime (sim) só carrega os plugins compatíveis com a versão atual do seu SPIP, o que é fortemente aconselhável para a maior parte dos usos. Em modo não runtime (não), todos os plugins de um repositório são cerregados, seja qual for a versão do SPIP atual. Isto é útil unicamente para usar o SVP para apresentar todos os plugins existentes da mesma forma que faz o site Plugins SPIP (plugins.spip.net)',
	'config_autoriser_activer_paquets_obsoletes' => 'Autorizar a ativação de pacotes obsoletos?',
	'config_autoriser_activer_paquets_obsoletes_explication' => 'Os pacotes obsoletos são pacotes locais atuais que são mais antigos do que outros pacotes locais. A obsolescência é estabelecida na base do status (estável, teste, dev) do pacote bem como na base de sua versão. Ative esta opção se você deseja, apesar de tudo, ativar estes plugins obsoletos.',
	'config_depot_editable' => 'Permitir a edição dos repositórios?',
	'config_depot_editable_explication' => 'Isto torna editáveis as informações de um repositório, permitindo eventualmente vincular palavras-chave ou documentos. Esta opção não deverá interessar a ninguém! É melhor deixar como «não»!',
	'confirmer_desinstaller' => 'Atenção, a desinstalação de um plugin <b>exclui<b> os seus dados da base e é irreversível.<br />Se voce não está seguro, simplesmente desative o plugin.',
	'confirmer_telecharger_dans' => 'O plugin será carregado num diretório (@dir@) que já existe.
Isso irá sobrepor o conteúdo desse diretório.
Uma cópia do conteúdo anterior será gravada em «@dir_backup@».
Você precisa confirmar esta ação.',

	// E
	'erreur_actions_non_traitees' => 'Algumas ações não foram realizadas. Isso pode ter sido causado por um erro nas ações a realizar, ou da exibição desta página enquanto as ações ainda estão em curso. As ações foram disparadas por @auteur@ em @date@.',
	'erreur_auth_plugins_ajouter_lib' => 'Você não tem as permissões necessárias para incluir uma biblioteca.',
	'erreur_dir_dib_ecriture' => 'O diretório das bibliotecas @dir@ não está acessível para escrita. Não é possível carregar uma biblioteca!',
	'erreur_dir_dib_indefini' => 'O diretório _DIR_LIB não foi definido. Não foi possível carregar uma biblioteca!',
	'erreur_dir_plugins_auto' => 'O diretório «plugins/auto», que permite transferir os pacotes, não foi criado ou não está acessível para escrita. <strong>Você precisa criá-lo para instalar novos plugins a partir desta interface.</strong>',
	'erreur_dir_plugins_auto_ecriture' => 'O diretório de pacotes @dir@ não está acessível para escrita. Não é possível carregar um pacote!',
	'erreur_dir_plugins_auto_indefini' => 'O diretório _DIR_PLUGIN_AUTO não foi definido. Não foi possível instalar um pacote!',
	'erreur_dir_plugins_auto_titre' => '«plugins/auto» está inacessível!',
	'erreur_teleporter_chargement_source_impossible' => 'Impossível fazer o carregamento da fonte @source@',
	'erreur_teleporter_destination_erreur' => 'Diretório @dir@ inacessível para teleportar',
	'erreur_teleporter_echec_deballage_archive' => 'Não foi possível desembalar @fichier@',
	'erreur_teleporter_format_archive_non_supporte' => 'O formato @extension@ não é suportado pelo teleportador',
	'erreur_teleporter_methode_inconue' => 'Método @methode@ desconhecido pelo teleportador',
	'erreur_teleporter_type_fichier_inconnu' => 'Tipo de arquivo desconhecido para a fonte @source@',
	'erreurs_xml' => 'Impossível ler alguma descrições XML',
	'explication_destination' => 'O caminho será calculado a partir do nome do arquivo se você não indicar outro.',

	// F
	'fieldset_debug' => 'Depuração',
	'fieldset_edition' => 'Edição',
	'fieldset_fonctionnement' => 'Funcionamento',
	'filtrer' => 'Filtrar',

	// I
	'info_0_plugin' => 'nenhum plugin',
	'info_1_depot' => '1 repositório',
	'info_1_paquet' => '1 pacote',
	'info_1_plugin' => '1 plugin',
	'info_admin_plugin_actif_non_verrou_non' => 'Esta página lista os plugins inativos do site. Estes plugins estão sempre desbloqueados.',
	'info_admin_plugin_actif_non_verrou_tous' => 'Esta página lista os plugins inativos do site. Estes plugins estão sempre desbloqueados.',
	'info_admin_plugin_actif_oui_verrou_non' => 'Esta página mostra os plugins ativos e desbloqueados do site.',
	'info_admin_plugin_actif_oui_verrou_tous' => 'Esta página mostra todos os plugins ativos do site, bloqueados ou não.',
	'info_admin_plugin_verrou_non' => 'Esta página lista todos os plugins não bloqueados do site, ativos ou inativos.',
	'info_admin_plugin_verrou_tous' => 'Esta página lista todos os plugins do site.',
	'info_admin_plugin_verrouille' => 'Esta página lista os plugins ativos e bloqueados (localizados no diretório <code>@dir_plugins_dist@</code>).
Se você desejar desativá-los, contate o webmaster do site, ou consulte <a href="https://programmer.spip.net/repertoire_plugins-dist">a documentação</a>.',
	'info_adresse_spipzone' => 'SPIP-Zone - Plugins',
	'info_ajouter_depot' => 'Ao incluir repositórios à sua base, você terá a possibilidade de obter informações e realizar buscas em todos os pacotes hospedados nos repositórios incluídos.<br />Um repositório é descrito por um arquivo XML contendo as informações sobre o repositório e sobre todos os seus pacotes.',
	'info_aucun_depot' => 'nenhum repositório',
	'info_aucun_depot_ajoute' => 'Nenhum repositório disponível!<br />Use o formulário abaixo para incluir o repositório «SPIP-Zone - Plugins», para o qual o URL já está preenchido, ou outro repositório de sua preferência.',
	'info_aucun_paquet' => 'nenhum pacote',
	'info_aucun_plugin' => 'nenhum plugin',
	'info_boite_charger_plugin' => '<strong>Esta página está acessível apenas aos webmasters do site.</strong><p>Ela permite-lhe pesquisar os plugins disponibilizados pelos repositórios cadastrados na sua configuração e os instalar fisicamente no seu servidor.</p>',
	'info_boite_depot_gerer' => '<strong>Esta página é acessível exclusivamente aos webmasters do site.</strong><p>Ela permite a inclusão e a atualização dos repositórios de plugins.</p>',
	'info_charger_plugin' => 'Para incluir um ou mais plugins, faça previamente uma busca multi-critérios nos plugins da galáxia SPIP. A busca só inclui os plugins compatíveis com a versão do SPIP instalada e sinaliza quais os plugins já ativos no site.',
	'info_compatibilite_dependance' => 'Para @compatibilite@ :',
	'info_contributions_hebergees' => '@total_autres@ outra(s) contribuição(ões) hospedada(s)',
	'info_critere_phrase' => 'Digite as palavras-chave a buscar no prefixo, nome, slogan, descrição e outros plugins',
	'info_depots_disponibles' => '@total_depots@ repositório(s)',
	'info_fichier_depot' => 'Digite o URL do arquivo de descrição do repositório a ser incluído.<br />Para incluir o repositório «SPIP-Zone - Plugins», clique neste link: ',
	'info_logiciel_version' => '@logiciel@ @signe@ @version@',
	'info_logiciel_version_intervalle' => '@logiciel@ @signe_min@ @version_min@ e @signe_max@ @version_max@',
	'info_nb_depots' => '@nb@ repositórios',
	'info_nb_paquets' => '@nb@ pacotes',
	'info_nb_plugins' => '@nb@ plugins',
	'info_paquets_disponibles' => '@total_paquets@ pacote(s) disponível(eis)',
	'info_plugin_attente_dependance' => 'dependências em falta',
	'info_plugin_incompatible' => 'versão incompativel',
	'info_plugin_installe' => 'já instalado',
	'info_plugin_obsolete' => 'versão obsoleta',
	'info_plugins_disponibles' => '@total_plugins@ plugin(s) disponível(eis)',
	'info_plugins_heberges' => '@total_plugins@ plugin(s) hospedado(s)',
	'info_tri_nom' => 'ordenado(s) em ordem alfabética',
	'info_tri_score' => 'ordenado(s) por pertinência decrescente',
	'info_type_depot_git' => 'Repositório gerenciado por GIT',
	'info_type_depot_manuel' => 'Repositório gerenciado manualmente',
	'info_type_depot_svn' => 'Repositório gerenciado por SVN',
	'info_verrouille' => 'Não é possível desativar ou desinstalar este plugin.',
	'installation_en_cours' => 'As ações solicitadas estão em processamento',

	// L
	'label_1_autre_contribution' => 'outra contribuição',
	'label_actualise_le' => 'Atualizado em',
	'label_archive' => 'URL do arquivo',
	'label_branches_spip' => 'Compatível',
	'label_compatibilite_spip' => 'Compatibilidade',
	'label_critere_depot' => 'Repositórios',
	'label_critere_doublon' => 'Compatibilidade',
	'label_critere_etat' => 'Estados',
	'label_critere_phrase' => 'Buscar nos plugins',
	'label_destination' => 'Caminho do diretório «auto», onde gravar o plugin',
	'label_modifie_le' => 'Alterado em',
	'label_n_autres_contributions' => 'outras contribuições',
	'label_prefixe' => 'Prefixo',
	'label_selectionner_plugin' => 'Selecionar este plugin',
	'label_tags' => 'Tags',
	'label_type_depot' => 'Tipo de repositório:',
	'label_type_depot_git' => 'Repositório em GIT',
	'label_type_depot_manuel' => 'Repositório  manual',
	'label_type_depot_svn' => 'Repositório em SVN',
	'label_url_archives' => 'URL do container dos arquivos',
	'label_url_brouteur' => 'URL da raiz das fontes',
	'label_url_serveur' => 'URL do servidor',
	'label_version' => 'Versão',
	'label_xml_depot' => 'Arquivo XML do repositório',
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'Instalar plugins',
	'legende_rechercher_plugins' => 'Buscar plugins',
	'lien_demo' => 'Démonstração',
	'lien_documentation' => 'Documentação',

	// M
	'message_action_finale_get_fail' => 'O plugin «@plugin@» (versão: @version@) não pode ser recuperado corretamente',
	'message_action_finale_get_ok' => 'O plugin «@plugin@» (versão: @version@) foi recuperado corretamente',
	'message_action_finale_getlib_fail' => 'A instalação da biblioteca «@plugin@» falhou',
	'message_action_finale_getlib_ok' => 'A biblioteca «@plugin@» foi instalada',
	'message_action_finale_geton_fail' => 'A transferência ou ativação plugin «@plugin@» (versão: @version@) não ocorreram corretamente',
	'message_action_finale_geton_ok' => 'A transferência e ativação do plugin «@plugin@» (versão: @version@) ocorreram corretamente',
	'message_action_finale_install_fail' => 'A instalação do plugin «@plugin@» (versão: @version@) falhou',
	'message_action_finale_install_ok' => 'A instalação do plugin «@plugin@» (versão: @version@) ocorreu corretamente',
	'message_action_finale_kill_fail' => 'Os arquivos do «@plugin@» (versão: @version@) não puderam ser excluídos corretamente',
	'message_action_finale_kill_ok' => 'Os arquivos do plugin «@plugin@» (versão: @version@) foram excluídos corretamente',
	'message_action_finale_off_fail' => 'A desativação do plugin «@plugin@» (versão: @version@) não ocorreu corretamente',
	'message_action_finale_off_ok' => 'A desativação do plugin «@plugin@» (versão: @version@) ocorreu corretamente',
	'message_action_finale_on_fail' => 'A ativação do plugin «@plugin@» (versão: @version@) não ocorreu corretamente',
	'message_action_finale_on_ok' => 'A ativação do plugin «@plugin@» (versão: @version@) ocorreu corretamente',
	'message_action_finale_stop_fail' => 'A desinstalação do plugin «@plugin@» (versão: @version@) não ocorreu corretamente',
	'message_action_finale_stop_ok' => 'A desinstalação do plugin «@plugin@» (versão: @version@) ocorreu corretamente',
	'message_action_finale_up_fail' => 'A atualização do plugin «@plugin@» (da versão: @version@ para @version_maj@) não ocorreu corretamente',
	'message_action_finale_up_ok' => 'A atualização do plugin «@plugin@» (da versão: @version@ para @version_maj@) ocorreu corretamente',
	'message_action_finale_upon_fail' => 'A atualização e ativação do plugin «@plugin@» (da versão: @version@ para @version_maj@) não ocorreram corretamente',
	'message_action_finale_upon_ok' => 'A atualização e ativação do plugin «@plugin@» (da versão: @version@ para @version_maj@) oocorreram corretamente',
	'message_action_get' => 'Transferir o plugin «@plugin@» (versão: @version@)',
	'message_action_getlib' => 'Transferir a biblioteca «<a href="@version@" class="spip_out">@plugin@</a>»',
	'message_action_geton' => 'Transferir e ativar o plugin «@plugin@» (versão: @version@)',
	'message_action_install' => 'O plugin «@plugin@» (versão: @version@) vai ser instalado',
	'message_action_kill' => 'Exclusão dos arquivos do plugin «@plugin@» (versão: @version@)',
	'message_action_off' => 'Desativar o plugin «@plugin@» (versão: @version@)',
	'message_action_on' => 'Ativar o plugin «@plugin@» (versão: @version@)',
	'message_action_stop' => 'Desinstalar o plugin «@plugin@» (versão: @version@)',
	'message_action_up' => 'Atualização do plugin «@plugin@» (da versão @version@ para @version_maj@)',
	'message_action_upon' => 'Atualização e ativação do plugin «@plugin@» (versão: @version@)',
	'message_dependance_extension_php' => 'O plugin @plugin@ requer a extensão PHP @dependance@.',
	'message_dependance_php' => 'O plugin @plugin@ requer @dependance@',
	'message_dependance_plugin' => 'O plugin @plugin@ depende do plugin @dependance@.',
	'message_erreur_aucun_plugin_selectionne' => 'Nenhum plugin selecionado.',
	'message_erreur_ecriture_lib' => '@plugin@ precisa da biblioteca <a href="@lib_url@">@lib@</a> localizada no diretório <var>lib/</var> na raíz do seu site. No entanto, este diretório não existe ou não está acessível para escrita. Você precisa instalar manualmente esta biblioteca ou criar o diretório com permissão de escrita.',
	'message_erreur_maj_inconnu' => 'Atualização impossível de um plugin desconhecido.',
	'message_erreur_plugin_introuvable' => 'Não foi possível encontrar o plugin @plugin@ para @action@.',
	'message_erreur_plugin_non_actif' => 'Não é possível desativar um plugin inativo.',
	'message_incompatibilite_spip' => '@plugin@  não é compatível com a versão do SPIP que você usa.',
	'message_nok_aucun_depot_disponible' => 'Nenhum plugin disponível! Acesse a página de gerenciamento de repositórios para incluir as listas de plugins.',
	'message_nok_aucun_paquet_ajoute' => 'O repositório «@url@» não disponibiliza nenhum pacote novo com relação à base já registrada e não foi incluído',
	'message_nok_aucun_plugin_selectionne' => 'Nenhum plugin para instalar. Por, favor, selecione os plugins a serem instalados',
	'message_nok_champ_obligatoire' => 'Este campo é obrigatório',
	'message_nok_depot_deja_ajoute' => 'O endereço «@url@» corresponde a um repositório já incluído',
	'message_nok_maj_introuvable' => 'A atualização do plugin @plugin@ não foi encontrada.',
	'message_nok_plugin_inexistant' => 'O plugin solicitado é inexistente (@plugin@).',
	'message_nok_sql_insert_depot' => 'Erro SQL ao incluir o repositório @objet@',
	'message_nok_url_archive' => 'O URL do arquivo é inválido',
	'message_nok_url_depot_incorrecte' => 'O endereço «@url@» está incorreto',
	'message_nok_xml_non_conforme' => 'O arquivo XML «@fichier@» de descrição do repositório não está em conformidade',
	'message_nok_xml_non_recupere' => 'O arquivo XML «@fichier@» não pode ser recuperado',
	'message_ok_aucun_plugin_trouve' => 'Nenhum plugin corresponde aos critérios selecionados.',
	'message_ok_depot_ajoute' => 'O repositório «@url@» foi incluído.',
	'message_ok_plugins_trouves' => '@nb_plugins@ plugin(s) correspondem aos critérios selecionados (@tri@). Escolha abaixo os plugins que você deseja transferir e ativar no seu servidor.',
	'message_telechargement_archive_effectue' => 'O arquivo foi corretamente extraído em @dir@.',

	// N
	'nettoyer_actions' => 'Limpar estas ações! Isto excluirá a lista de ações que ainda não foram processadas.',

	// O
	'onglet_depots' => 'Gerenciar os repositórios',
	'option_depot_tout' => 'Todos os repositórios',
	'option_doublon_non' => 'A versão mais recente',
	'option_doublon_oui' => 'Todas as versões compatíveis',
	'option_etat_tout' => 'Todos os estados',

	// P
	'placeholder_phrase' => 'prefixo, nome, slogan, descrição ou autor',
	'plugin_info_actif' => 'Plugin ativo',
	'plugin_info_up' => 'Uma atualização do plugin está disponível (versão @version@)',
	'plugin_info_verrouille' => 'Plugin bloqueado',
	'plugins_inactifs_liste' => 'Inativos',
	'plugins_non_verrouilles_liste' => 'Não bloqueados',
	'plugins_verrouilles_liste' => 'Bloqueados',

	// R
	'resume_table_depots' => 'Lista dos repositórios incluídos',
	'resume_table_paquets' => 'Lista de pacotes',
	'resume_table_plugins' => 'Lista dos plugins @categorie@',

	// T
	'telecharger_archive_plugin_explication' => 'Você pode transferir um arquivo que se carregará no seu diretório «plugins/auto», informando o URL do arquivo no campo de entrada.',
	'titre_depot' => 'Repositório',
	'titre_depots' => 'Repositórios',
	'titre_form_ajouter_depot' => 'Incluir um repositório',
	'titre_form_charger_plugin' => 'Buscar e incluir plugins',
	'titre_form_charger_plugin_archive' => 'Transferir um plugin a partir do seu arquivo',
	'titre_form_configurer_svp' => 'Configurar o Servidor de Plugins',
	'titre_liste_autres_contributions' => 'Templates, bibliotecas, conjuntos de ícones...',
	'titre_liste_autres_depots' => 'Outros repositórios',
	'titre_liste_depots' => 'Lista dos repositórios disponíveis',
	'titre_liste_paquets_plugin' => 'Lista dos pacotes do plugin',
	'titre_liste_plugins' => 'Lista dos plugins',
	'titre_logo_depot' => 'Ícone do repositório',
	'titre_logo_plugin' => 'Ícone do plugin',
	'titre_nouveau_depot' => 'Novo repositório',
	'titre_page_configurer' => 'Servidor de Plugins',
	'titre_paquet' => 'Pacote',
	'titre_paquets' => 'Pacotes',
	'titre_plugin' => 'Plugin',
	'titre_plugins' => 'Plugins',
	'tout_cocher' => 'Marcar todos',
	'tout_cocher_up' => 'Marcar as atualizações',
	'tout_decocher' => 'Desmarcar todos'
);
