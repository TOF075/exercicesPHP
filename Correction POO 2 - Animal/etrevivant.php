<?php 

abstract class EtreVivant {
	protected $nom;
	protected $sexe;
	protected $couleur;
	
	public function __construct($nom, $sexe, $couleur) {
		$this->nom = $nom;
		$this->sexe = $sexe;
		$this->couleur = $couleur;
	}
	
	public abstract function vocaliser();

}


 ?>