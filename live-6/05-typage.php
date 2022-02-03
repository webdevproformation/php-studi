<?php 

// à partir de PHP 7
// https://www.php.net/manual/fr/language.types.declarations.php

function calcul( int $prix , mixed $list , bool $status = true) : void {
    /*  if($prix < 10 && gettype($list) == "array"){
        return 10;
    }
    return "bonjour"; */
    var_dump("tata");
}   

$resultat = calcul(2 , "coucou"  ); 
var_dump($resultat);

// Fatal error: Uncaught TypeError: calcul(): Argument #1 ($prix) must be of type int, string given, 