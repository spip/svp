<?php
/**
 * Ce fichier contient l'API de gestion de l'objet plugin.
 *
 * @package SPIP\SVP\PLUGIN\API
 */
if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Retourne la description complète ou une liste de champs précisés dans l'appel
 * d'un objet plugin identifié par son préfixe.
 *
 * @param string        $prefixe
 *        La valeur du préfixe du plugin.
 * @param array|string  $informations
 *        Identifiant d'un champ ou de plusieurs champs de la description d'un plugin.
 *        Si l'argument est vide, la fonction renvoie les descriptions complètes.
 *
 * @return array
 *         La description brute complète ou partielle du plugin.
 */
function plugin_lire($prefixe, $informations = array()) {

	// Initialisation du tableau de sortie
	static $plugins = array();

	// On passe le préfixe en majuscules pour être cohérent avec le stockage en base.
	$prefixe = strtoupper($prefixe);

	if (!isset($plugins[$prefixe])) {
		// Identification des champs acceptables pour un plugin.
		include_spip('base/objets');
		$description_table = lister_tables_objets_sql('spip_plugins');
		$champs_plugin = array_keys($description_table['field']);

		// --Initialisation de la jointure entre plugins et dépôts.
		$from = array('spip_plugins', 'spip_depots_plugins');
		$group_by = array('spip_plugins.id_plugin');

		// -- Préfixe, jointure et conditions sur la table des dépots pour éviter les plugins installés.
		$where = array(
			'spip_plugins.prefixe=' . sql_quote($prefixe),
			'spip_depots_plugins.id_depot>0',
			'spip_depots_plugins.id_plugin=spip_plugins.id_plugin'
		);

		// Acquisition de tous les champs acceptables du plugin.
		$plugins[$prefixe] = array();
		if ($plugin = sql_fetsel($champs_plugin, $from, $where, $group_by)) {
			$plugins[$prefixe] = $plugin;
		}
	}

	// On ne retourne que les champs demandés
	$plugin = $plugins[$prefixe];
	if ($plugin and $informations) {
		$plugin = array_intersect_key($plugin, array_flip($informations));
	}

	return $plugin;
}
