<?php
echo "Exercice 12 partie 2 PHP <br>";

$tableauValeurs =[true,"texte",10,25.369,array ("valeur1","valeur2")];

function afficherVardump($tableauValeurs){
    foreach ($tableauValeurs as $valeurs){echo"<br>";
        $result = var_dump($valeurs);
    }
    return $result;
    }
echo afficherVardump($tableauValeurs);
