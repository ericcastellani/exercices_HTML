<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="styleEX2_13.css">
	<title>EXERCICE 13 PARTIE 2 PHP</title>
</head>
<body>
	<div id="container">
        <div class = "card">
            <div class = "card_test">

            </div>
<?php

require "marques.php";

// instanciation de 2 objets de la classe voiture 
$v1 = new Voitures("Peugeot", "408",5,0);
$v2 = new Voitures("Citroen", "C4",3,0);
            echo"-->". $v1->getMarque()." ".$v1->getModele()."  ".$v1->getNbPortes()." portes <br>";
            echo"-->". $v2->getMarque()." ".$v2->getModele().".  ".$v2->getNbPortes()." portes<br>";


    

echo"-->". $v1->getMarque()." ".$v1->getModele()."  ".$v1->getNbPortes()." portes <br>";
echo"-->". $v2->getMarque()." ".$v2->getModele()."  ".$v2->getNbPortes()." portes<br>";
echo"<br>";
echo"-->Le Véhicule ".$v1->getMarque()." ".$v1->getModele()." démarre ";
echo"<br>";
$v1->demarrer();// véhicule $v1 démarre
echo "<h5> = Statut :" .$v1->getStatut()."</h5>";//affiche le statut après démarrage

echo"-->Le Véhicule ".$v1->getMarque()." ".$v1->getModele()." accélère de 50km/h <br>";
$vitesse = 50; // $vitesse = vitesse d'accélération
$v1->accelerer($vitesse);// véhicule $v1 accélère (de 50 )
echo "-->la vitesse actuelle de ".$v1->getMarque()." ".$v1->getModele()." est de <br>"."<h5>". $v1->getVitesseActuelle()."KM/H </h5><br>";

echo"-->Le Véhicule ".$v2->getMarque()." ".$v2->getModele()." démarre <br>";

$v2->demarrer(); // véhicule $v2 démarre
echo "<h5> = Statut :" .$v2->getStatut()."</h5>";

$v2->stopper();// véhicule $v2 s'arrête
echo"-->Le Véhicule ".$v2->getMarque()." ".$v2->getModele()." s'arrête <br>";
echo "<h5> = Statut :" .$v2->getStatut()."</h5>";
echo "<h5> = Vitesse actuelle :".$v2->getvitesseActuelle()."</h5>";
echo"-->Le véhicule ".$v2->getMarque()." ".$v2->getModele()." veut accélérer de 20<br>";
echo"<br>";
$vitesse = 20;
$v2->accelerer($vitesse);
echo"<h5> = Vitesse actuelle : ".$v2->getVitesseActuelle()."</h5><br>";

echo"------------------------------------------------------------------<br>";
echo"<h4>La vitesse du véhicule ".$v1->getMarque()." ".$v1->getModele()." est de : ". $v1->getVitesseActuelle()." km/ h</h4><br>";
echo"<h4>La vitesse du véhicule ".$v2->getMarque()." ".$v2->getModele()." est de : ". $v2->getVitesseActuelle()." km/ h</h4><br>";
echo"-------------------------------------------------------------------<br>";
echo"Infos véhicule 1 <br>";
echo"----------------------<br>";
echo "Nom et modèle du véhicule : ".$v1->getMarque()." ".$v1->getModele()."<br> ";
echo "Nombre de portes : ".$v1->getNbPortes()." <br>";
echo "Le véhicule ".$v1->getMarque()." est ".$v1->getStatut()." <br>";
echo "Sa vitesse actuelle est de : ".$v1->getVitesseActuelle()." km / h<br>";
echo "<br>";
echo"Infos véhicule 2 <br>";
echo"----------------------<br>";
echo "Nom et modèle du véhicule : ".$v2->getMarque()." ".$v2->getModele()."<br> ";
echo "Nombre de portes : ".$v2->getNbPortes()." <br>";
echo "Le véhicule ".$v2->getMarque()." est ".$v2->getStatut()." <br>";
echo "Sa vitesse actuelle est de : ".$v2->getVitesseActuelle()." km / h<br>";
echo "<br>";

echo "<h3>--> test DECELERER</h3><br>";
echo "<br>";
echo "--> le véhicule ".$v1->getMarque()." ".$v1->getModele()." veut décélérer de 60 <br>";
$vitesse = 60;
$v1->ralentir($vitesse);
echo $v1->getVitesseActuelle()." <br>";
echo "--> le véhicule ".$v1->getMarque()." ".$v1->getModele()." veut décélérer de 40 <br>";
$vitesse =40;
$v1->ralentir($vitesse);
echo "Le véhicule ".$v1->getMarque()." roule à ". $v1->getVitesseActuelle()." km / h<br>";
echo "--> Le véhicule ".$v2->getMarque()." veut décélérer de 10 <br>";
$v2->ralentir($vitesse);
$vitesse = 10;
echo $v2->getVitesseActuelle()." <br>";