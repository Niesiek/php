<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i = 150; $i >= 100; $i--){
        if(($i % 5)!=0) continue;
        echo "$i<br>";
    }
    ?>
</body>
</html>