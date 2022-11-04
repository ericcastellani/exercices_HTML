
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	require 'utilisateur.class.php';
		$pierre = new utilisateur();//le mot new est utilisé pour instancier une classe cad créer une nouvelle instance d'une classe
		$mathilde = new utilisateur();

		$pierre->user_name = "Pierre";/*->opérateur objet. Cet opérateur 
		sert à indiquer au PHP qu'on souhaite accéder à un élement défini
		dans notre classe via un objet créé à partir de cette classe. fa-il
		n'y a pas de signe $ avant le nom de la propriété à laquelle on
		 souhaite accéder */
		$pierre->user_pass = 'abcdef';

		echo $pierre->getNom().'<br>';

		$mathilde->user_name = 'Math';
		$mathilde->user_pass = 123456;








	echo" bonjour";



?>
</body>
</html>
<?php

echo "<h4> PROGRAMMATION OBJET</h4>";
echo "En programmation orientée objet, l'objet est le nom
que l'on donne à un élément :<br>";
echo "- qui se touve dans une variale,<br>";
echo "- dans lequel on peut stocker des valeurs,<br>";
echo "- et auquel on peur demander de faire des actions<br>";
echo "Pour faire simple, c'est un regroupement de valeurs et de fonctions.<br>";
echo"Une classe est une définition qui contient le nom des propriétés qu’on pourra manipuler ainsi que des méthodes. Les propriétés, ce sont des variables internes à cette définition dans lesquelles on stocke des valeurs. Une classe a aussi des méthodes : il s’agit de fonctions internes à la classe. La classe détermine ce qu'il sera possible de faire avec l'objet.

Le fait de créer un objet à partir d’une classe s’appelle instancier une classe.";

// INSTANCIER PREMIERE CLASSE

echo "<h4>Instancier une classe</h4><br>";
$date = new DateTime(); //ex. de class déjà existante dans php
echo"Créer une instance, c'est créer un objet à partir du'une classe.<br>";
echo "En PHP, cette création est le résultat de 3 opérations :<br>";
echo"- l'allocation et l'initialisation de données,<br>";
echo"-le stockage en mémoire du nouvel objet pour suivre son état,<br>";
echo"-la construction d'une référence de l'objet pour le manipuler.<br>";

// EXEMPLE
	//Déclaration par référence avec le symbole &

//function foo(&$var){ //indique au langage de ne pas copier la valeur la fonction mais plutôt de manipuler directement la variable d'origine
/*	$var = 2;
}
$a = 1;
foo ($a);
echo foo($a);

	//Autre exemple
//$date="2018-02-23";
function foo(DateTime $date){
	$date->modify('+1 day');//permet d'ajouter 1 jour à la date
}*/
$date = new DateTime;
echo $date->format('d/m/Y');
/*
$dateUne =new DateTime;
$dateDeux = $dateUne;
$dateDeux->moditfy('+1 day');
var_dump($dateUne, $dateDeux);*/
echo "On va déjà pouvoir créer des variables à l’intérieur de nos classes. Les variables créées dans les classes sont appelées des propriétés, afin de bien les différencier des variables « classiques » créées en dehors des classes.";

echo"Une propriété, c’est donc tout simplement une variable définie dans une classe (ou éventuellement ajoutée à un objet après sa création).";
