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
 *        Si l'argument est vide, la fonction renvoie la description complète.
 *
 * @return mixed
 *         La description brute complète ou partielle du plugin :
 *         - sous la forme d'une valeur simple si l'information demandée est unique (chaine)
 *         - sous la forme d'un tabelau associatif indexé par le nom du champ sinon.
 */
function plugin_lire($prefixe, $informations = array()) {

	// Initialisation du tableau de sortie
	static $plugins = array();

	// On passe le préfixe en majuscules pour être cohérent avec le stockage en base.
	$prefixe = strtoupper($prefixe);

	if (!isset($plugins[$prefixe])) {
		// Initialisation de la jointure entre plugins et dépôts.
		$from = array('spip_plugins', 'spip_depots_plugins');
		$group_by = array('spip_plugins.id_plugin');

		// Préfixe, jointure et conditions sur la table des dépots pour éviter les plugins installés.
		$where = array(
			'spip_plugins.prefixe=' . sql_quote($prefixe),
			'spip_depots_plugins.id_depot>0',
			'spip_depots_plugins.id_plugin=spip_plugins.id_plugin'
		);

		// -- Acquisition de tous les champs du plugin.
		$plugins[$prefixe] = false;
		if ($plugin = sql_fetsel('*', $from, $where, $group_by)) {
			$plugins[$prefixe] = $plugin;
		}
	}

	// On ne retourne que les champs demandés
	$plugin = $plugins[$prefixe];
	if ($plugin and $informations) {
		// Extraction des seules informations demandées.
		// -- si on demande une information unique on renvoie la valeur simple, sinon on renvoie un tableau.
		// -- si une information n'est pas un champ valide elle n'est pas renvoyée sans monter d'erreur.
		if (is_array($informations)) {
			if (count($informations) == 1) {
				// Tableau d'une seule information : on revient à une chaine unique.
				$informations = array_shift($informations);
			} else {
				// Tableau des informations valides
				$plugin = array_intersect_key($plugin, array_flip($informations));
			}
		}

		if (is_string($informations)
		and isset($plugin[$informations])) {
			// Valeur unique demandée.
			$plugin = $plugin[$informations];
		}
 	}

	return $plugin;
}
