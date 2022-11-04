<?php
echo "Exercice 11 partie 2 PHP <br><br>";

$date = "2018-02-24";

echo $date;echo"<br>";

// CHANGEMENT DE FORMAT

$date2 = strtotime($date);
$newdate = date("d/m/Y", $date2);

$jour  = date("l",$date2);
$jour2 = date("j",$date2);
$mois =date("F",$date2);
$annee =date("Y",$date2);
// DETERMINATION DU JOUR DE LA SEMAINE
echo dateToFrench ("now","l j F Y");
echo $jour." le ".$jour2;
echo $mois." ". $annee;
//CONVERTIR UNE DATE EN FRANCAIS