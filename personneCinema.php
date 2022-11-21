
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
    private $_film;// voir si à changer
    private string $_synopsis;


    // constructeur

public function __construct($_nom,$_prenom,$_sexe,$_dateNaissance,$_film,$_synopsis){
    parent :: __construct($_nom,$_prenom,$_sexe,$_dateNaissance);
    $this->_film = $_film;// voir si à changer
    $this->_synopsis = $_synopsis;
}
// toString

public function __toString(){
    return $this->_nom." : ".$this->_prenom." / ".$this->_sexe."  ".$this->_dateNaissance." : ".$this->_film." ".$this->_synopsis;
}



//getters et setters

    //getters
public function getFilm(){// voir si à changer
    return $this->_film;
}
public function getSynopsis(){
    return $this->_synopsis;
}
    //setters
public function setFilmRealisateur($_film){// voir si à modifier
    $this->_film = $_film;
}
public function setSynopsis($_synopsis){
    $this-> _synopsis = $_synopsis;


}
//                      Méthode afficherFilm

public function afficherFilm(){
	$result = "";
    foreach  ($this->_film as $film){//attention on ne peut utiliser le $this que dans sa propre classe
        $result .= $film->getTitre()." : ".$film->getAnnee()."  ".$film->getDuree()." ".$film->getGenre()."   <br>";
    }
	return $result;
}

}

//--------------------------------------CLASSE EXTENDS ACTEUR--------------------------------------------------

Class Acteur extends Personne{
    private string $_film;// voir si à changer
    private string $_role;

    // constructeur

public function __construct($_nom,$_prenom,$_sexe,$_dateNaissance){
    parent :: __construct($_nom,$_prenom,$_sexe,$_dateNaissance);
    $this->_film = $_film;// voir si à changer
    $this->_role = $_role;
}

//getters et setters

    //getters
public function getFilm(){// voir si à changer
    return $this->_film;
}
public function getRole(){
    return $this->_role;
}
    //setters
public function setFilm($_film){// voir si à modifier
    $this->_film = $_film;
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