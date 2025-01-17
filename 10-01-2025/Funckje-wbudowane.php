<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tab = array("e1", "e2", "e3", "e4", "e5");
    $dl = count($tab);
    for($i = 0; $i <$dl; $i++ ){
        echo $tab[$i], " ";
    }
    ?>
    <br><br><br><br>
    <?php
    $tablica = array("4", "1", "2", "3", "5");
    echo "Wartość tablicy przed sortowaniem: <br>";
    foreach($tablica as $klucz){
        echo "$klucz ";
    }
    sort($tablica);
    echo "<br> Wartość tablicy po sortowaniu: <br>";
    foreach($tablica as $klucz){
        echo "$klucz ";
    }

    ?>
</body>
</html>