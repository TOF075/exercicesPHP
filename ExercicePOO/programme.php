<?php
    require 'perso.php';

    $tof = new Personnage('tof', 'human');
    $bob = new Personnage('bob', 'orque');
    $ivi = new Personnage('ivi', 'elfe');

    var_dump($tof);
    var_dump($bob);
    var_dump($ivi);

    $epee = new Equipement('tof', 'epee');
    $massue = new Equipement('bob', 'orque');
    $tronconneuse = new PEquipement('ivi', 'elfe');

    var_dump($tof);
    var_dump($bob);
    var_dump($elfe);


?>





