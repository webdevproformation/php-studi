<?php 

class A {
    public $url = "http://yahoo.fr";
    public function a(){}
}

class B{
    public $url = "http://yahoo.fr";
    public function b(){}
}

//héritage copier méthode / propriété entre un class parent et ses class enfant (hérité)

class CParent{
    public $url = "http://studi.fr";
}

class AEnfant extends CParent{
    public function a(){}
}

class BEnfant extends CParent{
    public function b(){}
}

$a = new AEnfant();

var_dump($a->url); 
$a->a();

$b = new BEnfant();
var_dump($b->url);
$b->b();

// $b->a(); // erreur
// Fatal error: Uncaught Error: Call to undefined method BEnfant::a()