<?php
/**
 * Ce fichier contient le complément pour SVP de l'API de gestion des différentes typologie de plugin.
 */
if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

if (!defined('_SVP_URL_SERVEUR_TYPOLOGIE')) {
	define('_SVP_URL_SERVEUR_TYPOLOGIE', 'https://demopot.smellup.net/http.api/svp/');
}


/**
 * Renvoie, pour le plugin demandé et en fonction de la typologie, le ou les types associés au plugin.
 * La typologie est acquise vi l'API REST des modules complémentaires de SVP (SVP Typologie, SVP API) et
 * stockée dans un cache mis à jour toutes les 6 heures.
 *
 * @param string $prefixe
 *        Préfixe du plugin concerné en majuscules.
 * @param string $typologie
 *        Typologie concernée : categorie ou tag.
 *
 * @return string
 *        Identifiant de la catégorie ou chaine vide sinon.
 */
function plugin_acquerir_type($prefixe, $typologie) {

	// Utilisation d'une statique pour éviter les requêtes multiples sur le même hit.
	static $types = array();

	if (!isset($types[$typologie][$prefixe])) {
		// On lit le cache des affectations plugin-type.
		// strpos(_SPIPERIPSUM_EVANGILE_ENDPOINT, $GLOBALS['meta']['adresse_site']) === false)
		$affectations = array();


		// Si échut on requete le serveur

		// On stocke les affectations en statique pour la typologie concernée.
		$types[$typologie] = $affectations;
	}

    return $types[$typologie][$prefixe];
}


/**
 * Renvoie les affectations aux plugins pour une typologie donnée.
 *
 * @param string $typologie
 *        Typologie concernée : categorie ou tag.
 * @param string $type
 *        Valeur d'un type donné pour la typologie concernée.
 *
 * @return array
 */
function type_plugin_lister_affectation($typologie, $type = '') {

	// Utilisation d'une statique pour éviter les requêtes multiples sur le même hit.
	static $affectations = array();

	if (!isset($affectations[$typologie])) {
		// On récupère l'id du groupe pour le type précisé (categorie, tag).
		include_spip('inc/config');
		$id_groupe = lire_config("svptype/typologies/${typologie}/id_groupe", 0);

		// On récupère la description complète de toutes les catégories de plugin
		$from = array('spip_plugins_typologies');
		$where = array('id_groupe=' . $id_groupe);
		$order_by = array('id_mot', 'prefixe');
		$affectations[$typologie] = sql_allfetsel('*', $from, $where, '', $order_by);
	}

	// Filtrer sur le type souhaité si il existe.
	if (!$type) {
		$affectations_filtrees = $affectations[$typologie];
	} else {
		// Récupération de l'id du type
		include_spip('inc/svptype_mot');
		$id_type = mot_lire_id($type);

		// Extraction des seules affectations au type.
		$affectations_filtrees = array();
		foreach ($affectations[$typologie] as $_affectation) {
			if ($_affectation['id_mot'] == $id_type) {
				$affectations_filtrees[] = $_affectation;
			}
		}
	}

    return $affectations_filtrees;
}
