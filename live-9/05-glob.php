<?php

$imgs = glob("./img/*");  // liste de tous les dossiers / fichiers dans le dossier en cours du fichier .php exécuté

foreach($imgs as $img){
    echo "<img src=\"$img\" alt=\"\" style=\"max-width:200px\">";
}