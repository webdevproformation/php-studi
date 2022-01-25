<?php 
// du html qui utilise nos fonctions 
// ajouter du html ET exécuter des fonctions // faire des boucles

// Fatal error: Uncaught Error: Call to undefined function renderNavBar() 
//require ("01-helper.php") ;
//require "01-helper.php" ;
//require "01-helper-html.php" ;
// Failed to open stream: No such file or directory
include "01-helper.php" ;

require_once "01-const.php";  // le message warning n'est plus affiché

require "01-bdd.php" ;
// organiser votre code 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= renderNavBar() ?>
    <?php
    if(isset($DOMAIN)){
        $titre = "bienvenu sur la page d'accueil " . $DOMAIN ;
    } else {
        $titre = "bienvenu sur la page d'accueil" ;
    }
    ?>
    <h1><?= $titre ?></h1>
    <div>
        <?php $users = getUsers() ?>
        <?php foreach($users as $user) : ?>
            <h2><?= $user["nom"] ?></h2>
            <p>qui a un id : <?= $user["id"] ?></>
        <?php endforeach ?>
    </div>
    <footer>
        <?= renderPiedPage() ?>
    </footer>
</body>
</html>
