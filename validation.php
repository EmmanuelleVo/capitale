<?php

function validated():array {
    $countries = require('data/countries.php');
    $countrySelected = urldecode($_GET['country']);
    if (array_key_exists($countrySelected, $countries)) {
        //retourne un tableau dont la clé est $countrySelected et sa valeur les infos de $countrySelected
        return [$countrySelected => $countries[$countrySelected]];
    } else {
        return ['error' => 'Ce pays ne fait pas partie de nos listes.'];
    }

}