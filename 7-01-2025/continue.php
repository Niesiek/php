<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i = 0; $i <= 30; $i++){
        if(($i % 3)!=0) continue;
        echo "$i <br>";

    }
    $_COOKIE = $_COOKIE;
    $_REQUEST = $_REQUEST;
    if(isset($_COOKIE)){
        echo "$_COOKIE<br>";
        echo "Witaj na stronie <br>";
    }
    ?>
</body>
</html>