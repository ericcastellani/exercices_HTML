<?php

//----------------------CLASSE ACTEUR-----------------------------------


Class Acteur {
    private string $_nom;
    private string $_prenom;
    private array $_casting;


    // constructeur

public function __construct($_nom,$_prenom,$_casting){
    $this->_nom = $_nom;
    $this->_prenom = $_prenom;
	$this->_casting = [];




}

// Méthode toString()

public function __toString(){
    return $this->_nom."  ".$this->_prenom." / ";
}



//getters et setters

    //getters
public function getNom(){// voir si à changer
    return $this->_nom;
}
public function getPrenom(){
    return $this->_prenom;
}
public function getCasting(){
    return $this->_casting;
}


    //setters
public function setNom($_nom){
    $this->_nom = $_nom;
}
public function setPrenom($_prenom){
    $this-> _prenom = $_prenom;
}
public function setCasting($_casting){
    $this->_casting = $_casting;
}




// Méthode afficher Casting
public function afficherCasting(){
	$result = "";
	foreach($this->_casting as $casting){
		$result.=$casting->getCasting();//." : ".$film->getdateSortie()."<br>";
}
}

// Méthode addRole

// Méthode AddRole
public function addCasting($casting){//fonction qui permet d'ajouter un casting
    $this->_casting[]=$casting;
}	



}
// ------------------FIN DE CLASSE ACTEUR-------------------------

//-----------------AFFICHAGE TESTS--------------------------

$casting1 = ["Ford Harrison","Blade runner","blade"];
$casting2 = ["Ford Harrison","India Jones","indiana"];
$casting3 = ["Ford Harrison","Wording girl","mr "];

$harry = new acteur("ford","harrison",$casting1);
echo $harry->afficherCasting();



