<?php

$activites = array("Lundi"=>"Php","Mardi"=>"Javascript", "Mercredi"=>"Typescript","Jeudi"=>"Angular","Vendredi"=>"SQL","Samedi"=>"Python","Dimanche"=>"Tout");

var_dump($activites);
// var_dump($pierre);
// $activites['Dimanche'] = 'rien'; // Change value of Sunday(=clé) at 'rien'


//deux dimensions
$pierre = array("1"=>"Php","2"=>"Javascript","3"=>"Python");
$paul = array("1"=>"Javascript","2"=>"Css","3"=>"Php");
$jacques = array("1"=>"Java","2"=>"Php","3"=>"Javascript");

$preferences = array_merge($pierre, $paul, $jacques);
var_dump($preferences);
$preferencesWithName = ['Pierre'=>$pierre, 'Paul'=>$paul, 'Jacques' => $jacques];
var_dump($preferencesWithName);

var_dump(array_count_values($preferences)); // count occurences




?>