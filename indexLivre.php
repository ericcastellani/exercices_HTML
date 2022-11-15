<?php

require "livre.php";
require "auteur.php";

$StephenKing = new Auteur ("KING", "Stephen", "03-05-1947");



$livre1=new Livre('ca',1138,1986,20,$StephenKing);


$livre2=new Livre('Simetierre',374,1983,15,$StephenKing);

$livre3=new Livre('Le Fléau',823,1978,14,$StephenKing);

$livre4=new Livre('Shining',447,1977,16,$StephenKing);

echo $StephenKing;
