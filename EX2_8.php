<?php
echo "Exercice 8 partie 2 PHP <br>";
//<source><c>

// definition des variables

$url="http://my.mobirise.com/data/userpic/764.jpg";
$nbre = 4;

function repeterImage ($url,$nbre){
    for ($i=1;$i<=$nbre;$i++){
    echo "<img src ='$url'>";  // permet d'afficher image dans php
    }
}
echo repeterImage($url,$nbre);
