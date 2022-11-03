<?php
echo "Exercice 10 partie 2 PHP <br>";

$formulaire = "<form action='#' method='POST'>
<h2>FORMULAIRE D'INSCRIPTION</h2>
<h3>Etat civil</h3>
<label for ='txtnom'>Nom</label>
<input type='text' id='txtnom' name='nom'><br><br>
<label for ='txtprenom'>Prenom</label>
<input type='text' id='txtprenom' name='prenom'><br><br>
<label for ='txtemail'>Adresse mail</label>
<input type='email' id='txtemail' name='adressemail'><br><br>
<label for ='txtville'>Ville</label>
<input type='text' id='txtville' name = 'ville'><br><br>
<br>
<label for='genre'>Sexe</label>
<select id='genre' name='Sexe'>
    <option value =''></option>
    <option value ='homme'>Homme</option>
    <option value ='femme'>Femme</option>
</select>
</label>
<br><br>
<h3>Formation souhaitée</h3>
<br>
<label for='formation'>Métier</label>
<select id='formation' name='metier'>
    <option value =''></option>
    <option value ='developpeurlogiciel'>Développeur logiciel</option>
    <option value ='designerweb'>Designer web</option>
    <option value ='integrateur'>Intégrateur</option>
    <option value ='chefdeprojet'>Chef de projet</option>
</select>
</label>
<br><br>
<p>Appuyez sur 'Soumettre' pour envoyer le formulaire : </p>
<input type = 'submit'>
</form>";


function afficherFormulaire($formulaire){
    $result = $formulaire;
    return $result;
}
echo afficherFormulaire($formulaire);
