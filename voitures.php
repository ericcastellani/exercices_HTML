<?php

Class Voiture{
    private $_marque;
    private $_modele;
    
     // Constructeur
    public function __construct(string $_marque = "", string $_modele = ""){

        $this->_marque = $_marque;
        $this->_modele = $_modele;
    }
     // GETTERS ET SETTERS

    public function getMarque(){
        return $this->_marque;
    }
    public function getModele(){
        return $this->_modele;
    } 

        //inutiles pour l'exercice mais au cas où

    public function setMarque() {
        $this->_marque = $_marque;
    }
    public function setModele(){
        $this->_modele =$_modele;
    }   
}
/*class VoitureElec extends Voiture {
    $_autonomie = $_autonomie;
}*/