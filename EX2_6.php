<?php

$elements = ["Monsieur","Madame","Mademoiselle"];
function alimenterListeDeroulante ($elements){
	$result ="";
	foreach ($elements as $genre){
		$result .="
			<for label ='$genre'>$genre</label>
			<select name = '$genre' id='$genre'>
			<option value = '$genre'>$genre</option><br>";
}
	return $result;

echo alimenterListeDeroulante($elements);}