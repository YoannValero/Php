<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $hello = "Hello"; 
        //Afficher la variable $hello//
        // echo $hello;

        $world = "World"; // String
        echo $hello.','.$world. '!<br> ';
       
        $helloWorld = $hello.' '. $world;
        echo $helloWorld. '<br>';

        $montantHt = 15.2;
        $montantTtc = 'Le montant TTC est '.$montantHt * 1.2 ;
        echo $montantTtc;
    ?>
</body>
</html>