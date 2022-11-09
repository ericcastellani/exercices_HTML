<?php

require "voitures.php";


// instanciation de 2 objets de la classe voiture 

$v1 = new Voiture("Peugeot", "408");
$velec = new VoitureElec("BMW", "I3 150",100);

//Contrôle resultat

echo $v1->getMarque()." ".$v1->getModele()." <br>";
echo $velec->getMarque()." ".$velec->getModele()." Autonomie".$velec->getAutonomie()." kilomètres <br>";
