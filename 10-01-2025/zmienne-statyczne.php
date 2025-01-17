<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function funk(){
    $i = 1;
    echo "Funkcja wywołana $i razy <br>";
    $i++;
    }
    funk();
    funk();
    funk();
    ?>
</body>
</html>