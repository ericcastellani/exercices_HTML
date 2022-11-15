

<?php

class Livre{
    private $_titre;
    private $_nbPages;
    private $_annee;
    private $_prix;
    private $_auteurNom;
    private $_auteurPrenom;



// CONSTRUCTEUR

public function __construct(string $_titre = "",$_nbPages = "",$_annee = "",$_prix = "",string $_auteurNom = "",string $_auteurPrenom = ""){
    $this->_titre = $_titre;
    $this->_nbPages = $_nbPages;
    $this->_annee = $_annee;
    $this->_prix = $_prix;
    $this->_auteurNom = $_auteurNom;
    $this->_auteurPrenom = $_auteurPrenom;

}
// PUBLIC FUNCTION toString()

public function __toString() {
    return  $this->_titre ."( ". $this->_annee ." ) :".$this->_nbPages." pages /".$this->_prix." € ".$this->_auteurNom." ".$this->_auteurPrenom;
    
}

// GETTERS ET SETTERS

public function getTitre(){
    return $this->_titre;

}
public function getNbPages(){
    return $this->_nbPages;

}
public function getAnnee(){
    return $this->_annee;

}
public function getPrix(){
    return $this->_prix;

}
public function getAuteurNom(){
    return $this->_auteurNom;

}
public function getAuteurPrenom(){
    return $this->_auteurPrenom;

}
public function setTitre($_titre) {
    $this->_titre = $_titre;

}
public function setNbPages($_nbPages) {
    $this->_nbPages = $_nbPages;

}
public function setAnnee($_annee) {
    $this->_annee = $_annee;

}
public function setPrix($_prix) {
    $this->_prix = $_prix;

}
public function setAuteurNom($_auteurNom) {
    $this->_auteurNom = $_auteurNom;

}
public function setAuteurPrenom($_auteurPrenom) {
    $this->_auteurPrenom = $_auteurPrenom;

}



// METHODE AFFICHER BIBLIOGRAPHIE

public function afficherBibliographie(){
    echo $this->getTitre()." ".$this->getAnnee()." ".$this->getNbPages()." ".$this->getPrix();}
}

/* CLASSE AUTEUR : Classe indépendante de LIVRE

class Auteur{
    private $_nom;
    private $_prenom;
    private $_dateNaissance;


public function __construct(string $_nom = "",string $_prenom = "",$_dateNaissance=""){
    $this->_nom = $_nom;
    $this->_prenom = $_prenom;
    $this->_dateNaissance = $_dateNaissance;
    
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



}*/



/*TEST AFFICHAGE SIMPLE
$livre1=new Livre('ca',1138,1986,20,'KING','Stephen');
$livre2=new Livre('Simetierre',374,1983,15,'KING','Stephen');
$livre3=new Livre('Le Fléau',823,1978,14,'KING','Stephen');
$livre4=new Livre('Shining',447,1977,16,'KING','Stephen');
echo "$livre1 <br>";
echo "$livre2 <br>";
echo "$livre3 <br>";
echo "$livre4 <br>";

// TEST AFFICHAGE AVEC METHODE afficherBibliographie
$livre1->afficherBibliographie();*/
