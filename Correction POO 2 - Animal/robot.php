<?php 

class Robot implements Travailleur {
	private $idRobot;
	private $couleur;
	
	public function __construct($id, $couleur) {
		$this->idRobot = $id;
		$this->couleur = $couleur;
	}

	public function travailler() {
		return "Le robot numéro : " . $this->idRobot . " de couleur " . $this->couleur . " va travailler";
	}	
}

?>