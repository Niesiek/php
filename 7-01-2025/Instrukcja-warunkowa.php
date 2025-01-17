<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 11;
    $y = 7;
    $r = $x + $y;
    if($r < 0){
        echo "Wartość zmiennej z jest ujemna";
    }elseif($r < 10){
        echo "Wartość zmiennej z jest zawarta w zakresie od 0 do 10";
    }elseif($r < 20){
        echo "Wartość zmiennej z jest zawarta w zakresie od 10 do 20";
    }elseif($r < 30){
        echo "wartość zmiennej z jest zawarta w zakresie od 20 do 30";

    }else{
        echo "Wartość zmiennej z jest większa od 30";
    }
    ?>
</body>
</html>