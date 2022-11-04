<?php
echo "Exercice 11 partie 2 PHP <br><br>";

$date = "2018-02-24";

echo $date;echo"<br>";

/* CHANGEMENT DE FORMAT

$date2 = strtotime($date);
$newdate = date("d/m/Y", $date2);

$jour  = date("l",$date2);
$jour2 = date("j",$date2);
$mois =date("F",$date2);
$annee =date("Y",$date2);
// DETERMINATION DU JOUR DE LA SEMAINE
echo $jour." le ".$jour2;
echo $mois." ". $annee."<br>";*/

//CONVERTIR UNE DATE EN FRANCAIS

 function dateToFrench($date, $format) 
{
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date) ) ) );
}
echo dateToFrench($date,"l")." le ".dateToFrench($date," j F Y");
