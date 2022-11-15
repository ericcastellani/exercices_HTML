<?php

// CLASSE AUTEUR : Classe indépendante de LIVRE

class Auteur{
    private $_nom;
    private $_prenom;
    private $_dateNaissance;
    private $_bibliographie;


public function __construct(string $_nom = "",string $_prenom = "",$_dateNaissance=""){
    $this->_nom = $_nom;
    $this->_prenom = $_prenom;
    $this->_dateNaissance = $_dateNaissance;
    $this->_bibliographie = [];//signifie que _bibliographie est un tableau ==> sert à recueillir les attributs de livre (titre, année parution,..
    
    
}
//PUBLIC FUNCTION toString()

public function __toString() {
    return  $this->_prenom ." ". $this->_nom ." ".$this->_dateNaissance ;
    
}



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
public function afficherBibliographie(){
    //forEach sur $this->_bibliographie[]

}


public function addLivre($livre){//fonction qui permet d'ajouter un livre 
    $this->_bibliographie[]=$livre;
}


}
