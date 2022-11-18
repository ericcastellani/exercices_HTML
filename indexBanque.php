<?php

require "comptebancaire.php";
require "titulaire.php";
// Déclaration des variables

$EricCastellani = new Titulaire("CASTELLANI","Eric","1967-11-01","Compte bancaire");//toujour indiquer la date de naissance en annee- mois- jour 
$BiduleMachin = new Titulaire("BIDULE","Machin","1900-01-01","compte bancaire");
// Affichage attributs titulaire

echo "<h4> Affichage renseignements titulaire</h4><br>";
echo "$EricCastellani <br>"; 
echo $EricCastellani->calculAge()."<br>";

// Affichage var_dump

echo"<br>";
var_dump($EricCastellani);
echo"<br>";
$Cpte1 = new CompteBancaire("compte courant",0,"€",$EricCastellani);
$cpte2 = new CompteBancaire("Livret A",100,"€",$EricCastellani);
$cpte3 = new CompteBancaire("compte en $",1000,"$",$EricCastellani);
$cpte4 = new CompteBancaire("compte postal",500,"€",$BiduleMachin);
$cpte5= new comptebancaire("compte courant",327.5,"€",$BiduleMachin);

echo $EricCastellani->afficherCompteBancaire()."<br>";
var_dump($EricCastellani)."<br>";
echo "<br><br>";

echo "$BiduleMachin <br>";
echo $BiduleMachin->calculAge()."<br>";
echo $BiduleMachin->afficherCompteBancaire();


//affichage créditer compte 

echo "<h4> Créditer compte courant de Eric CASTELLANI pour 50 €</h4><br>";
$montant = 50;
 $Cpte1->CrediterCompte($montant);
 echo "$EricCastellani<br>";
echo $EricCastellani->afficherCompteBancaire();

//affichage débiter compte


