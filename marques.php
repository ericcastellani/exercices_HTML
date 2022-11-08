<?php

Class Voitures{
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
    private $_statut = 0; // indique si est à le moteur est allumé ou éteint

     // Constructeur
    public function __construct(string $_marque = "", string $_modele = "", $_nbPortes = "",$_vitesseActuelle=0,$_statut=0) {

        $this->_marque = $_marque;
        $this->_modele = $_modele;
        $this->_nbPortes = $_nbPortes;
        $this->_vitessActuelle = $_vitesseActuelle;
        $this->_statut = $_statut;
    }

    // GETTERS ET SETTERS

    public function getMarque(){
        return $this->_marque;
    }
    public function getModele(){
        return $this->_modele;
    }
    public function getNbPortes(){
        return $this->_nbPortes;
    }
    public function getVitesseActuelle(){
        return $this->_vitesseActuelle;

    }
    public function setMarque() {
        $this->_marque = $_marque;
    }
    public function setModele(){
        $this->_modele =$_modele;
    }
    public function setNbPortes(){
        $this->_nbPortes = $_nbPortes;
    }
    public function setVitesseActuelle(){
        $this->_vitesseActuelle = $_vitesseActuelle;
    }

    // METHODES démarrer, accélérer et stopper

    public function Demarrer(){
        $this->_vitesseActuelle = 0;
        $this->_statut = 1;   
    }
    public function Accelerer(){
        $this->_statut = 1;
        $this->_vitesseActuelle = $_vitesseActuelle + $vitesse;
    }
    public function Stopper(){
        $this->_statut = 0;
        $this->_vitesseActuelle = 0;
    }


}