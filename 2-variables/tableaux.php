<?php

$tab = array(15,22);
$tabCrochets = [15,22];

var_dump($tab);
var_dump($tabCrochets);

$jours = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
$dimanche = 'Dimanche';
array_push($jours,$dimanche); // push in an array 
var_dump($jours);

// unset($jours[6]);
// unset($jours[array_search('Dimanche', $jours)]);
array_pop ($jours); // Delete last elt in array
var_dump($jours);

?>