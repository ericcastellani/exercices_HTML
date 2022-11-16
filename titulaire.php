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
// Getters et Setters

}