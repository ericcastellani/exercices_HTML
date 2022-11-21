
<?php
require "personneCinema.php";

Class Realisateur extends Personne{
    private string $_filmRealisateur;// voir si à changer
    private string $_synopsis;

    // constructeur

public function __construct($_nom,$_prenom,$_sexe,$_dateNaissance){
    parent :: __construct($_nom,$_prenom,$_sexe,$_dateNaissance);
    $this->_filmRealisateur = $_filmRealisateur;// voir si à changer
    $this->_synopsis = $_synopsis;
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