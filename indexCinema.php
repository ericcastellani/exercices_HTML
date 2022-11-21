
<?php
require "film.php";
require "realisateur.php";

$ridleyScott = new realisateur("SCOTT","Ridley","Homme","30-11-1937");
$film1 = new Film("BLADE RUNNER",1982,117,"Science Fiction",$ridleyScott);



echo $film1;

