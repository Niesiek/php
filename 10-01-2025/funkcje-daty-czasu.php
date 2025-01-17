<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje Daty i Czasu</title>
</head>
<body>
    <?php
    echo "Data i czas: ".date("Y-m-d H:i:s")."<br>";

    $data       = getdate();
    $dzien      = $data['mday'];
    $miesiac    = $data['mon'];
    $rok        = $data['year'];
    if($dzien < 10){
        $dzien = "0".$dzien;
    }
    if($miesiac < 10){
        $miesiac = "0".$miesiac;
    }
    echo "Bierząca data: $dzien-$miesiac-$rok <br>";
    ?>
    <br><br><br>
    <?php
    $czas = mktime(16, 30, 0, 10, 24, 2020);
    echo "Data: dzień miesiąc, rok, godzina:minuta <br>";
    echo date("d-m-Y G:i",$czas)."<br>";
    echo "Data: rok, miesiąc, dzień godzina:minuta:sekunda: <br>";
    echo date("Y-m-d G:i:s",$czas)."<br>";
    ?>
</body>
</html>