
<?php

Class Personne{
    private string $_nom;
    private string $_prenom;
    private string $_sexe;
    private string $_dateNaissance;

    // constructeur

public function __construct($_nom,$_prenom,$_sexe,$_dateNaissance){
    $this->_nom = $_nom;
    $this->_prenom = $_prenom;
    $this->_sexe = $_sexe;
    $this->_dateNaissance = $_dateNaissance;

}

//getters et setters

    //getters
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenomRealisateur(){
        return $this->_prenomRealisateur;
    }
    public function getSexeRealisateur(){
        return $this->_sexeRealisateur;
    }
    public function getDateNaissanceRealisateur(){
        return $this->_dateNaissanceRealisateur;
    }


}