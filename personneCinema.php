
<?php

//----------------------CLASSE PRINCIPALE PERSONNE-------------------------------------

Class Personne{
    protected string $_nom;
    protected string $_prenom;
    protected string $_sexe;
    protected string $_dateNaissance;

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
public function getPrenom(){
    return $this->_prenom;
}
public function getSexe(){
    return $this->_sexe;
}
public function getDateNaissance(){
    return $this->_dateNaissance;
}

    //setters
public function setNom($_nom){
    $this->_nom = $_nom;
}
public function setPrenom($_prenom){
    $this->_prenom = $_prenom;
}
public function setSexe($_sexe){
    $this->_sexe = $_sexe;
}
public function setDateNaissance($_dateNaissance){
    $this->_dateNaissance = $_dateNaissance;
}



}

//--------------------CLASSE  EXTENDS REALISATEUR------------------------------------------------------------------------------

Class Realisateur extends Personne{
    private array $_film;


    // constructeur

public function __construct($_nom,$_prenom,$_sexe,$_dateNaissance){
    parent :: __construct($_nom,$_prenom,$_sexe,$_dateNaissance);
	$this->_film = [];
}
// toString

public function __toString(){
    return $this->_nom."  ".$this->_prenom." / ".$this->_sexe." né le  ".$this->_dateNaissance;// à rajouter film après  méthode afficherfilm
}



//getters et setters

    //getters
public function getFilm(){
	return $this->_film;
}



public function setFilm($_film){
    $this-> _film = $_film;


}
// Méthode AddFilm
public function addFilm(Film $film){//fonction qui permet d'ajouter un film
    $this->_film[]=$film;
}	


//                      Méthode afficherFilm

public function afficherFilm(){
	$result = "";
    foreach  ($this->_film as $film){//attention on ne peut utiliser le $this que dans sa propre classe
        $result .= $film->getTitre()." / année sortie : ".$film->getdateSortie()." / ".$film->getDuree()." minutes /   ".$film->getGenre()." <br>";//.$film->getRealisateur()."   <br>";
    }
	return $result;
}

}

//--------------------------------------CLASSE EXTENDS ACTEUR--------------------------------------------------

Class Acteur extends Personne{

    private string $_role;

    // constructeur

public function __construct($_nom,$_prenom,$_sexe,$_dateNaissance,$_role){
    parent :: __construct($_nom,$_prenom,$_sexe,$_dateNaissance);
    $this->_role = $_role;
}
// toString()

public function __toString(){
    return $this->_nom." : ".$this->_prenom." / ".$this->_sexe."  ".$this->_dateNaissance." : ".$this->_film." ".$this->_role;
}


//getters et setters

    //getters

public function getRole(){
    return $this->_role;
}

public function setRole($_role){
    $this-> _role = $_role;
}


}

/*tests d'affichage

$ridleyScott = new realisateur("SCOTT","Ridley","Homme","30-11-1937","BLADE RUNNER","Film d'anticipation ");
echo $ridleyScott;

// Méthode afficherFilm

public function afficherFilm($film){
	$result = "";
    foreach  ($this->_film as $film){//attention on ne peut utiliser le $this que dans sa propre classe
        $result .= $film->getTitre()." : ".$film->getAnnee()."  ".$film->getDuree()." ".$film->getGenre()."   <br>";
    }
	return $result;
}

$film1->afficherFilm();*/