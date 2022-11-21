<?php
require "PersonneCinema.php";

Class Acteur extends Personne{
    private string $_filmActeur;// voir si à changer
    private string $_role;

    // constructeur

public function __construct($_nom,$_prenom,$_sexe,$_dateNaissance){
    parent :: __construct($_nom,$_prenom,$_sexe,$_dateNaissance);
    $this->_filmActeur = $_filmActeur;// voir si à changer
    $this->_role = $_role;
}

//getters et setters

    //getters
public function getFilmActeur(){// voir si à changer
    return $this->_filmActeur;
}
public function getRole(){
    return $this->_role;
}
    //setters
public function setFilmActeur($_filmActeur){// voir si à modifier
    $this->_filmActeur = $_filmActeur;
}
public function setRole($_role){
    $this-> _role = $_role;
}


}