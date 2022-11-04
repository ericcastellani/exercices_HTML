<?php
echo "Exercice 11 partie 2 PHP <br>";

$date = "2018-02-23";

echo $date;echo"<br>";

// CHANGEMENT DE FORMAT

$date2 = strtotime($date);
$newdate = date("d/m/Y", $date2);
echo $newdate;

// AJOUT DU JOUR DE LA SEMAINE

