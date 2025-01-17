<?php
$p = 'plik.txt';
if(is_file($p)){
    echo "Plik istnieje";
}else{
    echo "Plik nie istnieje";
}
?>