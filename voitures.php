<?php

Class Voiture{
    protected $_marque; //protected au lieu de private afin de récupérer dans la classe étendue
    protected $_modele;
    
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

    public function setMarque($_marque) {
        $this->_marque = $_marque;
    }
    public function setModele($_modele){
        $this->_modele =$_modele;
    }   
}
class VoitureElec extends Voiture {// dans la classe étendue on ne trouve que la propriété supplémentaire ici autonomie
    private $_autonomie;

    
     // Constructeur : Attention il faut reprendre en totalité toutes les propriétés (marque, modèle et autonomie)
    public function __construct(string $_marque = "", string $_modele = "",$_autonomie){

		parent::__construct($_marque,$_modele); // on indique à la classe étendue que marque et modèle suivent les propriété de parent
		$this->_autonomie = $_autonomie;

    }
     // GETTERS ET SETTERS

	public function getAutonomie(){
		return $this->_autonomie;

	}
}