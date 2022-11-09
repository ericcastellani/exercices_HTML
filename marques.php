<h4>EXERCICE 13 PARTIE 2</H4>

<?php

Class Voitures{
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
    private $_statut; // indique si est à le moteur est allumé ou éteint

     // Constructeur
    public function __construct(string $_marque = "", string $_modele = "", $_nbPortes = "") {
		// RMQ : on n'est pas obligé de mettre toutes les variables dans le constructeur (dans notre cas il manque statut et vitesseActuelle)
        $this->_marque = $_marque;
        $this->_modele = $_modele;
        $this->_nbPortes = $_nbPortes;
        $this->_vitessActuelle = 0;
        $this->_statut = false;
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
	public function getStatut(){
		if($this->_statut) {
			$result = "démarré";
		} else {
			$result = "à l'arrêt";
		}
		return $result;
	}
    public function setMarque($_marque) {
        $this->_marque = $_marque;
    }
    public function setModele($_modele){
        $this->_modele =$_modele;
    }
    public function setNbPortes($_nbPortes){
        $this->_nbPortes = $_nbPortes;
    }
    public function setVitesseActuelle($_vitesseActuelle){
        $this->_vitesseActuelle = $_vitesseActuelle;
    }
	public function setStatut($_statut){
		$this->_statut = $_statut;
	}

    // METHODES démarrer, accélérer et stopper

    public function demarrer(){
        $this->_statut = true;   
    }
    public function accelerer($vitesse){
        if($this->_statut){ // signifie _statut = true. Pour avoir le contraire cad false il suffiet de mettre  ! devant $this
        	$this->_vitesseActuelle += $vitesse;}// signifie _vitesseActuelle = _vitesseActuelle + $vitesse
		else {
			echo "<h4>Pour accélérer, il faut démarrer le véhicule</h4>";
		}
    }

    public function stopper(){
        if ($this->_statut){ //pour pouvoir exploiter les variables sans dollar il faut toujours passer par $this
        	$this->_vitesseActuelle = 0;
			$this->_statut = false;
    	} else {
			echo "il faut éteindre le moteur pour espérer le stopper";
		}

	}
	public function ralentir($vitesse){
		if($vitesse >$this->_vitesseActuelle){
			echo "Vous ne pouvez pas ralentir d'avantage que la vitesse actuelle : ";
		}else {$this->_vitesseActuelle -=$vitesse;}
	}
}