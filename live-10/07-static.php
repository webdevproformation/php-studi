<?php 

class Librairie{
    static public $prix = 123 ; // propriété statique

    static public function addition(){} // méthode statique
    static public function multiplication(){}
    static public function soustraction(){}

    static public function faireCalcul(){
        self::multiplication();
        var_dump(self::$prix); 
    }
}

// méthode static : méthode que l'on peut utiliser dans avoir besoin d'instancier la class hors de la class

/* $l = new Librairie();
$l->addition();  */

Librairie::addition(); 
var_dump(Librairie::$prix); 

Librairie::faireCalcul(); 