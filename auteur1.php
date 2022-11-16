<?php

// CLASSE AUTEUR : Classe indépendante de LIVRE

class Auteur{
    private string $_nom;
    private string $_prenom;
    private string $_dateNaissance;
    private array $_bibliographie;


public function __construct(string $_nom = "",string $_prenom = "",$_dateNaissance=""){
    $this->_nom = $_nom;
    $this->_prenom = $_prenom;
    $this->_dateNaissance = $_dateNaissance;
    $this->_bibliographie = [];//signifie que _bibliographie est un tableau ==> sert à recueillir les attributs de livre (titre, année parution,..
    
    
}
//PUBLIC FUNCTION toString()

public function __toString() {
    return  $this->_prenom ." ". $this->_nom ;
    
}



public function getNom(){
    return $this->_nom;

}
public function getPrenom(){
    return $this->_prenom;

}
public function getDateNaissance(){
    return $this->_dateNaissance;
}
public function setNom($_nom) {
    $this->_nom = $_nom;

}

public function setPrenom($_prenom) {
    $this->_prenom = $_prenom;

}
public function setDateNaissance($_dateNaissance) {
    $this->_dateNaissance = $_dateNaissance;

}



// AFFICHER METHODE BIBLIOGRAPHIE CLASSE AUTEUR
public function afficherBibliographie(){
	echo "<h1>Livres de $this </h1>";
    foreach  ($this->_bibliographie  as $livre){//attention on ne peut utiliser le $this que dans sa classe

        echo $livre->getTitre()." (".$livre->getAnnee()." ) :".$livre->getNbPages()." pages ".$livre->getPrix()." €<br>";
    
    }

}


public function addLivre(Livre $livre){//fonction qui permet d'ajouter un livre 
    $this->_bibliographie[]=$livre;
}


}
