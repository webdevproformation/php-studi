<?php 

// 5 grandes catégories de valeurs que l'on peut stocker 
// variable / constante 

// chaine de caractère => string 

$auteur = "Victor Hugo" ; 
$auteur2 = 'George Sand' ; // méthode qu'il conseille 
$citation = 'Victor Hugo a dit "ou et donc or ni car "' ; 
$citation2 = "Victor Hugo a dit \"ou et donc or ni car \"" ; 

$phrase = 'bonjour les amis
comment allez vous ??
aujourd\'hui';

// nombre : nombre entier 1,2 ,10 , 20
//          float nombre à virgule 1.2

$prix = 12.5 ; 
define("REDUCTION" , 0.2) ; 

$temperature = -5 ; 

var_dump($temperature); // int => integer => nombre entier 
var_dump(REDUCTION);    // float => chiffre à virgule flottante => nombre à virgule 

// xdebug 
// <pre></pre>
echo "<pre>";
print_r($temperature);
echo '<br>';
print_r(REDUCTION);
echo '<br>';
print_r($temperature);
echo '<br>';
print_r(REDUCTION);
echo '<br>';
echo "</pre>"; 


// boolean 
$isRedacteur = true ; // true VALEUR => mot clé du langage PHP define() echo 
// var_dump
$isRedacteur2 = "true" ; // ce n'est pas un boolean => string 

$isAdmin = false ; 

$isAvailable = 10 > 3 ; 

// string / number (int / float) / boolean 
// valeur primitive 
// 1 variable = 1 seule valeur 

// valeurs scalaires 
// stocker dans une variable plusieurs valeurs en même temps 

// tableau => array 

// 2 manières de créer des tableaux en PHP 
// vieille de PHP 

$saisons = array("été" , "printemps", "automne", "hiver" );

// à partir de la version 5.3 => deuxième méthode qui a été ajoutée

$fleurs = [ "jasmin" , "rose" , "lilas" ]; 

echo $saisons ; // Warning: Array to string conversion
echo "<pre>";
print_r($saisons); 
echo "</pre>";

var_dump($fleurs); 

$parametre = [2 , "toto" , true , []]; 

// tableau indexé => les valeurs dans le tableau sont utilisables via le position qui est numéroté 

var_dump($parametre[0]); 

// tableaux associatifs 

$data = [
    "largeur" => 200, // "index nommé" => valeur
    "unite" => "px",
    "couleur-fond" => "red"
]; 

$data2 = array( 
    "police" => "arial",
    "font-weight" => 500 ,
    "border" => "2px solid green"
);


// objet 
// PHP il faut D'abord créer un class => avoir un objet 

class Etudiant{
    public $nom = "Alain";
    public $age = 22 ;
    public $competences = ["PHP", "html css" , "Javascript"]; 
}

$etudiant = new Etudiant(); 
// $etudiant instance de class => objet 

var_dump($etudiant->nom); 

var_dump($etudiant); 

// résoudre un problème en informatique 
// variables stocker des valeurs 
// string / number / boolean / tableau (indexé / associatif) / class / objet

// ORGANISER votre code !! 

// https://github.com/webdevproformation/php-studi

// caniuse.com = HTML CSS Javascript 
// PHP w3school 
// support studi 
// EOL => End of Line \n
echo "<pre>";
print_r("bonjour" . PHP_EOL . "comment allez vous ??");
print_r("bonjour2 \n comment allez vous ??");
echo "</pre>";


// Armandine BARGE

$width = 300 ; 

// Adama DOUCOURE => cours spéciale class / new / objet 
// live 9 POO Programmation Orientée Objet 

// https://www.php.net/manual/en/reserved.constants.php