<?php
if (empty($_POST["opcje"])){
    echo "Proszę zaznaczyć zgodę";
}else {
    echo "Odpowiedz z serwera PHP: <br>" . $_POST["nazw"];
    echo $_POST["im"] . "<br>";
    echo $_POST["zaw"] . "<br>";
    echo $_POST["adr"] . "<br>";
    echo "Zostało wybrane wykształcenie: " . $_POST["wykszt"];
}
