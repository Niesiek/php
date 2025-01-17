<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function dodaj($a, $b){
        $c = $a + $b;
        return $c;
    }
    $suma = dodaj(14, 7);
    echo "Suma: $suma";
    ?>
</body>
</html>