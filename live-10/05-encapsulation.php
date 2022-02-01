<?php 

// 05-encapsulation.php

class A {
    public $prop1 = 10;
    public function method1(){}
}

// propriété et méthode public => possible utiliser hors de class (via un objet)

$a = new A();
var_dump($a->prop1); // lire le contenu de prop1 hors de la class
$a->prop1 = "bonjour"; // modifier le contenu de prop1 hors de la class
var_dump($a); 

class B{
    public $prop2 = 12 ;
    private $prop1 = 20 ;
    private function method1(){}

    // ascesseur getter
    public function getProp1(){
        return $this->prop1;
    }
    // setter 
    public function setProp1($val){
        if(gettype($val) === "integer" && $val >= 20) {
            $this->prop1 = $val ;
        } 
    }
}
// utilisable QUE dans la class // impossible d'utiliser prop1 et son contenu directement hors de class 

$b = new B();
//var_dump($b->prop1); // Fatal error: Uncaught Error: Cannot access private property B::$prop1 
// $b->prop1 = "modification" ; 
var_dump($b->getProp1());

// contrainte => code PREVISIBLE à moyen et long terme

