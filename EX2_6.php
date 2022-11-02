<?php
echo "Exercice n° 6 partie 2<br>";
$elements = ["monsieur","madame","mademoiselle"];
$genre="monsieur";
function alimenterListeDeroulante ($elements){
	$result =
	"<label for =''></label>
	<select name = '' id=''>";
	foreach ($elements as $genre){
	$result .="
	<option value = '$genre'>$genre</option>";
}
	return $result;}

echo alimenterListeDeroulante($elements);