<?php

require "comptebancaire.php";
require "titulaire.php";

$EricCastellani = new Titulaire("CASTELLANI","Eric","1967-11-01","Compte bancaire");//toujour indiquer la date de naissance en annee- mois- jour 
$BiduleMachin = new Titulaire("BIDULE","Machin","1900-01-01","compte bancaire");
echo "$EricCastellani <br>"; 
echo $EricCastellani->calculAge();


//var_dump($EricCastellani);


$Cpte1 = new CompteBancaire("compte courant",0,"€",$EricCastellani);
$cpte2 = new CompteBancaire("Livret A",100,"€",$EricCastellani);
$cpte3 = new CompteBancaire("compte en $",1000,"$",$EricCastellani);
$cpte4 = new CompteBancaire("compte postal",500,"€",$BiduleMachin);

echo $EricCastellani->afficherCompteBancaire();
//var_dump($EricCastellani);

echo "$BiduleMachin <br>";
echo $BiduleMachin->calculAge()."<br>";
echo $BiduleMachin->afficherCompteBancaire();



$montant = 50;
 $Cpte->CrediterCompte($montant);

