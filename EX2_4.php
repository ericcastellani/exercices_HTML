<?php

// DECLARATION DES VARIABLES //

$capitales = [
   "France" => "paris",
   "Allemagne" => "Berlin",
   "USA" => "Washington",
   "Italie" => "Rome",
   "Espagne" => "Madrid"
];

// AFFICHER TABLE HTML AVEC LIENS HYPERTEXTE  //

function afficherTableauLiens (array $capitales = ["pays" => "ville"]): string {
    ksort ($capitales);
    $result = "<table border= 1>
            <thead>
                <tr>
                    <th>Pays</th>
                    <th>Capitale</th>
                    <th>Lien WIKI</th>
                </tr>
            </thead>
            <tbody>";
            foreach ($capitales as $pays => $ville){
                $result .= 
                    "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst ($ville)."</td>
                        <a href="https://fr.wikipedia.org/wiki/" target ="_blank">lien </a>
                   </tr>";

            }
                $result .="</tbody></table>";
                return $result;
    }
echo afficherTableauLiens($capitales);

