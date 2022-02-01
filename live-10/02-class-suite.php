<?php 

// définir => écrire / stocker
// variable => propriété de la class
// fonction => méthode de la class
// l'ensemble des propriétés / méthodes dans le class => membres de la class
//$taille = 200;

class Arbre{
    public $taille = 1500 ; // QUE dans la class
    public $unite = "m" ;
    public $nom = "chêne" ; 
}

// var_dump($taille); // Warning: Undefined variable $taille 

// pour récupérer valeur stockée dans une class => générer au préalable un objet

$arbre = new Arbre(); // OBLIGATOIRE

// utiliser une propriété $taille AVEC l'objet 

var_dump($arbre->taille); // 

// écrire dans la page html => 
// j'ai un arbre de 200 cm dans mon jardin

$phrase = "j'ai un arbre de ". $arbre->taille . " " . $arbre->unite . " dans mon jardin"; 

var_dump($phrase); 

// class / objet => ORGANISER des concepts dans votre projet 
// dans un espace => dans un class => objet 

// -> c'est pareil que =>
// -> en PHP et instance de class
// => en PHP mais pour les tableaux associatifs

$tab = [
    "un" => 1 ,
    "deux" => "information"
]; 

// en PHP la syntaxe n'existe pas ... $var = ($a) => { }
