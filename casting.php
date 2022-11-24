<?php
//---------------------CLASSE CASTING ------------------------------------

Class Casting{
    private string $_nom;
    private string $_film;
    private string $_role;


    // constructeur

public function __construct($_nom,$_film,$_role){
    $this->_nom = $_nom;
    $this->_film = $_film;
    $this->_role = $_role;

}

	//Methode toString()

public function __toString(){
    return $this->_nom."  ".$this->_film." / ".$this->_role." <br> ";
}

	//getters et setters
	//getters
public function getNom(){
	$this->_nom;
}
public function getFilm(){
	$this->_film;
}
public function getRole(){
	$this->_role;
}
	//setters
public function setNom($_nom){
	$this->_nom = $_nom;

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

