<?php 


// class qui contient à la fois des propriétés et des méthodes

class Formation {
    public $nom = "développeur web"; 
    public $organisme = "Studi";
    public $duree = 12 ;
    public $unite = "mois";

    public function description() :void{
        // $this => mot clé comme function public class 
        // $this permettre d'utiliser les propriétés et les méthodes DANS la class 
        var_dump($this->duree) ;
    }

    public function descriptionComplete(){
        // je suis une formation de 12 mois ;
        return "je suis une formation de " . $this->duree . " " . $this->unite ;
    }

    public function utiliseFonction(){
        var_dump($this->descriptionComplete() . " auprès de " . $this->organisme); 
    }
}

// hors de ma class 
$f = new Formation(); // OBLIGATOIRE 
var_dump($f->duree); 

var_dump($f->descriptionComplete()); 

$f->utiliseFonction();

// je comprends pas trop.. est ce que on peux parler de constructeur de classe en php.. ou les class c'est une sorte d'objets

// 05-encapsulation.php