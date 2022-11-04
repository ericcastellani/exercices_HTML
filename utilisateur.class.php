<?php
class Utilisateur{
	private $user_name; //private : les données ne sont accessibles que depuis l'intérieur de la classe
	private $user_pass;
	private $ville;

	public function __construct($user_name, $user_pass, $ville) //construct permet d'attribuer des valeurs aux différentes propriétés de la classe
	{
		$this->user_name = $user_name;
		$this->user_pass = $user_pass;
		$this->ville = $ville;
	}

	public function getNom(){ //ces propriétés peuvent être utiliser en dehors de la classe
		return $this->user_name; /* $this est appelé pseudo-variable et sert à faire réf. à l'objet utilisé
		réf. à l'objet utilisé.Cela signifie que lorqu'on va appeler une méthode de
		classe depuis un objet, $this va être substitué par l'objet qui utilise la
		méthode actuellement. */


	}

	public function setNom($new_user_name){
		$this->user_name = $new_user_name;
	}

	public function setPasse ($new_user_pass){
		$this->user_pass = $new_user_pass;
	}

	public function getVille() {
		return $this->ville;
	}

	public function setVille($new_ville) {
		$this->ville = $new_ville;
	}
}
?>
