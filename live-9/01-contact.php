<?php 
// du html qui utilise nos fonctions 
// ajouter du html ET exécuter des fonctions // faire des boucles

// Fatal error: Uncaught Error: Call to undefined function renderNavBar() 
//require ("01-helper.php") ;
require "01-helper.php" ;
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
    <div>
       <h1> bienvenu sur la page contact </h1>
    </div>
</body>
</html>
