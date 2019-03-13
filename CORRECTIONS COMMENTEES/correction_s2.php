<?php 

	/**
	 EXERCICE 1 :

	 Ecrire un script PHP qui affiche le Pays ET la Capitale sur chaque ligne.
	 Il faut afficher cette liste dans l'ordre alphabétique coissant.

	$array = array( "France" => "Paris", "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
		"Finland"=>"Helsinki", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", 
		"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm") ;

	Exemple :
		La capitale de France est Paris 
		La capitale de Italie est Rome
		La capitale de Luxembourg est Luxembourg
	 **/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCICE 1 </p>';
	
	$array = array( "France" => "Paris", "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
		"Finland"=>"Helsinki", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", 
		"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm");

	ksort($array);

	foreach ($array as $key => $value) {
		echo 'La capitale de ' . $key . ' est ' . $value . '<br>';
	}

	/**
	EXERCICE 2 :

	Jean va faire ses courses. Il a noté le nom et le prix de tous les articles dans son caddie.
	Nous avons donc le tableau qui contient sa liste de course et le prix associé de chaque article :
	    $array = array("Salade"=>"1.03","Tomate"=>"2.3","Oignon"=>"1.85","Chou rouge"=>"0.85")

	Ecrire un script PHP qui va trié le tableau associatif :
	    a) Trié par valeur et ordre croissant
	    b) Trié par clé et ordre croissant
	    c) Trié par valeur et ordre décroissant
	    d) Trié par clé et ordre décroissant

	> Le but est de chercher sur le net pour décroissant.

	**/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCICE 2 </p>';

	$array = array("Salade"=>"1.03","Tomate"=>"2.3","Oignon"=>"1.85","Chou rouge"=>"0.85");

	echo 'a) Trié par valeur et ordre croissant : ';
	asort($array);
	print_r($array);

	echo '<br><br>';

	echo 'b) Trié par clé et ordre croissant : ';
	ksort($array);
	print_r($array);

	echo '<br><br>';
	
	echo 'c) Trié par valeur et ordre décroissant : ';
	arsort($array);
	print_r($array);

	echo '<br><br>';

	echo 'd) Trié par clé et ordre décroissant : ';
	krsort($array);
	print_r($array);


	/**
	EXERCICE 3 :

	Reprenons le tableau des courses de Jean. Avant de passer en caisse, il aimerait connaitre le prix total de ses courses.
	Ecrire un script PHP qui va calculer le prix total de ses courses. Il faut utiliser une boucle.

	**/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCICE 3 </p>';

	$array = array("Salade"=>"1.03","Tomate"=>"2.3","Oignon"=>"1.85","Chou rouge"=>"0.85");
	$total = 0;

	foreach ($array as $element) {
		$total += $element;
	}

	echo "Le total des courses de Jean est : " . $total;

	/**
	EXERCICE 4 :

	Ecrire un script PHP qui va écrire un nombre sur deux, de 0 à 20.
	Ecrire le script avec deux types de boucle : for et while.
		> Le but est de savoir utiliser les deux boucles.

	**/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCICE 4 </p>';

	echo 'Avec une boucle For : <br>';
	for ($i=0; $i < 21; $i+=2) { 
		echo $i . " / ";
	}

	echo '<br> Avec une boucle While : <br>';
	$i = 0;
	while ($i < 21) {
		echo $i . " / ";
		$i += 2;
	}

	/**
	EXERCICE 5 :

	Nous avons un tableau qui associe une personne et sa croissance :
	    $array = array("Marie" => "Adulte", "Stephane" => "Enfant", "Alexandre" => "Adulte", "Julie" => "Adolescent", "Sarah" => "Adulte", "Remi" => "Enfant")

	Ecrire un script PHP qui affiche les adultes et les enfants (pas les adolescent) :
	    Les adultes sont : Marie, Alexandre, Sarah.
	    Les enfants sont : Stephane, Remi.

	**/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCICE 5 </p>';

	$array = array("Marie" => "Adulte", "Stephane" => "Enfant", "Alexandre" => "Adulte", "Julie" => "Adolescent", "Sarah" => "Adulte", "Remi" => "Enfant");

	$adultes = "Les adultes sont :";
	$enfants = "Les enfants sont :";

	foreach ($array as $name => $age) {
		if ($age == "Adulte") {
			$adultes .= ' ' . $name . ',' ;
		} elseif ($age == "Enfant") {
			$enfants .= ' ' . $name . ',';
		}
	}

	echo $adultes . '<br>';
	echo $enfants;

	/**
	 EXERCICE 6 :

	 Utiliser une boucle pour créer un tableau.
	 Ce tableau contiendra la table de multiplication de 2.
	 Pas besoin de faire toute la table de multiplication, faites uniquement de 1 à 10.

	 **/

	echo '<hr>';
	echo '<p> EXERCICE 6 </p>';
	
	$start = 1;
	$times = 2;
	$answer = array();

	for ($start; $start < 11; $start++) {
		$answer[$start] = $start * $times;
	}
	print_r($answer);

	echo '<hr><hr>';

	/**
	EXERCICE 7 :

	Ecrire un script PHP qui affiche ce motif :

		1 : 1 : * 
		2 : 1-2 : * * 
		3 : 1-3 : * * * 
		4 : 1-4 : * * * * 
		5 : 1-5 : * * * * * 

	Pour cela, utiliser plusieurs boucles imbriquées.

	**/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCICE 7 </p>';

	for ($i=1; $i <= 5; $i++) { 
		for ($j=1; $j <= $i; $j++) { 
			echo "*";
		}

		echo "<br>";
	}

	/**
	EXERCICE 8 :

	Ecrire un script PHP qui affiche ce motif :

		* 
		* * 
		* * * 
		* * * * 
		* * * * * 
		* * * * * 
		* * * * 
		* * * 
		* * 
		* 

	Pour cela, utiliser plusieurs boucles imbriquées.

	**/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCICE 8 </p>';

	for ($i=1; $i <= 5; $i++) { 
		for ($j=1; $j <= $i; $j++) { 
			echo "*";
		}
		echo "<br>";
	}

	// Reverse
	for ($i=6; $i >= 1; $i--) { 
		for ($j=1; $j < $i; $j++) { 
			echo "*";
		}
		echo "<br>";
	}

	/**
	EXERCICE 9 :

	Nous avons déjà deux tableaux existant :
    $array1 = array(array("Eminem", "IAM"), array("Madonna", "Katy Perry"), array("Pink Floyd", "AC/DC"));
    $array2 = array("Rap", "Pop", "Rock"); 

	Ecrire un script PHP qui fusionne les deux tableaux pour obtenir un seul tableau comme celui-ci :

    $array3 =  array (      
        "Rap" => Array (          
            [0] => "Eminem",              
            [1] => "IAM"    
        ),        
        "Pop" => Array (          
            [0] => "Madonna",              
            [1] => "Katy Perry"    
        ),
        "Rock" => Array (          
            [0] => "Pink Floyd",              
            [1] => "AC/DC"    
        )            
    )

	**/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCICE 9 </p>';

	$array1 = array(array("Eminem", "IAM"), array("Madonna", "Katy Perry"), array("Pink Floyd", "AC/DC"));
    $array2 = array("Rap", "Pop", "Rock"); 

    echo 'Le premier tableau : ';
    print_r($array1);

    echo '<br><br>';

    echo 'Le deuxieme tableau : ';
    print_r($array2);

    $array3 = array();

    // Première façon
    for ($i=0; $i < count($array2); $i++) { 
    	$category = $array2[$i];
    	$array3[$category] = array($array1[$i][0], $array1[$i][1]);
    }

    // Deuxième façon
    /*$i = 0;
    foreach ($array2 as $element) {
    	$array3[$element] = array($array1[$i][0], $array1[$i][1]);
    	$i++;
    }*/

    echo '<br><br>';
    echo 'La fusion des deux tableaux : ';
    print_r($array3);

    /**

	EXERCICE 10 :

	Nous avons un tableau de transactions bancaires, qui indique le solde créditeur et débiteur de chaque personne.
	Pour chaque personne, calculez la valeur réelle de leur compte/transaction et ajoutez la en tant que nouvelle "clé"=>"valeur" au tableau.
	
	**/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCICE 10 </p>';

	$transactions = array(
	    "Marie" => array(
	        "debit"=>6,
	        "credit"=>9
	    ),
	    "Julien" => array(
	        "debit"=>21,
	        "credit"=>19
	    ),
	    "Sophie" => array(
	        "debit"=>15,
	        "credit"=>14
	    ),
	    "John" => array(
	        "debit"=>10,
	        "credit"=>14
	    )
	);

	foreach ($transactions as $key => $value) {
		$amount = $value['credit'] - $value['debit'];
		$transactions[$key]['amount'] = $amount;
	}

	echo 'Le nouveau tableau : ';
	print_r($transactions);

    /**

	EXERCICE 11 :

	Nous avons un tableau qui contient les 10 plus grandes villes de France.
	Pour chaque ville, nous avons le nombre d'habitant et la superficie (en km).

	Pour chaque ville, calculer la densité d’habitants au km2 et rajouter cette valeur en tant que nouvelle "clé"/"valeur".

	
	**/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCICE 11 </p>';

	$cities = array(
	    "Paris" => array(
	        "people"=>2244621,
	        "surface"=>105.4
	    ),
	    "Marseille" => array(
	        "people"=>852516,
	        "surface"=>240.6
	    ),
	    "Lyon" => array(
	        "people"=>496343,
	        "surface"=>47.87
	    ),
	    "Toulouse" => array(
	        "people"=>453317,
	        "surface"=>118.3
	    ),
	    "Nice" => array(
	        "people"=>343629,
	        "surface"=>71.92
	    ),
	    "Nantes" => array(
	        "people"=>291604,
	        "surface"=>65.19
	    ),
	    "Strasbourg" => array(
	        "people"=>274394,
	        "surface"=>78.26
	    ),
	    "Montpellier" => array(
	        "people"=>2244621,
	        "surface"=>105.4
	    ),
	    "Bordeaux" => array(
	        "people"=>241287,
	        "surface"=>49.36
	    ),
	    "Rennes" => array(
	        "people"=>209860,
	        "surface"=>50.39
	    ),
	);

	foreach ($cities as $key => $value) {
		$density = $value['people'] / $value['surface'];
		$cities[$key]['density'] = $density;
	}

	echo 'Le nouveau tableau : ';
	print_r($cities);

	/**
	EXERCICE 12 :

	Nous avons un tableau d'entier, non trié, avec tous les nombres de 1 à 50 MAIS il manque un élément (le tableau est donc de taille 49).
	L'objectif est de retrouver l’élément qui manque (le nombre manquant).
	Cependant, vous avez 2 contraintes:
	- Vous n'avez le droit de parcourir le tableau qu'une seule fois!
	- Vous n'avez le droit d'utiliser qu'une seule variable!

	**/

	echo '<hr>';
	echo '<p style="font-weight: 900"> EXERCICE 12 </p>';

	/* Je setup mon tableau */
	$array = array(5, 1, 3, 2, 9, 6, 8, 4, 10);

	// Nombre manquant
	$manquant = 0; 

	/* Le principe : 
	* 1 - Boucler pour faire l'addition des nombres de 1 à X.
		X étant le nombre d'éléments du tableau + 1 (celui qui manque).
		On sauvegarde le résultat dans une variable $manquant

	* 2 - Boucler sur le tableau en lui même.
		A chaque itération, enlever le nombre en cours du résultat $manquant
		A la fin, la variable contient le reste, le chiffre manquant.
	*/

	// Boucle qui fait l'addition des nombres de 1 à X.
	for ($i = 1; $i <= count($array)+1; $i++) {
		$manquant += $i;
	}

    foreach ($array as $key => $value) {
    	$manquant -= $value;
    };

    echo "Le nombre manquant est : " . $manquant;
?>