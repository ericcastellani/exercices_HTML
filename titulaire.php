<?php

class Titulaire{
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance; //date de naissance définie en DateTime pour pouvoir l'utiliser ensuite en new DateTime (si on avait mis string cela n'aurait pas marché)
    private array $_compteBancaire;// 

    // Constructeur

public function __construct($_nom,$_prenom,$_dateNaissance){
    $this->_nom = $_nom;
    $this->_prenom = $_prenom;
    $this->_dateNaissance =new DateTime($_dateNaissance); //permet de calculer l'age de la personne
    $this->_compteBancaire = [];// à redéfinir CompteBancaire
}
//PUBLIC FUNCTION toString()

public function __toString() {
    return  $this->_prenom ." ". $this->_nom ;
}

// Getters et Setters
	// Getters

public function getNom(){
    return $this-> _nom;
}
public function getPrenom(){
    return $this-> _prenom;
}
public function getDateNaissance(){
    return $this-> _dateNaissance->format("d-m-Y");//comme il s'agit de DateTime il faut lui indiquer le format
}

	//Setters

public function setNom($_nom) {
    $this->_nom = $_nom;
}
public function setPrenom($_prenom) {
    $this->_prenom = $_prenom;
}
public function setDateNaissance($_dateNaissance) {
    $this->_dateNaissance = $_dateNaissance;
}

//Méthode calcul de l'âge
Public function calculAge(){
	$now =new  DateTime();
	$age = $this->_dateNaissance->diff ($now);
	// return $age->format("%Y ans %M mois %d jours");
	return $age->format("%Y ans"); // comme il s'agit d'une fonction il faut utiliser un return
}



//Methode afficher comptes d'un titulaire
public function afficherCompteBancaire(){
	$result = "";
    foreach  ($this->_compteBancaire as $cpte){//attention on ne peut utiliser le $this que dans sa propre classe
        $result .= $cpte->getLibelle()." : ".$cpte->getSoldeInitial()."  ".$cpte->getDevise()."   <br>";
    }
	return $result;
}



// Methode ajouter comptes (compte courant, livret A,...)
public function addCompteBancaire(CompteBancaire $cpte){//fonction qui permet d'ajouter un compte
    $this->_compteBancaire[]=$cpte;
}	

}