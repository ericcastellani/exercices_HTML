<?php
echo "Exercice n° 6 partie 2<br>";
$elements = ["monsieur","madame","mademoiselle"];
function alimenterListeDeroulante ($elements){
	$result ="";
	foreach ($elements as $genre){
		$result .="
			<label for ='$genre'>$genre</label>
			<select name = '$genre' id='$genre'>
				<option value = '$genre'>$genre</option>
			</select>
			</label>";
}
	return $result;}

echo alimenterListeDeroulante($elements);