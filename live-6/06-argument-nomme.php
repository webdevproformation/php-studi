<?php 

// https://www.php.net/manual/fr/functions.arguments.php#functions.named-arguments

function triangle ( $largeur , $hauteur , $couleur , $profondeur , $prix){
 var_dump($profondeur);
 var_dump($hauteur);
}


// rappeler le nom de votre paramètre au moment de  l'exécution 
// argument nommé => PHP8 

triangle(largeur: 10 , hauteur :20 , couleur : "#000" , prix: 40 , profondeur: 444) ; 