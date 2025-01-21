<?php
// Definicja zmiennej $data do przechowywania danych z formularza
$data = array();

// Definicja pola formularza
$polas_formularza = array(
    'imie' => '',
    'nazwisko' => '',
    'email' => '',
    'message' => ''
);

// Definicja czujnika formularza
$czujnik_formularza = array(
    'id' => 'formularz',
    'action' => 'proses_formularza.php'
);

// Przechwytywanie danych z formularza
if(isset($_POST['formularz'])) {
    $data = $_POST['formularz'];

    // Sprawdzenie poprawności danych
    if(!empty($data)) {
        foreach ($polas_formularza as $key => $value) {
            echo "$key: $data[$key]\n";
        }
        echo 'Dane są poprawne!';

    } else {
        echo 'Błąd! Prosz się spróbować.';
    }

} // Koniec przehamowania danych
?>

<!-- Wczytywanie pliku do formularza -->
<div id="formularz">
    <h2>Formularz</h2>
    <form action="" method="post">
        <label for="imie">Imię:</label>
        <input type="text" id="imie" name="formularz[imie]">
        <br><br>
        <label for="nazwisko">Nazwisko:</label>
        <input type="text" id="nazwisko" name="formularz[nazwisko]">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="formularz[email]">
        <br><br>
        <label for="message">Wiadomość:</label>
        <textarea id="message" name="formularz[message]"></textarea>
        <br><br>
        <input type="submit" value="Wyślij">
    </form>
</div>

<!-- Skrypt do przehamowania formularza -->
<script src="proses_formularza.php"></script>
