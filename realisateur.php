
<?php

Class Realisateur{
    private string $_nomRealisateur;
    private string $_prenomRealisateur;
    private string $_sexeRealisateur;
    private string $_dateNaissanceRealisateur;

    // constructeur

public function __construct($_nomRealisateur,$_prenomRealisateur,$_sexeRealisateur,$_dateNaissanceRealisateur){
    $this->_nomRealisateur = $_nomRealisateur;
    $this->_prenomRealisateur = $_prenomRealisateur;
    $this->_sexeRealisateur = $_sexeRealisateur;
    $this->_dateNaissanceRealisateur = $_dateNaissanceRealisateur;

}

//getters et setters

    //getters
    public function getNomRealisateur(){
        return $this->_nomRealisateur;
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