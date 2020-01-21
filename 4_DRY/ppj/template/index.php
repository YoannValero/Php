<!DOCTYPE html>
<html lang="en">

<?php include 'config/config.php'; ?>

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title><?= title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="<?= cheminCss ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <!-- NAV -->
    <?php include 'template-parts/menu.php';
    include 'config/router.php';
  
    $init = new Router;
    $init->getTemplate(root, 'accueil.php');

    ?>
    <!-- Footer -->
    <?php require 'template-parts/footer.php' ?>

</body>

</html>