
<?php //				$i = valeur initiale !
//Exercice 1.1
$fruits = ["Apple","Strawberry","Pineapple","Lemon"];
echo $fruits[1]."<hr><br>";
//////////////////////////////////////////////////////////////////////////////
//Exercice 1.2
sort($fruits);
echo $fruits[1]."<hr><br>";
//////////////////////////////////////////////////////////////////////////////
//Exercice 1.3
$stock =	[	"T-shirt" 		=> 20 ,
				"Casquettes"	=> 10,
				"Chaussures"	=> 5
			];
echo "Le stock de casquettes est : ".$stock["Casquettes"].".<hr><br>";
//////////////////////////////////////////////////////////////////////////////
//Exercice 1.4
$stock["Casquettes"] += 5;
$stock["Chaussures"] += 20;
echo "Le nouveau stock de chaussures est : ".$stock["Chaussures"].".<hr><br>";
//////////////////////////////////////////////////////////////////////////////
//Exercice 1.5
$contacts = array(	"Johnny" => array("Tel" => "0677777777", "Email" =>"johnny@gmail.com"),							"Michael"=> array("Tel" => "0606060606", "Email" => "mj@gmail.com"),
					"Emmanuel"=> array("Tel" => "0610101010", "Email" => "manu@gmail.com"));
echo "Michael :".$contacts["Michael"]["Tel"].".<hr><br>";
//////////////////////////////////////////////////////////////////////////////
//Exercice 1.6
 // Je déclare mon tableau de films
    $movies[0] = 'Pirates des Caraibes';
    $movies[1] = 'Star Wars';
    $movies[2] = 'Fight Club';

    // Le bout de code rajouté : essayez de le comprendre !
    foreach($movies as $mov) {
  //      echo "Le film est $mov <br>";
    }
    //   echo "La fonction parcourt le tableau et associée au \"echo\" en affiche l'intégralité des valeurs<hr><br>";
//////////////////////////////////////////////////////////////////////////////
//Exercice 2.1
$tab = array();
for($i=0;$i<100;$i++)
{
    $tab[$i] = "Je suis l'élément #".$i;
};
//////////////////////////////////////////////////////////////////////////////
//Exercice 2.2

for($i=0;$i<51;$i += 2)
{
    echo $i."<br>";
}
echo "<hr>";
//////////////////////////////////////////////////////////////////////////////
//Exercie 2.3
$i = 0;
while($i<51)
{
    if($i % 2 == 0)
    {
        echo $i."<br>";

    }
    $i++;
}

echo "<hr>";
//////////////////////////////////////////////////////////////////////////////
//Exercice 2.4
$tableau = array();

for ($i=0;$i<11;$i++)
{
$tableau["2 * ".$i] = $i*2;
}
print_r($tableau);
echo "<br>";
echo "<hr>";

//////////////////////////////////////////////////////////////////////////////
//Exercice 3.1

$array = array( "France" => "Paris", "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
  "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",  "Finland"=>"Helsinki",
  "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
  "Greece" => "Athens",  "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
  "Portugal"=>"Lisbon","Peru" => "Lima","Spain"=>"Madrid","Brasil" => "Rio de Janeiro",
	"Sweden"=>"Stockholm");

foreach($array as $key => $value){
    echo "The capital of ".$key." is ".$value.". <br>";
}
echo "<br><hr>";

//////////////////////////////////////////////////////////////////////////////
//Exercice 3.2

$array = array("Salade"=>"1.03","Tomate"=>"2.3","Oignon"=>"1.85","Chou rouge"=>"0.85");

//a)
asort($array); print_r($array); echo "<br>";
//b)
ksort($array); print_r($array); echo "<br>";
//c)
arsort($array); print_r($array); echo "<br>";
//d)
krsort($array); print_r($array); echo "<br>";

//////////////////////////////////////////////////////////////////////////////
//Exercice 3.3
$total = 0;
foreach($array as $key => $value){
    $total += $value;
}
echo $total."<br><hr>";

//////////////////////////////////////////////////////////////////////////////
//Exercice 3.4

for($i=0;$i<21;$i+=2)
    echo $i." ";
