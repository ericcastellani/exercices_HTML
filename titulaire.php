<?php

class Titulaire{
    private string $_nom;
    private string $_prenom;
    private string $_dateNaissance;
    private array $_compteBancaire;// à redéfinir class CompteBancaire

    // Constructeur

public function __construct($_nom,$_prenom,$_dateNaissance){
    $this->_nom = $_nom;
    $this->_prenom = $_prenom;
    $this->_dateNaissance = $_dateNaissance;
    $this->_compteBancaire = [];// à redéfinir CompteBancaire
}
//PUBLIC FUNCTION toString()

public function __toString() {
    return  $this->_prenom ." ". $this->_nom ;
}

// Getters et Setters
	// Getters

public function getNom(){
    return $this-> _nom;
}
public function getPrenom(){
    return $this-> _prenom;
}
public function getDateNaissance(){
    return $this-> _dateNaissance;
}

	//Setters

public function setNom($_nom) {
    $this->_nom = $_nom;
}
public function setPrenom($_prenom) {
    $this->_prenom = $_prenom;
}
public function setDateNaissance($_dateNaissance) {
    $this->_dateNaissance = $_dateNaissance;
}


//Methode afficher comptes d'un titulaire




// Methode ajouter comptes (compte courant, livret A,...)
public function addCompteBancaire(CompteBancaire $_titulaire){//fonction qui permet d'ajouter un livre 
    $this->_compteBancaire[]=$_titulaire;
}


}