
<?php
require "film.php";
require "personneCinema.php";
require "genreCinema.php";
// Réalisateurs
$ridleyScott = new Realisateur("SCOTT","Ridley","Homme","30-11-1937");
$timburton = new Realisateur ("BURTON","Tim","Homme","25-08-1958");
$georgelucas = new Realisateur("LUCAS","George","Homme","14-05-1944");


//films

$film1 = new Film("BLADE RUNNER",1982,117,"Science Fiction",$ridleyScott);
$film2 = new Film("BLACK RAIN",1989,125,"Action",$ridleyScott);
$film3 = new Film("GLADIATOR",2000,155,"Film hitorique",$ridleyScott);
$film4 = new Film("BATMAN",1992,126,"Fantastique",$timburton);
$film5 = new Film("BEETLEJUICE",1988,92,"Fantastique",$timburton);
$film5 = new Film("SLEEPY HOLLOW",1999,106,"Fantastique",$timburton);
$film6 = new Film("STAR WARS 4",1977,121,"Science Fiction",$georgelucas);
$film7 = new Film("AMERICAN GRAFFITI",1973,112,"Comédie",$georgelucas);
$film8 = new Film("STAR WARS 1",1999,133,"Science Fiction",$georgelucas);
$film9 = new Film("STAR WARS 2",2002,142,"Science Fiction",$georgelucas);
$film10 = new Film("STAR WARS 3",2005,140,"Science Fiction",$georgelucas);


// TEST D'AFFICHAGE

	//affichage réalisateur

echo "<h3><i>TEST D'AFFICHAGE FILMOGRAPHIE DU REALISATEUR<br></i></h3>";
echo "<h4>$ridleyScott<br></h4>";
echo $ridleyScott->afficherFilm();

echo "<h4>$timburton<br></h4>";
echo $timburton->afficherFilm();

echo "<h4>$georgelucas<br></h4>";
echo $georgelucas->afficherFilm();

	//affchage genre de films
$film11 = new Film("BLADE RUNNER",1982,117,"Science Fiction",$ridleyScott);
$genre1 = new Genre("FANTASTIQUE");
$film11 = new Film("BLADE RUNNER",1982,117,$genre1,$ridleyScott);
echo"<h4> $genre1<br></h4>";
$genre1->afficherGenre();
echo $film11;

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




