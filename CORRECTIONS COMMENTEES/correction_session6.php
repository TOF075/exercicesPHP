<?php 

	/** MANIPULATION SUR LES CHAINES DE CARACTERES **/

	/**
	 EXERCICE 1 :

		Ecrire un script PHP qui vérifie si une adresse email contient bien le symbole @.
		Si oui, afficher : "Valid email, symbol found at position X". Sinon afficher "Invalid email".

		Pour faire vos tests, vous pouvez créer une variable "bidon" du type $mail = "simon@gmail.com";
	 **/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCICE 1 </p>';
	
	$mail = "simon@gmail.com";
	$pos = strpos($mail, '@');

	if($pos === false) {
		echo "Invalid email";
	} else {
		echo "Valid email, symbol found at position " . $pos;
	}

	/**
	 EXERCICE 2 :

		Ecrire un script PHP qui supprime tous les (slashs) / de cette chaine de caractère :
		$movies = "/Star Wars/Fight Club/Intouchables/Night Call//";
	 **/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCICE 2 </p>';
	
	$movies = "/Star Wars/Fight Club/Intouchables/Night Call//";
	$movies = str_replace('/', ' ', $movies);

	echo $movies;

	/**
	 EXERCICE 3 :

		Ecrire un script PHP qui remplace le mot "random" par le mot "beautiful" dans cette phrase :

		$sentence = "This is a random sentence";
	 **/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCICE 3 </p>';
	
	$sentence = "This is a random sentence";
	$sentence = str_replace('random', 'beautiful', $sentence);

	echo $sentence;

	/**
	 EXERCICE 4 :

		Ecrire un script PHP qui affiche le dernier mot d'une phrase en utilisant 2 fonctions : 
			 explode() et count()
		
		Vous pouvez utiliser la phrase précédente pour tester : $sentence = "This is a random sentence";
	 **/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCICE 4 </p>';
	
	// Je déclare ma phrase
	$sentence = "This is a random sentence";

	// Je transforme ma string en array (tableau)
	$tab = explode(' ', $sentence);

	// Ensuite je compte combien il y'a d'éléments dans mon tableau
	// Le nombre d'éléments est en réalité le nombre de mots
	$nb_mots = count($tab);

	/* Je connais le nombre de mots, je connais donc la position de mon dernier élément (mot) dans mon tableau
	* En effet, souvenez vous qu'un tableau commence toujours à 0 !
	* La position du dernier mot est donc le nombre d'élément moins 1 
	*/
	echo "Il y'a " . $nb_mots . " mots dans mon tableau.<br>";
	echo "La position de mon dernier element (mot) est donc la position : " . ($nb_mots - 1) . "<br>";

	// J'affiche maintenant mon dernier mot de mon tableau
	echo "Mon dernier mot : " . $tab[$nb_mots - 1];

?>