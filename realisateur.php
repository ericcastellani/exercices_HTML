
<?php
/*require "personneCinema.php";

Class Realisateur extends Personne{
    private array $_film;// voir si à changer
    private string $_synopsis;


    // constructeur

public function __construct($_nom,$_prenom,$_sexe,$_dateNaissance,$_film,$_synopsis){
    parent :: __construct($_nom,$_prenom,$_sexe,$_dateNaissance);
    $this->_film = $_film;// voir si à changer
    $this->_synopsis = $_synopsis;
}
// toString

public function __toString(){
    return $this->_nom." : ".$this->_prenom." / ".$this->_sexe."  ".$this->_dateNaissance." : ".$this->_film." ".$this->_synopsis;
}



//getters et setters

    //getters
public function getFilmRealisateur(){// voir si à changer
    return $this->_filmRealisateur;
}
public function getSynopsis(){
    return $this->_synopsis;
}
    //setters
public function setFilmRealisateur($_filmRealisateur){// voir si à modifier
    $this->_filmRealisateur = $_filmRealisateur;
}
public function setSynopsis($_synopsis){
    $this-> _synopsis = $_synopsis;
}


}

//tests d'affichage

$ridleyScott = new realisateur("SCOTT","Ridley","Homme","30-11-1937","BLADE RUNNER","Film d'anticipation ");
echo $ridleyScott;

