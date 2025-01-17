<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function napis(){
        echo "<h2> Programuj w php</h2>";
    }
    ?>
    <?php
    function dodaj($a, $b){
        $c = $a + $b;
        echo "Wynik dodawania $a i $b to ". $c;
    }
    dodaj(15,37);
    ?>
    
</body>
</html>