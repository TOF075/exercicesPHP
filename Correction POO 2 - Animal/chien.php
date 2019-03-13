<?php 

class Chien extends Animal {
	
	public function __construct($nom, $sexe, $couleur, $nbPattes) {
		parent::__construct($nom, $sexe, $couleur, $nbPattes);
	}

	public function vocaliser() {
		return "woof, woof";
	}
}

?>