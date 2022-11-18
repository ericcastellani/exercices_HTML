<?php

class CompteBancaire{
    private string $_libelle;
    private float $_soldeInitial;
    private string $_devise;
    private Titulaire $_titulaire;// renvoit à classe Titulaire

    //Constructeur

public function __construct($_libelle,$_soldeInitial,$_devise,Titulaire $_titulaire){
    $this-> _libelle = $_libelle;
    $this-> _soldeInitial = $_soldeInitial;
    $this-> _devise = $_devise;
    $this-> _titulaire =  $_titulaire;
	$this->_titulaire->addCompteBancaire($this);
}
    //PUBLIC FUNCTION toString()

public function __toString() {
    return  $this->_libelle." ". $this->_soldeInitial." ".$this->_devise." ".$this->_titulaire;
   
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
/*
//Methode afficher comptes d'un titulaire
public function afficherCompteBancaire(){
    foreach  ($this->_compteBancaire as $cpte){//attention on ne peut utiliser le $this que dans sa propre classe

        echo $cpte->getLibelle()." : ".$cpte->getSoldeInitial()."  ".$cpte->getDevise()."   <br>";
    
    }
}



// Methode ajouter comptes (compte courant, livret A,...)
public function addCompteBancaire(CompteBancaire $cpte){//fonction qui permet d'ajouter un compte
    $this->_compteBancaire[]=$cpte;
}*/

//METHODE CREDITER UN COMPTE

public function CrediterCompte($montant){
	$this->_soldeInitial=$this->_soldeInitial + $montant;
	return $this->_soldeInitial;


}

//METHODE DEBITER UN COMPTE
public function DebiterCompte($montant){
	$this->_soldeInitial=$this->_soldeInitial - $montant;
	return $this->_soldeInitial;


}
//METHODE VIREMENT COMPTE A COMPTE

}