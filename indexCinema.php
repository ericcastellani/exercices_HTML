
<?php
require "film.php";
require "acteur.php";
require "realisateur.php";

$ridleyScott = new realisateur("SCOTT","Ridley","Homme","30-11-1937","BLADE RUNNER","synopsis");
$film1 = new Film("BLADE RUNNER",1982,117,"Science Fiction",$ridleyScott);



echo $film1;

//$ridleyScott = new realisateur("SCOTT","Ridley","Homme","30-11-1937","BLADE RUNNER","synopsis");
//$film1 = new Film("BLADE RUNNER",1982,117,"Science Fiction",$ridleyScott);




