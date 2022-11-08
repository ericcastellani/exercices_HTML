<?php

$email = "elan@elan-formation.fr";
$email2 = "contact@elan";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo'<b>'. $email.'</b>'.'  est une adresse valide <br>';
}else{
    echo '<b>'.$email.'</b>.'.'est une adresse invalide <br>';   
}

if(filter_var($email2, FILTER_VALIDATE_EMAIL)){
    echo '<b>'.$email2.'</b>'.'  est une adresse valide <br>';
}else{
    echo '<b>'.$email2.'</b>'.' est une adresse invalide <br>';   
}