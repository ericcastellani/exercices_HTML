<?php


Class Acteur {
    private string $_nom;
    private string $_prenom;
    private string $_film;
    private string $_alias;


    // constructeur

public function __construct($_nom,$_prenom,$_film,$_alias){
    $this->_nom = $_nom;
    $this->_prenom = $_prenom;
    $this->_film = $_film;
    $this->_alias = $_alias;

}

// Méthode toString()




//getters et setters

    //getters
public function getNom(){// voir si à changer
    return $this->_nom;
}
public function getPrenom(){
    return $this->_prenom;
}
public function getFilm(){
    return $this->_film;
}
public function getAlias(){
    return $this->_alias;
}
        //setters
public function setNom(){
    $this->_nom = $_nom;
}





    //setters
public function setFilmActeur($_filmActeur){
    $this->_filmActeur = $_filmActeur;
}
public function setRole($_role){
    $this-> _role = $_role;
}


}