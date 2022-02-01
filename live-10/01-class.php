<?php 

class EtudiantSuperieur {  // norme / convention de nommage des class 
    // PascalCase => 
    // change rien dans l'exécution du code 
    // mais variable Majuscule => class
}

// EtudiantSuperieur => class

// super variable 
// variable qui peut contenir des variables avec des valeurs mais aussi des fonctions 

//pas possible d' utiliser une class Directement dans votre code 

// var_dump(EtudiantSuperieur); pas possible

// à partir d'une class créer objet / instance de class 


$etudiant = new EtudiantSuperieur() ; 
// $etudiant => objet / instance de class 

// dans la class définir ce que va faire l'objet 
// class => moule à gâteau
// MAIS on ne peut pas utiliser la class directement dans le code 
// il faut au préalable créer une instance de class => objet
// produire avec la class => gâteau

var_dump($etudiant); 
// object(EtudiantSuperieur)[1] // id dans la mémoire
// object
// de quel type => EtudiantSuperieur
// [1]  // id dans la mémoire

// 