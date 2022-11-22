
<?php
require "film.php";
require "personneCinema.php";
// Réalisateurs
$ridleyScott = new Realisateur("SCOTT","Ridley","Homme","30-11-1937");
$timburton = new Realisateur ("BURTON","Tim","Homme","25-08-1958");

//films

$film1 = new Film("BLADE RUNNER",1982,117,"Science Fiction",$ridleyScott);
$film2 = new Film("BLACK RAIN",1989,125,"Action",$ridleyScott);
$film3 = new film("GLADIATOR",2000,155,"Film hitorique",$ridleyScott);
$film4 = new film("BATMAN",1992,126,"Fantastique",$timburton);
$film5 = new film("BEETLEJUICE",1988,92,"Fantastique",$timburton);
$film5 = new film("SLEEPY HOLLOW",1999,106,"Fantastique",$timburton);

// TEST D'AFFICHAGE
echo "<h3>TEST D'AFFICHAGE FILMOGRAPHIE DU REALISATEUR<br></h3>";
echo "<h4>$ridleyScott<br></h4>";
echo $ridleyScott->afficherFilm();

echo "<h4>$timburton<br></h4>";
echo $timburton->afficherFilm();


//Acteurs

//$michaelKeaton = new Acteur ("KEATON","Michael","Homme","05-09-1951","BATMAN");

/*Réalisateurs

$ridleyScott = new Realisateur("SCOTT","Ridley","Homme","30-11-1937","blade Runner");
echo $ridleyScott->afficherfilm();
$film1 = new Film("BLADE RUNNER",1982,117,"Science Fiction",$ridleyScott);
$ridleyScott = new Realisateur("SCOTT","Ridley","Homme","30-11-1937","BLADE RUNNER");
$timburton = new Realisateur("BURTON","Tim","Homme","25-08-1958","BATMAN");
echo"$ridleyScott<br>";
echo "$film1 <br>";

/*Films

$film1 = new Film("BLADE RUNNER",1982,117,"Science Fiction",$ridleyScott);
$film2 = new Film("BLADE RUNNER",1982,117,"Science Fiction",$timburton);

// TESTS AFFICHAGE
    //films

echo "$film1<br>";
echo"________________________________________<br>";
echo "$film2<br>";
echo"________________________________________<br>";
echo"________________________________________<br>";

    //réalisateurs

echo "$ridleyScott<br>";
echo "$timburton<br>";

    //Acteurs

echo $michaelKeaton;*/


//$ridleyScott = new realisateur("SCOTT","Ridley","Homme","30-11-1937","BLADE RUNNER","synopsis");
//$film1 = new Film("BLADE RUNNER",1982,117,"Science Fiction",$ridleyScott);*/




