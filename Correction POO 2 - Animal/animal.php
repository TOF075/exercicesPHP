<?php 

abstract class Animal extends EtreVivant {
	protected $nbPattes;
	
	public function __construct($nom, $sexe, $couleur, $nbPattes) {
		parent::__construct($nom, $sexe, $couleur);
		$this->nbPattes = $nbPattes;
	}
}


?>