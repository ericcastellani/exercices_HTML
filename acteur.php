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

public function __toString(){
    return $this->_nom."  ".$this->_prenom." / ".$this->_film."    ".$this->_alias;
}



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
public function setNom($_nom){
    $this->_nom = $_nom;
}
public function setPrenom($_prenom){
    $this-> _prenom = $_prenom;
}
public function setFilm($_film){
    $this->_film = $_film;
}
public function setPrenom($_alias){
    $this-> _alias = $_alias;
}


}