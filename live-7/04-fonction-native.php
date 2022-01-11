<?php 

/**
 ajouter des valeurs dans un tableau : 
  - array_push() , 
  - array_unshift()
- modifier des valeurs dans un tableau 
	- via l'index
	- via array_splice()
- supprimer des éléments dans un tableau : array_splice() array_pop() array_shift() unset()

- autres méthodes de tableaux : array_sum(), count() , current() , end() , in_array() array_key_exists
https://www.php.net/manual/fr/ref.array.php => liste complète de toutes les natives de php pour manipuler les tableaux 

 */

$stack = ["orange", "banana"]; // array("orange", "banana");

array_push($stack, "apple", "raspberry" , 1 , false , [1,2]);

var_dump($stack);

// $stack = ["orange", "banana","apple", "raspberry" , 1 , false , [1,2]]


array_unshift($stack , "lundi" , "mardi") ; 

// $stack = ["lundi" , "mardi" , "orange", "banana","apple", "raspberry" , 1 , false , [1,2]]

var_dump($stack); 
$panier = [];

array_push($panier , [ "qte" => 1 , "nom" => "article1" ]);
array_push($panier , [ "qte" => 10 , "nom" => "article 25" ]);
array_push($panier , [ "qte" => 2 , "nom" => "article 99" ]);

var_dump($panier); 

// permettent de supprimer un élément dans le tableau
// unset()
// array_splice()
echo "<hr>"; 
unset($panier[0]);  // supprimer l'élément qui a l'index 0 dans $panier
// unset($panier); // supprimer TOUT $panier => supprimer la variable de la mémoire de PHP 

var_dump($panier); // Warning: Undefined variable $panier

echo "<hr>"; 

array_splice($panier , 1 );

var_dump($panier); 

