<?php
echo"Exercice 7 partie 2 php <br>";

$elements= ["Choix1","Choix2","Choix3"];

function genererCheckbox($elements){
    $result="";
    foreach ($elements as $choix){
        $result .="<br>
        <input id='$choix' name = '$choix' type='checkbox' value ='$choix'>
        <label for ='$choix'>$choix</label>";
    }
    return $result;
}
echo genererCheckbox ($elements);
