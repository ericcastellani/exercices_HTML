<?php

// CLASSE AUTEUR : Classe indépendante de LIVRE

class Auteur{
    private $_nom;
    private $_prenom;
    private $_dateNaissance;


public function __construct(string $_nom = "",string $_prenom = "",$_dateNaissance=""){
    $this->_nom = $_nom;
    $this->_prenom = $_prenom;
    $this->_dateNaissance = $_dateNaissance;
    
}
/*PUBLIC FUNCTION toString()

public function __toString() {
    return  $this->_titre ."( ". $this->_annee ." ) :".$this->_nbPages." pages /".$this->_prix." € ".$this->_auteurNom." ".$this->_auteurPrenom;
    
}*/



public function getNom(){
    return $this->_nom;

}
public function getPrenom(){
    return $this->_prenom;

}
public function getDateNaissance(){
    return $this->_dateNaissance;
}
public function setNom($_nom) {
    $this->_nom = $_nom;

}

public function setPrenom($_prenom) {
    $this->_prenom = $_prenom;

}
public function setDateNaissance($_dateNaissance) {
    $this->_dateNaissance = $_dateNaissance;

}




// AFFICHER METHODE BIBLIOGRAPHIE CLASSE AUTEUR



}
