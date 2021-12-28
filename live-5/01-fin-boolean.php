<?php 

// empty() isset()
// fonction native de php 

// est ce que la variable existe ET sa valeur n'est pas vide 
//existe => est ce que la variable a été créé avant 
// est ce que la variable contient une valeur vide (ou null)
$verif1 = empty($a) ; 

var_dump($verif1); // true

$b = null ; 
$verif2 = empty($b); 
var_dump($verif2);  // true

// variable stocke les valeurs suivantes null "" 0 [] false
$c = 0 ;
var_dump(empty($c)); // true 
var_dump(empty("")); // true 
var_dump(empty([])); // true 
var_dump(empty(null)); // true 
var_dump(empty(false)); // true 

$texte = "coucou les amis!";
var_dump(empty($texte)); // false

$tableau = [1];
var_dump(empty($tableau)); //false


// isset() => permet de vérifier uniquement si la variable existe 
$tata = [] ; 
var_dump(isset($tata)); // true => existe quelquesoit sa valeur
var_dump(empty($tata)); // true => existe ET sa valeur est vide "" 
var_dump(isset($toto)); // false


$titre = "article 1";
var_dump(isset($titre)); // true => existe
var_dump(empty($titre)); // false => existe mais son contenu n'est pas vide

$formation = [
    "budget" => 100 ,
    "unite" => "euros",
    "description" => ""
];

var_dump(isset($formation["description"])); // true
var_dump(empty($formation["description"])); // true

var_dump(isset($formation["inconnue"])); // false
var_dump(empty($formation["inconnue"])); // true

// formulaire 






