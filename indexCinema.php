
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


/*echo "$ridleyScott<br>";
echo "$film1<br>";
echo "$film2 <br>";
echo "$film3 <br>";*/
echo $ridleyScott->afficherFilm();

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




