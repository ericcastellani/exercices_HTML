<?php
echo "Exercice 8 partie 2 PHP <br>";
//<source><img src="http://my.mobirise.com/data/userpic/764.jpg" alt="petit chien">

// definition des variables

$url="http://my.mobirise.com/data/userpic/764.jpg";
$nbre = 4;

function repeterImage ($url,$nbre){$result="";
    foreach($nbre as $valeur) {
    $result .="
    img src='$url' alt=''";
    }
    return $result;
}

echo repeterImage($url,$nbre);
