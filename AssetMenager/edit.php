<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj Asset</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container my-5">
    <h1 class="text-center mb-4">Edytuj Asset</h1>
    <?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'AssetManager';
    $conn = mysqli_connect($host, $user, $pass, $dbname);

    // Pobranie ID z URL
    $id = $_GET['id'] ?? null;

    if (!$id) {
        echo "<p class='text-danger text-center'>Nie znaleziono ID assetu.</p>";
        exit();
    }

    // Pobieranie szczegółów assetu
    $query = "SELECT * FROM Asset_Manager WHERE ID = $id";
    $result = mysqli_query($conn, $query);
    $asset = mysqli_fetch_assoc($result);

    if (!$asset) {
        echo "<p class='text-danger text-center'>Asset nie istnieje.</p>";
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Pobranie danych z formularza
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $location = mysqli_real_escape_string($conn, $_POST['location']);
        $cost = mysqli_real_escape_string($conn, $_POST['cost']);
        $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

        // Aktualizacja rekordu
        $updateQuery = "UPDATE Asset_Manager SET 
                        Nazwa = '$name',
                        Opis = '$description',
                        Miejsce = '$location',
                        Koszt = '$cost',
                        Ilość = '$quantity'
                        WHERE ID = $id";

        if (mysqli_query($conn, $updateQuery)) {
            header('Location: index.php');
            exit();
        } else {
            echo "<p class='text-danger text-center'>Błąd podczas aktualizacji assetu.</p>";
        }
    }
    ?>
    <form action="edit.php?id=<?= $id ?>" method="POST" class="p-4 bg-secondary rounded">
        <div class="mb-3">
            <label for="name" class="form-label">Nazwa</label>
            <input type="text" id="name" name="name" class="form-control" value="<?= $asset['Nazwa'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Opis</label>
            <textarea id="description" name="description" class="form-control" rows="3" required><?= $asset['Opis'] ?></textarea>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Miejsce</label>
            <input type="text" id="location" name="location" class="form-control" value="<?= $asset['Miejsce'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="cost" class="form-label">Koszt</label>
            <input type="number" id="cost" name="cost" class="form-control" step="0.01" value="<?= $asset['Koszt'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Ilość</label>
            <input type="number" id="quantity" name="quantity" class="form-control" value="<?= $asset['Ilość'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
        <a href="index.php" class="btn btn-secondary">Anuluj</a>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

