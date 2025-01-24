<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'AssetManager';
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Pobranie ID z URL
$id = $_GET['id'] ?? null;

if (!$id) {
    echo "<p class='text-danger'>Nie podano ID rekordu do usunięcia.</p>";
    exit();
}

// Usuwanie rekordu z bazy danych
$query = "DELETE FROM Asset_Manager WHERE ID = $id";

if (mysqli_query($conn, $query)) {
    // Powrót na stronę główną po usunięciu
    header('Location: index.php');
    exit();
} else {
    echo "<p class='text-danger'>Błąd podczas usuwania rekordu: " . mysqli_error($conn) . "</p>";
}

mysqli_close($conn);
?>

