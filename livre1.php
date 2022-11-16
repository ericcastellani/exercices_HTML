

<?php

class Livre{
    private string $_titre;
    private int $_nbPages;
    private int $_annee;
    private float $_prix;
    private Auteur $_auteur;



// CONSTRUCTEUR

public function __construct(string $_titre,$_nbPages,$_annee,$_prix , Auteur $_auteur){// Auteur $_auteur ==> renvoit à la classe Auteur
    $this->_titre = $_titre;
    $this->_nbPages = $_nbPages;
    $this->_annee = $_annee;
    $this->_prix = $_prix;
    $this->_auteur = $_auteur;//permet de définir l'auteur
    $this->_auteur->addLivre($this);//permet d'ajouter un livre à l'auteur


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
public function getAuteur(){
    return $this->_auteur;

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
public function setAuteur($_auteur) {
    $this->_auteur = $_auteur;

}



// METHODE AFFICHER BIBLIOGRAPHIE

/*public function afficherBibliographie(){
    echo $this->getTitre()." ".$this->getAnnee()." ".$this->getNbPages()." ".$this->getPrix();}*/
}





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
