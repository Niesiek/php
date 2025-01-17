<?php
$tekst = "Barbarzyńcy, gdy przyjdą, ustanowią prawa.\n";
if(!$p = fopen('dane.txt','a')){
    echo "Nie mozna otworzyc pliku dane.txt";
}else{
    if(fwrite($p, $tekst) === false){
        echo "zapis do pliku nie powiódł się";
    }else{
        echo $tekst;
    }
}
fclose($p);
?>