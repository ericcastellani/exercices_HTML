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
$texte = "prenom : $prenom\n";
$texte = stripslashes($texte);

//DESTINATAIRE ET OBJET DU MESSAGE

$destinataire = "ecastellani@outlook.fr";
$objet = "Formulaire d'inscription";

//EN-TETE MASQUEE

$headers = "content-type : text/plain;charset-uft-8";

// ENVOI DU MESSAGE PUIS CONFIRMATION SUR LA PAGE

$envoi_bon = mail($destinataire, $objet, $texte, $headers);
if($envoi_bon){echo "Envoi OK";}
else {echo "Erreur";}
