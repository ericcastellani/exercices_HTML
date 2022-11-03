<a href=".">Retour</a>

<h1>Exercice 10</h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>

<h2>Résultat</h2>

<?php

    $coordonnees = ["Nom" => "text", "Prenom" => "text", "Email" => "email", "Ville" => "text"];
    $sexe = ["Masculin", "Féminin", "Autre"];
    $formations = ["Dév web", "Designer web", "Intégrateur", "Chef de projet"];

    echo formulaire($coordonnees, $sexe, $formations);

    function formulaire(array $coordonnees, array $sexe, array $formations) {
        $result = "<form action='#' method='POST'>";
        $result .= input($coordonnees);
        $result .= radio($sexe);
        $result .= dropdown($formations);
        $result .= "<br><input type='submit' value='Valider'>";
        $result .= "</form>";
        return $result;
    }
    
    function input(array $array) {
        $result = "";
        foreach($array as $input => $type) {
            $minInput = strtolower($input);
            $result .= "<label for='$minInput'>$input</label><br>
                        <input type='$type' name='$minInput' id='$minInput'><br>";
        }
        return $result;
    }
    
    function radio(array $array) {
        $result = "";
        foreach($array as $radio) {
            $minRadio = strtolower($radio);
            $result .= "<input type='radio' name='sexe' id='$minRadio'>
                        <label for='$minRadio'>$radio</label><br>";
        }
        return $result;
    }
    
    function dropdown(array $array) {
        $result = "<select name='formations'>";
        foreach ($array as $option) {
            $result .= "<option value='$option'>$option</option>";
        }
        $result .= "</select>";
        return $result;
    }
?>