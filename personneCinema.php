
<?php

Class Personne{
    private string $_nom;
    private string $_prenom;
    private string $_sexe;
    private string $_dateNaissance;

    // constructeur

public function __construct($_nom,$_prenom,$_sexe,$_dateNaissance){
    $this->_nom = $_nom;
    $this->_prenom = $_prenom;
    $this->_sexe = $_sexe;
    $this->_dateNaissance = $_dateNaissance;

}

//getters et setters

    //getters
public function getNom(){
    return $this->_nom;
}
public function getPrenom(){
    return $this->_prenom;
}
public function getSexe(){
    return $this->_sexe;
}
public function getDateNaissance(){
    return $this->_dateNaissance;
}

    //setters
public function setNom($_nom){
    $this->_nom = $_nom;
}
public function setPrenom($_prenom){
    $this->_prenom = $_prenom;
}
public function setSexe($_sexe){
    $this->_sexe = $_sexe;
}
public function setDateNaissance($_dateNaissance){
    $this->_dateNaissance = $_dateNaissance;
}







}