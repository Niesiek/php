<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'baza_sigma';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die("Błąd połączenia" . mysqli_connect_error());
}
echo "Połączono z bazą danych <br>";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];

    $sql = "DELETE FROM uzyskowski WHERE iduzyskiwski = '$id'";

    if(mysqli_query($conn, $sql)){
        echo "Uzytkownik usunięty!";
        $previousPage = $_SERVER['HTTP_REFERER'] ?? '/';

        header("Refresh: 2; url=$previousPage");

        echo '<p>Za 2 sekundy zostaniesz przeniesiony na poprzednią stronę.</p>';


    }else{
        echo "Błąd: " . $sql . "<br>" . mysqli_error($conn);
    }
}





