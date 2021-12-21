<?php 

// boolean => 2 valeurs pour une variable qui stocke un boolean
// true    false 

$test1 = "true" ; // string 
$test2 = true ;  // boolean var_dump()

$test3 = false ; 

// réaliser des opérations de type comparaison entre plusieurs valeurs 
// le résultat est un boolean 

$estMajeur = 18 > 12 ; // true  

var_dump($estMajeur) ; 

$true = false ; // c'est pas conseillé mais possible de créer une variable $true 

// les opérateurs de comparaison 
// > strictement supérieur
// < strictement inférieur
// >= supérieur ou égal   ATTENTION => n'existe pas
// <= inférieur ou égal   Attention =< n'existe pas 
// != différent 
// == égale en valeur 

// === égale en type et en valeur => égalité stricte 
// !== strictement différent 

$isOK = "bonjour" == "hello" ;  // false 
var_dump($isOK); 

$isOK2 = "bonjour" != "hello" ; // true 
var_dump($isOK2); 

// quelle est la différence entre == et ===

$verif1 = 2 == 2 ;  // true
var_dump($verif1) ; 

$verif2 = "2" == 2 ; // la valeur est la même Mais string == int
//$verif2 = "2" == "2" ; // true 
// transtypage // coersition de type 
// PHP et js le même comportement
var_dump($verif2); // true et non false ???? 

$verif3 = "2px" == 2 ; 
var_dump($verif3); // false et c'est normal

$verif4 = "2" === 2 ;  // PHP et js le même comportement
var_dump($verif4); // false !!! 

// $verif5 = "2" = 2 ; // Parse error: syntax error, unexpected token "="

// = affectation stocker une valeur dans une variable 
// == comparaison en valeur
// === comparaison en valeur et en type !!! 

// === erreur étrange compare des chiffres 
// "hello" === "coucou"


$toto = 2 + "4"; 
// $toto = 2 + 4; 
var_dump($toto);  // 6

$toto2 = @(12 + "20px") ;  // bizarrerie de PHP !! 
var_dump($toto2); 

// opérateurs booleans && || ! 
//                     AND OR XOR 

// site internet gmail => login et mot de passe il faut que les deux identifiants soient correctes en MEME temps 

$loginBdd = "alain";
$mdpBdd = "azerty";

$seConnecterABoiteMailGmail = "Alain" == $loginBdd && "azerty" == $mdpBdd ; 
//                                    false        &&         true 
//                                               false 

var_dump($seConnecterABoiteMailGmail); // false => les indentifiants saisis ne sont pas conformes ... réessayer ... 

$seConnecterABoiteMailGmail2 = "1lain" == $loginBdd && "qwerty" == $mdpBdd ;
//                                    false        &&         false  
//                                                false !!! 
var_dump($seConnecterABoiteMailGmail2); // false => bienvenu sur votre boite mail gmail !!! 

/* true && true => true
false && true => false
true && false => false
false && false => false */

// false && false font false?

// || pipe 

// si la personne habite dans le 92 ou 93 => elle habite en région parisienne 

$departement = 13 ; 

$isParisien = $departement  === 92 ||  $departement  === 93 ; 
//                  13 === 92      ||    13        === 93
//                  false           ||          false
//                             false 


var_dump($isParisien); 

// true || true => true
// true || false => true
// false || true => true
// false || false => false !!! 

// ! NOT => transformer un true => false 
//                         false => true 


$isAdmin = true ;
var_dump(!$isAdmin) ; // false 

$auteur = "Victor Hugo";
var_dump(!$auteur) ; // false  // transtypage transformer "string" => true 

$vide = "";
var_dump(!$vide);  // true // transtypage transformer "" => false 

$prix = -1234.12;
var_dump(!$prix) ; // false // transtypage transformer le chiffre en  => true 

$gratuit = 0 ;
var_dump(!$gratuit) ; // true // transtypage transformer 0 => false 