echo "<br>";
$i = 0;
while($i<21)
{
    echo $i." ";
    $i += 2;
}
echo "<br><hr>";

//////////////////////////////////////////////////////////////////////////////
//Exercice 3.5

$array = array("Marie" => "Adulte", "Stephane" => "Enfant", "Alexandre" => "Adulte", "Julie" => "Adolescent", "Sarah" => "Adulte", "Remi" => "Enfant");

$adult = "Les adultes sont : ";
$kid = "Les enfants sont : ";

foreach ($array as $key => $value) {
    if($value == "Adulte")
    $adult = $adult.$key.", ";
    if($value == "Enfant")
    $kid = $kid.$key.", ";
}
echo $adult."<br>".$kid."<br>";
echo "<hr>";
//////////////////////////////////////////////////////////////////////////////
//Exercice 3.6 Demie étoile

$stars_nb = 5;

for ($i = 0; $i < 6; $i++){
    for ($j = 0; $j < $i; $j++){
       echo "*";
    }
    echo"<br>";
}
echo "<hr>";

//////////////////////////////////////////////////////////////////////////////
//Exercice 3.7 etoiles

$stars_nb = 5;
$stars_nb2 = 0;
for ($i = 0; $i < $stars_nb; $i++){
   for ($j = 0; $j < $i; $j++){
  echo "*";
   }
   echo"<br>";
}
for ($i = 5; $i > $stars_nb2; $i-=1){
   for ($j = $i; $j > 0; $j-=1){
      echo "*";
}
   echo"<br>";
}
    echo "<hr>";

//////////////////////////////////////////////////////////////////////////////
//Exercice 3.8

$array1 = array(array("Eminem", "IAM"), array("Madonna", "Katy Perry"), array("Pink Floyd", "AC/DC"));
$array2 = array("Rap", "Pop", "Rock");
//$array3 : array_combine($array2, $array1);

for($i=0;$i<3;$i++)
   $array3[$array2[$i]] = $array1[$i];
print_r($array3);
    echo "<hr>";

/////////////////////////////////////////////////////////////////////////////

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
foreach ($transactions as $key => $tableau) {
    $solde = $tableau["credit"] - $tableau["debit"];
    $transactions[$key]["solde"] = $solde;
}

print_r($transactions);

echo "<hr>";

/////////////////////////////////////////////////////////////////////////////

//$file_content = "movies.txt";
//$file_content = readfile ("movies.txt");
//echo $file_content;

 //syntaxe// fopen ($file_name, $mode);

				$file_handle = fopen ("movies.txt", "r");
				echo $file_handle;												// Sert à ouvrir le fichier sans
				fclose ($file_handle);										// le lire.



echo "<hr>";

/////////////////////////////////////////////////////////////////////////////


				$file_handle = fopen ("movies.txt", "r");

				while (!feof($file_handle)) {							// FEOF File End Of File

							$line_of_text = fgets($file_handle);
							echo $line_of_text . "<br>";
				}
				fclose ($file_handle);

echo "<hr>";

/////////////////////////////////////////////////////////////////////////////


				if (file_exists("moviiiiies.txt") ) {
					echo "file exist";
				}

				else {
					echo "file doesn't exist";
				}


echo "<hr>";

/////////////////////////////////////////////////////////////////////////////

				$file_handle = fopen("test_file.txt", "w");
				$file_content = "Hello World !\r\nHow are you ?";

				fwrite($file_handle, $file_content);		//créer un fichier qui contient
				fclose($file_handle);										// "hello world"

				echo "First file created !";

echo "<hr>";

/////////////////////////////////////////////////////////////////////////////

				copy('movies.txt', 'movies_copy.txt');		// copier un fichier

				echo "File successfully copied to 'movies_copy.txt'";

				echo "<hr>";

/////////////////////////////////////////////////////////////////////////////

				unlink('movies_copy.txt');		// Supprimer un fichier

				echo "file deleted !";

				echo "<hr>";

/////////////////////////////////////////////////////////////////////////////

				$file_handle = fopen ("movies.txt", "r");
				$array = array();
