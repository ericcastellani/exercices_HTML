
<?php
require "film.php";
require "personneCinema.php";

//Acteurs

//$michaelKeaton = new Acteur ("KEATON","Michael","Homme","05-09-1951","BATMAN","Bruce Wayne alias Batman");



$ridleyScott = new Realisateur("SCOTT","Ridley","Homme","30-11-1937","BLADE RUNNER","Film d'anticipation futuriste");
$timburton = new Realisateur("BURTON","Tim","Homme","25-08-1958","BATMAN","Film de superhéros");
$film1 = new Film("BLADE RUNNER",1982,117,"Science Fiction",$ridleyScott);
$film2 = new Film("BLADE RUNNER",1982,117,"Science Fiction","Ridley Scott");
$film3 = new Film("BATMAN",1989,126,"Fantastique","Tim Burton");

// TESTS AFFICHAGE
    //films

echo "$film1<br>";
echo"________________________________________<br>";
echo "$film2<br>";
echo"________________________________________<br>";
echo "$film3<br>";
echo"________________________________________<br>";

    //réalisateurs

echo "$ridleyScott<br>";
echo "$timburton<br>";

    //Acteurs

//echo $michaelKeaton;


//$ridleyScott = new realisateur("SCOTT","Ridley","Homme","30-11-1937","BLADE RUNNER","synopsis");
//$film1 = new Film("BLADE RUNNER",1982,117,"Science Fiction",$ridleyScott);




