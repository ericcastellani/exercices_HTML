<?php

require "marques.php";

// instanciation de 2 objets de la classe voiture 
$v1 = new Voitures("Peugeot", "408",5,0);
$v2 = new Voitures("Citroen", "C4",3,0);

echo"-->". $v1->getMarque()." ".$v1->getModele()."  ".$v1->getNbPortes()." portes <br>";
echo"-->". $v2->getMarque()." ".$v2->getModele()."  ".$v2->getNbPortes()." portes<br>";
echo"<br>";
echo"-->Le Véhicule ".$v1->getMarque()." ".$v1->getModele()." démarre ";
echo"<br>";
$v1->demarrer();// véhicule $v1 démarre
echo "<h4> = Statut :" .$v1->getStatut()."</h4>";//affiche le statut après démarrage

echo"-->Le Véhicule ".$v1->getMarque()." ".$v1->getModele()." accélère de 50km/h <br>";
$vitesse = 50; // $vitesse = vitesse d'accélération
$v1->accelerer($vitesse);// véhicule $v1 accélère (de 50 )
echo "-->la vitesse actuelle de ".$v1->getMarque()." ".$v1->getModele()." est de <br>"."<h4>". $v1->getVitesseActuelle()."KM/H </h4><br>";

echo"-->Le Véhicule ".$v2->getMarque()." ".$v2->getModele()." démarre <br>";

$v2->demarrer(); // véhicule $v2 démarre
echo "<h4> = Statut :" .$v2->getStatut()."</h4>";

$v2->stopper();// véhicule $v2 s'arrête
echo"-->Le Véhicule ".$v2->getMarque()." ".$v2->getModele()." s'arrête <br>";
echo "<h4> = Statut :" .$v2->getStatut()."</h4>";
echo "<h4> = Vitesse actuelle :".$v2->getvitesseActuelle()."</h4>";
echo"-->Le véhicule ".$v2->getMarque()." ".$v2->getModele()." veut accélérer de 20<br>";
echo"<br>";
$vitesse = 20;
$v2->accelerer($vitesse);
echo"<h4> = Vitesse actuelle : ".$v2->getVitesseActuelle()."</h4><br>";

echo"------------------------------------------------------------------<br>";
echo"<h4>La vitesse du véhicule ".$v1->getMarque()." ".$v1->getModele()." est de : ". $v1->getVitesseActuelle()." km/ h</h4><br>";
echo"<h4>La vitesse du véhicule ".$v2->getMarque()." ".$v2->getModele()." est de : ". $v2->getVitesseActuelle()." km/ h</h4><br>";
