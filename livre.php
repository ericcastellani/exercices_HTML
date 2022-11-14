

<?php

class Livres{
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
    return  $this->_titre ." ". $this->_nbPages ." ".$this->_annee." ".$this->_prix." ".$this->_auteurNom." ".$this->_auteurPrenom;
     $this->_nbPages;
     $this->_annee;
     $this->_prix;
     $this->_auteurNom;
     $this->_auteurPrenom;

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

}
$livre1=new Livres('ca',1138,1986,20,'KING','Stephen');
echo $livre1;
