<?php 

$chiffre1 = 10 ;
$chiffre2 = 20 ; // int

// 4 opérations de base => addition / soustraction / multiplication / division

$addition = $chiffre1 + $chiffre2 ;

var_dump( $addition ); // 30 

// lancer serveur local => XAMPP 

$soustraction = $chiffre1 - $chiffre2 ; // -10

$multiplication = $chiffre1 * $chiffre2 ; // 200

$division = $chiffre1 / $chiffre2 ; //0.5 float

var_dump($soustraction , $multiplication , $division);

// puissance et reste entier 

// 2 puissance 3 => 2 x 2 x 2

$puissance = 2 ** 3 ;

var_dump($puissance); 

// % => 

// 10 / 5 => resultat => 2 reste 0 

$resteEntier = 10 % 5 ;

var_dump($resteEntier); 

// 10 / 3 => valeur 3 reste entier 1

$resteEntier2 = 10 % 3 ;

var_dump($resteEntier2);

// est ce que un chiffre est un multiple d'un autre 

// est ce que 30 est un multiple de 2 ??? 

// est que le reste entier == 0

$resteEntier3 = 30 % 2 ; // 15 0

var_dump($resteEntier3 == 0) ; 

// + - * / ** % 

// % modulo 

// opérateurs unaires => variable opérateur 

$operation = 12 + 10 ;

// opérateur chiffre

// +=
// -=
// *=
// /=
// ++
// -- 

$total = 100 ;
// prendre $total augmenter "Elle même" de + 10
$total = $total + 10 ;

var_dump($total); // 110

// utiliser opérateur unaire pour réaliser la même opération

$total += 10 ;

var_dump($total); // 120

// enlever 30 au total
$total = $total - 30 ; // 90
$total -= 30 ;  // 60
var_dump($total); 

// appliquer la tva 20% 

// $total = $total * 1.2 ;
$total *= 1.2 ; // 60 * 1.2

var_dump($total); // 72 float résultat int * float 

// ++ 
// permet d'augmenter la valeur stockée dans la variable de +1

$distance = 10 ;
$distance = $distance + 1;
$distance += 1 ;
$distance++ ; // très très utilisé => boucle for(){}
             // post incrémentation 
++$distance ; // pré incrémentation


$largeur = 30 ;
$a = $largeur++ ;
var_dump($a , $largeur); // 30 31 

$hauteur = 12; 
$b = ++$hauteur ; 
var_dump($b , $hauteur); // 13 13


$test = 10 ;
$test **= 2 ;
var_dump($test);

$test2 = 5;
$test2 %= 2; 
var_dump($test2); 

//






















