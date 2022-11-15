<?php

class CompteBancaire{
    private $_libelle;
    private $_soldeInitial;
    private $_devise;
    private $_titulaire // à redéfinir en fonction de class CompteBancaire

    //Constructeur

public function __construct($_libelle,$_soldeInitial,$_devise,$_titulaire){//$_titulaire à redéfinir en fonction compte bancaire
    $this-> _libelle = $_libelle;
    $this-> _soldeInitial = $_soldeInitial;
    $this-> _devise = $_devise;
    $this-> _titulaire = $_titulaire;// à redéfinir  en fonction class CompteBancaire  
}
    // Getters et Setters
        // Getters

public function getLibelle(){
    return $this-> _libelle;
}
public function getSoldeInitial(){
    return $this-> _soldeInitial;
}
public function getDevise(){
    return $this-> _devise;
}
public function getTitulaire(){
    return $this-> _titulaire;// à redéfinir en fonction class CompteBancaire    
}
        // Setters

public function setLibelle($_libelle) {
    $this->_libelle = $_libelle;
}
public function setSoldeInitial($_soldeInitial) {
    $this->_soldeInitial = $_soldeInitial;
}
public function setDevise($_devise) {
    $this->_devise = $_devise;
}
public function setTitulaire($_titulaire) {
    $this->_titulaire = $_titulaire;// à redéfinir en fonction class CompteBancaire
}


}