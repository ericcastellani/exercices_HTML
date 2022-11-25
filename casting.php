<?php
//---------------------CLASSE CASTING ------------------------------------

Class Casting{
    protected Acteur $_acteur;
    protected string $_film;
    protected string $_role;


    // constructeur

public function __construct(Acteur $_acteur,$_film,$_role){
    $this->_acteur = $_acteur;
	$this->_acteur->addCasting($this);
    $this->_film = $_film;
    $this->_role = $_role;

}

	//Methode toString()

public function __toString(){
    return $this->_acteur."  ".$this->_film." / ".$this->_role." <br> ";
}

	//getters et setters
	//getters
public function getActeur(){
	$this->_acteur;
}
public function getFilm(){
	$this->_film;
}
public function getRole(){
	$this->_role;
}
	//setters
public function setActeur($_acteur){
	$this->_nom = $_acteur;

}
public function setFilm($_film){
	$this->_film = $_film;
}
public function setRole($_role){
	$this->_role = $_role;
}

public function afficherRole(){
	
}



}

