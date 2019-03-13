<?php 

class Humain extends EtreVivant implements Travailleur {
	public function __construct($nom, $sexe, $couleur) {
		parent::__construct($nom, $sexe, $couleur);
	}

	public function vocaliser() {
		return "Je parle";
	}
	
	public function travailler() {
		return "L'Humain : " . $this->nom . " de couleur de cheveux : " . $this->couleur . " va travailler";
	}
}

 ?>