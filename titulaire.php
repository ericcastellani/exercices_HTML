<?php

class Titulaire{
    private $_nom;
    private $_prenom;
    private $_dateNaissance;
    private $_compteBancaire;// à redéfinir class CompteBancaire

    // Constructeur

public function __construct($_nom,$_prenom,$_dateNaissance,$_compteBancaire){
    $this->_nom = $_nom;
    $this->_prenom = $_prenom;
    $this->_dateNaissance = $_dateNaissance;
    $this->_compteBancaire = $_compteBancaire;// à redéfinir CompteBancaire

}
// Getters et Setters

}