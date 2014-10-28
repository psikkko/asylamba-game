<?php

/**
 * ressources pour les lois
 *
 * @author Noé Zufferey
 * @copyright Expansion - le jeu
 *
 * @package Demeter
 * @update 29.09.14
*/

#id des forums : < 10 = pour tous les gens d'une faction, >= 10 < 20 = pour le gouvernement d'une fac, >= 20 pour les chefs de toutes les factions
Class LawResources {

	private static $laws = array(
		array(
			'id' => 1,
			'bonusLaw' => FALSE,
			'devName' => 'sector taxes',
			'name' => 'Ajustement de l\'imposition sectoriel',
			'department' => 3,
			'price' => 50000,
			'duration' => 0,
			'bonus' => 0,
			'shortDescription' => 'Cette loi modifie le taux d\'imposition appliqué aux planètes d\'un secteur en votre possession. La redevance perçue provient autant des bases de votre faction que de celles de factions ennemies (entre 2 et 15).',
			'longDescription' => '',
			'image' => '',
			'isImplemented' => TRUE),
		array(
			'id' => 2,
			'bonusLaw' => FALSE,
			'devName' => 'secteurName',
			'name' => 'Décret de revendication',
			'department' => 6,
			'price' => 250000,
			'duration' => 0,
			'bonus' => 0,
			'shortDescription' => 'Afin de montrer à tous la puissance de votre faction et d\'asseoir la conquête d\'un nouveau territoire, ce décret permet de modifier le nom d\'un secteur.',
			'longDescription' => '',
			'image' => '',
			'isImplemented' => TRUE),
		array(
			'id' => 3,
			'bonusLaw' => FALSE,
			'devName' => 'commercial taxes export',
			'name' => 'Ajustement des taxes d\'achat',
			'department' => 3,
			'price' => 50000,
			'duration' => 0,
			'bonus' => 0,
			'shortDescription' => 'Modifier le taux des taxes commerciales d\'importation avec une autre faction entre 2 et 15 (peut-être plus basse pour les taxes internes).',
			'longDescription' => '',
			'image' => '',
			'isImplemented' => TRUE),
		array(
			'id' => 4,
			'bonusLaw' => FALSE,
			'devName' => 'commercial taxes import',
			'name' => 'Ajustement des taxes de vente',
			'department' => 3,
			'price' => 50000,
			'duration' => 0,
			'bonus' => 0,
			'shortDescription' => 'Modifie le taux des taxes commerciales d\'exportation avec une autre faction entre 2 et 15 (peut-être plus basse pour les taxes internes).',
			'longDescription' => '',
			'image' => '',
			'isImplemented' => TRUE),
		array(
			'id' => 5,
			'bonusLaw' => TRUE,
			'devName' => 'military subvention',
			'name' => 'Subventions militaires',
			'department' => 4,
			'price' => 10000,
			'duration' => 604800, //une semaine entière
			'bonus' => 10,
			'shortDescription' => 'Diminue le coût des vaisseaux de 10% pendant une semaine.',
			'longDescription' => '',
			'image' => '',
			'isImplemented' => FALSE),
		array(
			'id' => 6,
			'bonusLaw' => TRUE,
			'devName' => 'technology',
			'name' => 'Transfert technologique',
			'department' => 5,
			'price' => 2500000,
			'duration' => 108000, //une semaine entière
			'bonus' => 25,
			'shortDescription' => 'Augmente la vitesse de développement d\'une technologie de 10% pendant une semaine.',
			'longDescription' => '',
			'image' => '',
			'isImplemented' => TRUE),
		array(
			'id' => 7,
			'bonusLaw' => TRUE,
			'devName' => 'trade agrements',
			'name' => 'Accords commerciaux',
			'department' => 3,
			'price' => 10000,
			'duration' => 604800, //une semaine entière
			'bonus' => 10,
			'shortDescription' => 'Augmente la production des routes commerciales avec une autre faction.',
			'longDescription' => '',
			'image' => '',
			'isImplemented' => FALSE),
		array(
			'id' => 7,
			'bonusLaw' => TRUE,
			'devName' => 'placement',
			'name' => 'Placement financier',
			'department' => 3,
			'price' => 10000,
			'duration' => 604800, //une semaine entière
			'bonus' => 10,
			'shortDescription' => 'Investir de l\'argent de la faction.',
			'longDescription' => '',
			'image' => '',
			'isImplemented' => FALSE),
		array(
			'id' => 8,
			'bonusLaw' => TRUE,
			'devName' => 'startege',
			'name' => 'Positions défensives',
			'department' => 4,
			'price' => 10000,
			'duration' => 604800, //une semaine entière
			'bonus' => 10,
			'shortDescription' => 'Augmente la défense des gros vaisseaux.',
			'longDescription' => '',
			'image' => '',
			'isImplemented' => FALSE),
		array(
			'id' => 9,
			'bonusLaw' => TRUE,
			'devName' => 'navigation',
			'name' => 'Guerre éclaire',
			'department' => 4,
			'price' => 10000,
			'duration' => 604800, //une semaine entière
			'bonus' => 10,
			'shortDescription' => 'Augmente la vitesse des petits vaisseaux.',
			'longDescription' => '',
			'image' => '',
			'isImplemented' => FALSE),
		array(
			'id' => 10,
			'bonusLaw' => TRUE,
			'devName' => 'education',
			'name' => 'Décret sur l\'éducation',
			'department' => 5,
			'price' => 10000,
			'duration' => 604800, //une semaine entière
			'bonus' => 10,
			'shortDescription' => 'Augmente l\'expérience gagnée par les officiers dans l\'école.',
			'longDescription' => '',
			'image' => '',
			'isImplemented' => FALSE),
		array(
			'id' => 11,
			'bonusLaw' => TRUE,
			'devName' => 'Subventions',
			'name' => 'Subventions universitaires',
			'department' => 5,
			'price' => 10000,
			'duration' => 604800, //une semaine entière
			'bonus' => 10,
			'shortDescription' => 'Augmente l\'investissement des joueurs dans l\'Université.',
			'longDescription' => '',
			'image' => '',
			'isImplemented' => FALSE),
		array(
			'id' => 12,
			'bonusLaw' => TRUE,
			'devName' => 'attaque',
			'name' => 'Force de frappe',
			'department' => 4,
			'price' => 10000,
			'duration' => 604800, //une semaine entière
			'bonus' => 10,
			'shortDescription' => '',
			'longDescription' => '',
			'image' => '',
			'isImplemented' => FALSE),
	);

	public static function getInfo($id, $info) {
		if ($id <= self::size()) {
			if (in_array($info, array('id', 'bonusLaw', 'devName', 'name', 'department', 'price', 'duration', 'bonus', 'shortDescription', 'longDescription', 'image', 'isImplemented'))) {
				return self::$laws[$id - 1][$info];
			} else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	}

	public static function size() { return count(self::$laws); }
}