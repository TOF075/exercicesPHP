<?php 

	require 'etrevivant.php';
	require 'animal.php';
	require 'chien.php';
	require 'chat.php';
	require 'ITravailleur.php';
	require 'humain.php';
	require 'robot.php';

	//echo "coucou";
	$hum = new Humain("patrick", "homme", "blond");
	$rob = new Robot("Z321", "argenté");
	$chat = new Chat("Poupy", "femelle", "gris", 4);
	$chien = new Chien("Naoki", "femelle", "brun", 4);

	$travailleur = array($hum, $rob);
	$etrevivant = array($hum, $chat, $chien);

	//cycle son
	for ($i=0; $i < 10; $i++) { 
		$rand = rand(0, 2);
		echo $etrevivant[$rand]->vocaliser();
		echo "<br>";
	}

	echo "<hr>";
	//cycle travail
	for ($i=0; $i < 10; $i++) { 
		$rand = rand(0, 1);
		echo $travailleur[$rand]->travailler();
		echo "<br>";
	}

 ?>