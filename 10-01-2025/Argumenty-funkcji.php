<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function wart(&$liczba){
        $liczba += 3;
    }
    $liczba = 2;
    echo "Wartość funckji \$liczba przed wywołaniem funkcji: $liczba <br>";
    wart($liczba);
    echo "Wartość funckji \$liczba przed wywołaniem funkcji: $liczba <br>";
    ?>
    <?php
    function progr($jezyk = "php"){
        return "Język programowania - $jezyk";
    }
    echo progr();
    echo "<br>";
    echo progr(null);
    echo "<br>";
    echo progr("Java");
    ?>
    <?php
    function styl($tekst, $kolor = "red"){
        echo "<p style=\"color: $kolor\">".$tekst."</p>";
    }
    styl("Tytuł", "blue");
    styl("Rozdział 1.", "green");
    styl("treść");
    ?>
</body>
</html>