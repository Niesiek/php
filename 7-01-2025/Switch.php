<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $kolor = "red";
    switch($kolor){
        case "red":
            echo "Dominującym kolorem jest czerwony";
            break;
        case "blue":
            echo "Dominującym kolorem jest niebieski";
            break;
        case "green":
            echo "Dominującym kolorem jest zielony";
            break;
        default:
            echo "Brak dominującego koloru";
    }
    ?>
</body>
</html>