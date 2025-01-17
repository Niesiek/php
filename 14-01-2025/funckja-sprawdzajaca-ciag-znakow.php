<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $napis = "Senatorowie siedzą - czemuz praw nie uchwalą";
    echo 'Tekst: "'.$napis.'"';
    $dl = mb_strlen($napis);
    echo " ma długość $dl znaków.<br>";
    ?>
    <?php
    $tekst = "Litwo, Ojczyzno moja";
    echo $tekst[0];
    echo $tekst[10];
    ?>
    <h2>Funckja podciągów</h2>
    <?php
    $dane = "Jan Kowalski, ul. Nowa 23, 80-874 Warszawa, tel.530560223";
    $tel = strstr($dane, "tel.");
    echo $tel;
    ?>
    <h2>Funckja substr</h2>
    <?php
    $info = "Jan Kowalski, ul. Nowa 23, 80-874 Warszawa, tel. 503323032";
    echo "Ciąg główny: ".$info."<br>";
    $tele = strstr($dane, "tel.");
    if($tele == false){
        echo "Brak numeru telefonu";
    }else{
        echo "znaleziony podciąg: ".$tele;
    }
    ?>
    <h3>Funcja substr</h3>
    <?php
    echo substr($dane, 4, 8)."<br>";
    echo substr($dane, -14, 14);


    ?>
    <h3>Przykład 6.69</h3>
    <?php
    $znak = ",";
    $ciag = strtok($dane, $znak);
    while (is_string($ciag)){
        if($ciag){
            echo $ciag."<br>";
        }
        $ciag = strtok($znak);
    }

    ?>
    <p><b>is_string</b> sprawdza, czy typ zmiennej podanej jako argument jest ciagiem.</p>

    <br><br>
    <h3>Funkcja strcmp()</h3>
    <p>Funckja ma postać <br>
    <b>strcmp("ciąg", "ciąg2")</b><br>
    <ul>
        <li>
            Zwraca wartość mniejszą od 0, jezeli <b>ciag1</b> jest mniejszy od <b>ciag2</b>
        </li>
        <li>zwraca wartość większą od 0, jezeli <b>ciag1</b> jest wiekszy od <b>ciag2</b>
    </li>
    <li>
        Zwraca wartość 0, jezeli <b>ciag1</b> jest równy <b>ciag2</b>
    </li>
    </ul>
    </p>

</body>
</html>