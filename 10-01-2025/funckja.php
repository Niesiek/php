<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>W podanym przykładzie funkcja nie zostanie wyświetlona, do póki nie zastosujemy zmiennej global</p>
    <?php
    $zm = 1;
    function pokaz(){
        global $zm;
        echo "Wartość zmiennej \$zm wynosi: $zm. <br> ";
    }
    pokaz();
    ?>
</body>
</html>