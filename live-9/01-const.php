<?php 

define("DOMAIN" , "exemple.com");

// Fatal error: Cannot redeclare calcul()
$DOMAIN = "exemple.com" ; 
function calcul(){}; 
