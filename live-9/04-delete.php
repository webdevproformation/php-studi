<?php 
$file = "assets";
if(file_exists($file) && is_dir($file)){
    rmdir($file);
    echo "le fichier $file vient d'être supprimé";
}else {
    echo "le fichier $file n'existe pas ???...";
}