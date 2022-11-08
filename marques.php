<?php

Class Voitures{
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;

     // Constructeur
    public function __construct(string $_marque = "", string $_modele = "", $_nbPortes = "",$_vitesseActuelle="") {

        $this->_marque = $_marque;
        $this->_modele = $_modele;
        $this->_nbPortes = $_nbPortes;
        $this->_vitessActuelle = $_vitesseActuelle;
    }

    // GETTERS ET SETTERS

    public function getMarque() :string{
        return $this->_marque;
    }
    public function getModele() :string{
        return $this->_modele;
    }
    public function getNbPortes() :int {
        return $this->_nbPortes;
    }
    public function getVitesseActuelle() : int{
        return $this->_vitesseActuelle;

    }
    public function setMarque(string $_marque) {
        $this->_marque = $_marque;
    }
    public function setModele(string $_modele){
        $this->_modele =$_modele;
    }
    public function setNbPortes(int $_nbPortes){
        $this->_nbPortes = $_nbPortes;
    }
    public function setVitesseActuelle(int $_vitesseActuelle){
        $this->_vitesseActuelle = $_vitesseActuelle;
    }
}