<?php 

	function findInArray($tableau, $str) {
		$bool = 0;

		foreach ($tableau as $value) {
			if(trim($value) == trim($str)) {
				$bool = 1;
				break;
			}
		}

		return $bool;
	}

	$firstname = 'firstname';
	$lastname = 'lastname';

	$users = array("johnny hallyday", "simon bertrand", "tom hanks", "toto tata", "john");

	if(isset($_POST['connexion'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$fullname = $firstname . ' ' . $lastname;

		if(findInArray($users, $fullname) == 1) {
			echo "Bienvenue sur le site";
		} else {
			echo "Vous n'êtes pas autorisé.";
		}
	}


 ?>


 <form method="POST" action="correction_session9.php">
 	
 	<input type="text" name="firstname" value="<?php echo $firstname; ?>">
 	<input type="text" name="lastname" value="<?php echo $lastname; ?>">

 	<input type="submit" name="connexion" value="connexion">
 </form>