<style>
    *{margin:0;padding:0;}
</style>
<?php

// Un boucle qui définit 5 numéro au hasard dans un tableau 
function titi($number = 5) {
    $arr = [];
    $i = 1;
    while ($i <= $number) {
        $ramdom = rand(1, 49);
        if(!isset($number[$ramdom])) {
        array_push($arr, $ramdom);
        $i++;
        }
    }
    return $arr;
}

// ===========================================================================

// Une autre boucle qui va définir le nombre de tirage de 5 numéros au hasard dans un tableau respectif
function allTirages($nb) {
    $j = 1;
    while ($j <= $nb) {
        $fisrtTirage[] = titi();
        $j++;
        // var_dump($fisrtTirage);
    }
    return $fisrtTirage;
}
$allArray = allTirages(3); // Choose number of loto ==> Create 1 array foreach loto
var_dump(['chaque grille loto' => $allArray]);

$merge = array_merge($allArray[0], $allArray[1],$allArray[2]); // Merge each loto array
var_dump(['Grilles Loto mergé' => $merge]); // All number 

// ==============================================================================

// Statistiques Loto 
function occurences($stats) {
    return array_count_values($stats);
     // Statistiques Loto
     
}
$testStats = occurences($merge);
var_dump(['statitique loto  ' => $testStats]);

// function occurences($allArray)
// {
//     $firstArray[] = array_count_values($allArray[0]); //$sirstArray[] ===> méthode push in array;
//     $firstArray[] = array_count_values($allArray[1]);
//     $firstArray[] = array_count_values($allArray[2]);
//     return $firstArray;
// }
// occurences($allArray);
// $lol = occurences($allArray);
// // var_dump($lol);
// // $loul = array_merge_recursive($lol[0], $lol[1], $lol[2]);
// // var_dump($loul);

// ====================================================

// Create lotery of 5 number

// Test if $champagne win lotery 
$resultatLoto = titi(5);
var_dump(['Résultat Loto' => $resultatLoto]);

function testTirage($keys) {
    $champagne = titi(5);
    // var_dump($champagne); // tirage à tester
    $valueChampagne = array_count_values($champagne);
    var_dump(['Mes numéros que je choisi alétoirement' => $valueChampagne]); 
    foreach($keys as $key => $value) {
        if( array_key_exists( $key , $valueChampagne)) {
            echo "<p style='color:green; font-size:50px;'> $key est dans le tirage</h1> <br>";
        } else {
            echo "<p style='color:red'> $key n'est pas dans le tirage</p> <br>";
        }
    }
}
testTirage($testStats);























  
            




































// var_dump($array);

// $bonjour = "bonjour";

// function afficheB($bonjour) {
//     return $bonjour;
// }
// afficheB($bonjour);
// var_dump($bonjour);
// $i = 1;
// while ($i <= 10) {
//     echo $i++.'<br>';  /* La valeur affichée est $i avant l'incrémentation
//                         (post-incrémentation)  */
// }


// Création d'un tableau simple.
// $array = array(1, 2, 3, 4, 5);
// var_dump($array);

// // Maintennant, on efface tous les éléments, mais on conserve le tableau :
// foreach ($array as $i => $value) {
//     unset($array[$i]);
// }
// var_dump($array);

// // Ajout d'un élément (notez que la nouvelle clé est 5, et non 0).
// $array[] = 5;
// var_dump($array);

// // Ré-indexation :
// $array = array_values($array);
// $array[] = 7;
// var_dump($array);

// $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
// $rand_i = array_rand($input, 2);
// echo $input[$rand_i[0]] ;
// echo $input[$rand_i[1]] ;


// $valeurs = range(1, 40);
// $proba = array_fill(1, 40, 0);
// for ($i = 0; $i < 10000; ++$i)
// {
//     $tirage_tab = array_rand($valeurs, 10);
//     foreach($tirage_tab as $key => $value)
//     {
//         $proba[$valeurs[$value]]++;
//     }
// }

// asort($proba);
// echo "Proba : <br/>\n";
// foreach($proba as $key => $value)
// {
//     echo "$key : $value<br/>\n";
// }
