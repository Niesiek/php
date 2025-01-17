<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$x = 7;
echo $x++; echo "<br>";
echo ++$x; echo "<br>";
$v = $x;
$t = $x++;
$z = $x;
$y = ++$x;

echo "Wartość zmiennej \$v = $v<br>";
echo "Wartość zmiennej \$t = $t<br>";
echo "Wartość zmiennej \$z = $z<br>";
echo "Wartość zmiennej \$y = $y<br>";
?> 
</body>
</html>
