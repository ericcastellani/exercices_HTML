<?php

require "marques.php";

// instanciation de 2 objets de la classe voiture 
$v1 = new Voitures("Peugeot", "408",5,0);
$v2 = new Voitures("Citroen", "C4",3,0);

 echo $v1->getMarque()." ".$v1->getModele()."  ".$v1->getNbPortes()." portes <br>";
 echo $v2->getMarque()." ".$v2->getModele()."  ".$v2->getNbPortes()." portes<br>";









