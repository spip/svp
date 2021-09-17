<?php

/**
 * Gestion du génie svp_actualiser_depots
 *
 * @plugin SVP pour SPIP
 * @license GPL
 * @package SPIP\SVP\Genie
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Actualise tous les dépots
 *
 * @genie svp_actualiser_depots
 *
 * @uses  svp_actualiser_depot()
 * @param int $last
 *     Timestamp de la dernière exécution de cette tâche
 * @return int
 *     Positif : la tâche a été effectuée
 */
function genie_svp_actualiser_cache_dist($last) {


	return 1;
}
