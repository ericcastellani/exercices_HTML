<?php

require "voitures.php";
require "extends.php";

// instanciation de 2 objets de la classe voiture 

$v1 = new Voiture("Peugeot", "408");
$velec = new Voiture("BMW", "I3 150",100);

//Contrôle resultat

echo $v1->getMarque()." ".$v1->getModele()." <br>";
echo $velec->getMarque()." ".$velec->getModele().$velec->getAutonomie()."<br>";