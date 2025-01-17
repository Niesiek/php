<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    $tekst = <<<TX
    Na cóz czekamy, zebrani na rynku?
    Dziś mają tu przyjść barbarzyńcy
    Dlaczego taka beczynność w senacie
    Senatorowe siedzą - czemuz praw nie uchwalają?
    TX;

    echo "<p>Tekst przed uzyciem funkcji nl2br: </p>".$tekst."<br>";
    echo "<p>Tekst po uzyciu funkcji nl2br:</p>".nl2br($tekst)."<br>"

    ?>
    <br><br>
    <?php
    $txt = <<<TX
    Na cóz czekamy, zebrani na rynku?
    Dziś mają tu przyjść barbarzyńcy
    Dlaczego taka beczynność w senacie
    Senatorowe siedzą - czemuz praw nie uchwalają?
    TX;
    echo wordwrap($txt);
    ?>
</body>
</html>