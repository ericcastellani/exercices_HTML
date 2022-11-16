<?php
require "livre1.php";
require "auteur1.php";


$StephenKing = new Auteur ("KING", "Stephen", "03-05-1947");

var_dump($StephenKing);

$livre1=new Livre('ca',1138,1986,20,$StephenKing);
$livre2=new Livre('Simetierre',374,1983,15,$StephenKing);
$livre3=new Livre('Le Fléau',823,1978,14,$StephenKing);
$livre4=new Livre('Shining',447,1977,16,$StephenKing);

var_dump($StephenKing);

$StephenKing->afficherBibliographie();

$ReneBarjavel = new Auteur("BARJAVEL","René","24-01-1911");
$livre5 = new Livre ("La nuit des temps",381,1968,15,$ReneBarjavel);
$livre6 = new Livre ("Le grand secret",450,1973,14,$ReneBarjavel);
$livre7 = new Livre ("L'enchanteur",502,1984,18,$ReneBarjavel);

var_dump($ReneBarjavel);
$ReneBarjavel->afficherBibliographie();
var_dump($ReneBarjavel);