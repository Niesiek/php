<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj Asset</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<nav class="navbar navbar-expand-md navbar-dark bg-dark border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="./">Asset Manager</a>
    </div>
</nav>


<div class="container my-5">
    <div class="d-flex justify-content-end">
        <button onclick="window.history.back()" class="btn btn-primary">Cofnij</button>
    </div>

    <h1 class="text-center mb-4">Dodaj Nowy Asset</h1>
    <form action="create.php" method="POST" class="p-4 bg-secondary rounded">
        <div class="mb-3">
            <label for="name" class="form-label">Nazwa</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Opis</label>
            <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Miejsce</label>
            <input type="text" id="location" name="location" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="cost" class="form-label">Koszt</label>
            <input type="number" id="cost" name="cost" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Ilość</label>
            <input type="number" id="quantity" name="quantity" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Dodaj Asset</button>
    </form>
</div>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'AssetManager';
    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $cost = mysqli_real_escape_string($conn, $_POST['cost']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

    $query = "INSERT INTO Asset_Manager (Nazwa, Opis, Miejsce, Data_Dodania, Koszt, Ilość)
              VALUES ('$name', '$description', '$location', NOW(), '$cost', '$quantity')";
    if (mysqli_query($conn, $query)) {
        header('Location: ./');
        exit();
    } else {
        echo "<p class='text-danger text-center'>Błąd podczas dodawania assetu.</p>";
    }
}
?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
