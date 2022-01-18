<?php 

var_dump($_SERVER["REQUEST_URI"]); 
var_dump($_SERVER["SERVER_NAME"]); 
var_dump($_SERVER['SCRIPT_FILENAME']); 

// déterminer l'url de la page en cours => concaténation

$urlPageEnCours = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER['REQUEST_URI']) ;

$urlPageEnCours = dirname($urlPageEnCours); 

var_dump($urlPageEnCours); 

echo "<a href='$urlPageEnCours/image.jpg'>ouvrir l'image</a>"; 

echo "<hr>";

var_dump($_SERVER);

// [ .... ]
// permettre de savoir quel est le fichier .php dans votre site internet qui est exécuté 

// 