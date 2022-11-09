<h3>EXERCICE 15 PARTIE 2 PHP</h3>

<?php

$email = "elan@elan-formation.fr";
$email2 = "contact@elan";
echo "$email<br>";
echo "$email2<br>";
echo"<br>";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo"L'adresse ".'<b>'. $email.'</b>'.'  est une adresse valide <br>';//autre façon d'écrire ' au lieu de "
}else{
    echo "L'adresse ". '<b>'.$email.'</b>.'.'est une adresse invalide <br>';   
}

if(filter_var($email2, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse <b>$email2</b> est une adresse valide <br>";// autre façon d'écrire
}else{
    echo "L'adresse ".'<b>'.$email2.'</b>'.' est une adresse invalide <br>';   
}