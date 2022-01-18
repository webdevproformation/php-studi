<?php 
// utiliser une fonction 
session_start(); // permet de dire à PHP de créer la super globale $_SESSION
// créer un fichier dans le dossier xampp/tmp/sess_.........
// PHP émettre un Cookie de session .........
// stocker le ou les valeurs 
// toutes les valeurs stockées dans le tableau associatifs $_SESSION => stockée dans le fichier en format serialize() tableau => string en gardant sa structure ! 

var_dump($_SESSION); // Warning: Undefined variable $_SESSION
// tableau vide 

// permet de stocker des informations de manière persistante au niveau de chaque internaute

// PHP va créer un fichier qui stocker pendant toute la navigation de l'internaute (personne qui va venir voir votre site des informations sur cette personne )

$urlPageEnCours = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI'] ;

$urlPageEnCours = dirname($urlPageEnCours); 

echo "<a href='$urlPageEnCours/06-paiement.php'>accéder à la page de paiement</a>"; 

$_SESSION["panier"]  = [  
        [ "ref" => 1234 , "nom" => "produit 1" , "qte" => 3 , "prixUnitaire" => 10 ] ,
        [ "ref" => 1235 , "nom" => "produit 2" , "qte" => 1 , "prixUnitaire" => 30 ] ,
        [ "ref" => 1236 , "nom" => "produit 3" , "qte" => 10 , "prixUnitaire" => 40 ] ,
        [ "ref" => 1237 , "nom" => "produit 4" , "qte" => 2 , "prixUnitaire" => 50 ] ,
    ];

