<?php
echo "Exercice n° 6 partie 2<br><br>";
$elements = ["Monsieur","Madame","Mademoiselle"];
$genre="monsieur";
function alimenterListeDeroulante ($elements){
	$result =
	"<label for =''>Genre  :</label>
	<select name = '' id=''>";
	foreach ($elements as $genre){
	$result .="
	<option value = '$genre'>$genre</option>";
}
	return $result;}

echo alimenterListeDeroulante($elements);