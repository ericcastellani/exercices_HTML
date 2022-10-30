<h1> PHP n°2  Exercice n°1</h1>
<?php

// FONCTION CONERVSION D'UNE CHAINE DE CARACTERES
$phrase= "<< Mon texte en paramètre >>";

function convertirMajRouge ($phrase){
    if ($phrase == "<< Mon texte en paramètre >>"){echo "<p style = 'color:red'<p>";
        $result = mb_strtoupper ($phrase);}
        else {$result = $phrase;}
    return $result;

}
 echo  convertirMajRouge ($phrase);