echo "salut";
				while (!feof($file_handle)) {

						$line_of_text = fgets($file_handle);
						$parts = explode('=', $line_of_text);

						$film = $parts[0];
						$realisateur = $parts[1];

						$array[$film] = array($realisateur);
				}
				fclose($file_handle);

				echo "<pre>";
				print_r($array);
				echo "</pre>";

				echo "<hr>";

/////////////////////////////////////////////////////////////////////////////

 				$handle = opendir('./fichier_test');		//Ouvrir le dossier
				while($entry = readdir($handle)) {
					echo $entry . '<br>';
				}																				// lire dans le dossier
				closedir($handle);											// Toujours fermer !
				echo "<hr>";

/////////////////////////////////////////////////////////////////////////////

				$text = 'on écrit tout en majuscule avec "strtoupper"';
				$text = mb_strtoupper($text); //Mettre tout en majuscule
																			// Lower = tout mettre en minuscule
				echo $text;

				echo "<hr>";

/////////////////////////////////////////////////////////////////////////////

				$text = 'on met des majuscules à chaques mots avec "ucwords"';
				$text = ucwords($text); //Majuscule à chaques mots

				echo $text;

				echo "<hr>";

/////////////////////////////////////////////////////////////////////////////

				$text = 'on met a le début en majuscule avec "ucfirst"';
				$text = ucfirst($text); //Majuscule au début seulement.

				echo $text;

				echo "<hr>";

/////////////////////////////////////////////////////////////////////////////

					$text = "on veut compter les caractères de la phrase";
					echo $text;
					$count = strlen($text);					// sert à compter les caractères
					echo " <- il y a " . $count . " caractères.";

					echo "<hr>";

	/////////////////////////////////////////////////////////////////////////////

					$mail = " lucasmantoani@gmail.com ";
					$mail_valide = trim($mail);		// Sert à enlever les espaces AU Début et à la Fin
																				// d'une chaine de caractères

					echo $mail_valide;

					echo "<hr>";

	/////////////////////////////////////////////////////////////////////////////

					$mail = " lucasmantoani@gmail.com ";

					echo $mail;
					$position = strpos($mail, '@');		// Sert à chercher le symbole

					echo 'le caractère est en position ' . $position;

					echo "<hr>";

	/////////////////////////////////////////////////////////////////////////////

					$ingredients = array ("salade","tomate","oignon","piment");
					// Implode sert à transformer un tableau en chaine de caractères
					$kebab = implode(',', $ingredients);

					echo $kebab;

					echo "<hr>";

	/////////////////////////////////////////////////////////////////////////////


					$kebab = "salade, tomates, oignon, piment";
					$ingredients = explode(",", $kebab);
					// Explode sert à transformer une chaine en tableau.
					echo "<pre>";
					print_r($ingredients);
					echo "</pre>";

					echo "<hr>";

	/////////////////////////////////////////////////////////////////////////////

					echo str_replace("world", "Simon", "Hello world");
					// Sert à remplacer un mot par un autre,
					// ici world sera remplacé par simon.

					echo "<hr>";

	/////////////////////////////////////////////////////////////////////////////
					// EXERCICE 1

					$mail = "simon@bertrand.com";							// Objectif = vérifier la présence du @
					$position = strpos($mail, '@');

					if($position == false) {									//Si position est égale à false
																										// car strpos renvoie toujours false
							echo "invalid mail";									// ecrire "mail invalide"
					}

					else {																		// sinon, mail valide + donner la position.
						echo "valid email, symbol found at position  $position";
					}

					echo "<hr>";

	/////////////////////////////////////////////////////////////////////////////
					// EXERCICE 2
					$sentence = "On a mis random à la place du mot initial";
					echo str_replace("random","beautiful",$sentence);
					// Utiliser $sentence = str_replace pour remplacer définivitement.

					echo "<hr>";

///////////////////////////////////////////////////////////////////////////////
					// EXERCICE 4 = Afficher le dernier mot d'une phrase
					$sentence = "This is a random sentence";
					$resultat = explode(" ", $sentence); 	// Explode sert à transformer une chaine en tableau.
					$nombre_de_valeurs = count($resultat);

					echo $resultat [$nombre_de_valeurs-1];
