<?php
echo "Exercice 10 partie 2 PHP <br>";

// RECUPERATION DES DONNEES DU  FORMULAIRE D'INSCRIPTION

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adressemail = $_POST["adressemail"];
$ville = $_POST["ville"];
$sexe = $_POST["sexe"];
$metier = $_POST["metier"];

// TEXTE A ENVOYER

$texte = "Nom : $nom\n";


