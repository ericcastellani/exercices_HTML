<?php

require "comptebancaire.php";
require "titulaire.php";

$EricCastellani = new Titulaire("CASTELLANI","Eric","01-11-1967","Compte bancaire");

echo $EricCastellani;

$Cpte1 = new CompteBancaire("compte courant",0,"€",$EricCastellani);
$cpte2 = new CompteBancaire("Livret A",100,"€",$EricCastellani);