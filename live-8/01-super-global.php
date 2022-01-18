<?php

// variable classique (de base) globale MAIS non utilisable dans les déclaration de fonctions
$variable = 10 ; // variable classique PHP 

// constante
define("LARGEUR" , 30); 

function calculDistance(){
    global $variable ; //  dire à PHP que l'on veut utiliser la variable global $variable => utiliser dans la déclaration de la fonction 
    echo $variable ; 
}

// Warning: Undefined variable $variable 
calculDistance();


