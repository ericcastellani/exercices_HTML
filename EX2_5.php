<?php

// DECLARATION DES VARIABLES	//

$nomsInput=["Nom","Prénom","Ville"];


// function afficherInput ($nomsInput ){
	//$result ="<input type ='texte'";
		//foreach($nomsInput as $nominput){
		//return $result;}}

//echo afficherInput ($nomsInput);
				
function afficherInput ($nomsInput){
	$result = "";
	foreach ($nomsInput as $nom){
		$result .= "
			<label for='$nom'>$nom</label><br>
			<input type='text'id='$nom' name='$nom'><br>"; 
	}
	return $result;
} 
	
	


echo afficherInput($nomsInput);