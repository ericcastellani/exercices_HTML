<?php

Class Film{
    private string $_titre;
    private string $_dateSortie;
    private int $_duree;
    private string $_genre;
    private  Realisateur $_realisateur; // à changer class Realisateur ==>private Realisateur $_realisateur

    //constructeur

    public function __construct($_titre,$_dateSortie,$_duree,$_genre,Realisateur $_realisateur){// à changer class Realisateur
        $this-> _titre = $_titre;
        $this-> _dateSortie = $_dateSortie;
        $this-> _duree = $_duree;
        $this-> _genre = $_genre;
        $this-> _realisateur = $_realisateur;
		$this->_realisateur-> addFilm($this);

    }
    // toString

    public function __toString(){
        return $this->_titre." : ".$this->_dateSortie." / ".$this->_duree." min. ".$this->_genre." / Réalisateur : ".$this->_realisateur;
    }

    //getters et setters

        //getters
    public function getTitre(){
        return $this-> _titre;
    }
    public function getDateSortie(){
        return $this-> _dateSortie;
    }
    public function getDuree(){
        return $this-> _duree;
    }
    public function getGenre(){
        return $this-> _genre;
    }
    public function getRealisateur(){
        return $this-> _realisateur;
    }
        //setters
    public function setTitre($_titre){
        $this->_titre = $_titre;
    }
    public function setDateSortie($_dateSortie){
        $this-> _dateSortie = $_dateSortie;
    }
    public function setDuree($_duree){
        $this->_duree = $_duree;
    }
    public function setGenre($_genre){
        $this->_genre = $_genre;
    }
    public function setRealisateur($_realisateur){
        $this->_realisateur = $_realisateur;
    }



}
/* TESTS D'affichage

$film1 = new Film("BLADE RUNNER",1982,117,"Science Fiction","Ridley Scott");
$film2 = new Film("BATMAN",1989,126,"Fantastique","Tim Burton");*/


