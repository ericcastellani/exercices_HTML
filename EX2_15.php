<?php

$email = "elan@elan-formation.fr";
$email2 = "contact@elan";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo $email.'  est une adresse valide <br>';
}else{
    echo $email.' est une adresse invalide <br>';   
}

if(filter_var($email2, FILTER_VALIDATE_EMAIL)){
    echo $email2.'  est une adresse valide <br>';
}else{
    echo $email2.' est une adresse invalide <br>';   
}