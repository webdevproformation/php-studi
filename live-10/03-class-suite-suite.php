<?php 
// fonction de base dans PHP
function calcul($a , $b){
    return $a + $b ; 
}

class Vehicule{ // PascalCase
    // fonction qui est stockée dans une class 
    // méthode de class
    public function faireBruit(): void{ // camelCase 
        var_dump("VROUM!"); 
    }

    public function getProprietaire() :string {
        return "moi";
    }

    public function getAnneeAchat( DateTime $annee   ) :DateTime{

        return $annee; 
    }
}

// faireBruit(); //Fatal error: Uncaught Error: Call to undefined function faireBruit() 

$v = new Vehicule();
$v->faireBruit() ; 
var_dump($v->getProprietaire());
var_dump($v->getAnneeAchat( new DateTime() )); 

// static => juste après
//