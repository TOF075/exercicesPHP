<?php 

class Chat extends Animal {
	
	public function __construct($nom, $sexe, $couleur, $nbPattes){
		parent::__construct($nom, $sexe, $couleur, $nbPattes);
	}

	public function vocaliser() {
		return "Miaowww !";
	}
}

?>