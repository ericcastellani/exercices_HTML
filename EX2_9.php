<?php
echo "Exercice 9 partie 2 PHP <br>";

// definition des variables

$nomsRadio = ["Masculin","Féminin","Autre"];

function afficherRadio($nomsRadio){
    $result = "";
    foreach($nomsRadio as $genre){
        $result .="<br>
        <input type ='radio' name = 'navig' value = '$genre'>
        <label for ='r'>$genre</label>";

    }
    return $result;
}
echo afficherRadio($nomsRadio);
