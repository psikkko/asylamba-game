<?php

/**
 * election Manager
 *
 * @author Noé Zufferey
 * @copyright Expansion - le jeu
 *
 * @package Demeter
 * @update 06.10.13
*/

class ElectionManager extends Manager {
	protected $managerType ='_Election';

	public function load($where = array(), $order = array(), $limit = array()) {
		$formatWhere = Utils::arrayToWhere($where, 'e.');
		$formatOrder = Utils::arrayToOrder($order);
		$formatLimit = Utils::arrayToLimit($limit);

		$db = DataBase::getInstance();
		$qr = $db->prepare('SELECT e.*
			FROM election AS e
			' . $formatWhere .'
			' . $formatOrder .'
			' . $formatLimit
		);

		foreach($where AS $v) {
			if (is_array($v)) {
				foreach ($v as $p) {
					$valuesArray[] = $p;
				}
			} else {
				$valuesArray[] = $v;
			}
		}

		if (empty($valuesArray)) {
			$qr->execute();
		} else {
			$qr->execute($valuesArray);
		}

		$aw = $qr->fetchAll();
		$qr->closeCursor();

		foreach($aw AS $awelecion) {
			$election = new election();

			$election->id = $awelecion['id'];
			$election->rColor = $awelecion['rColor'];
			$election->dElection = $awelecion['dElection'];

			$this->_Add($election);
		}
	}

	public function save() {
		$db = DataBase::getInstance();

		$election = $this->_Save();

	foreach ($election AS $election) {


		$qr = $db->prepare('UPDATE election
			SET
				rColor = ?,
				dElection = ?
			WHERE id = ?');
		$aw = $qr->execute(array(
				$election->rColor,
				$election->dElection,
				$election->id

			));
		}
	}

	public function add($newElection) {
		$db = DataBase::getInstance();

		$qr = $db->prepare('INSERT INTO election
			SET
				rColor = ?,
				dElection = ?');

			$aw = $qr->execute(array(
				$newElection->rColor,
				utils::now()
				));

		$newElection->id = $db->lastInsertId();

		$this->_Add($newElection);

		return $newElection->id;
	}

	public function deleteById($id) {
		$db = DataBase::getInstance();
		$qr = $db->prepare('DELETE FROM election WHERE id = ?');
		$qr->execute(array($id));

		$this->_Remove($id);
		return TRUE;
	}
}