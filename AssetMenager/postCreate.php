<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'AssetManager';
$conn = mysqli_connect($host, $user, $pass, $dbname);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'create') {
    // Pobieranie danych z formularza
    $nazwa = $_POST['nazwa'] ?? '';
    $opis = $_POST['opis'] ?? '';
    $miejsce = $_POST['miejsce'] ?? '';
    $data_dodania = $_POST['data_dodania'] ?? '';
    $koszt = $_POST['koszt'] ?? 0;
    $ilosc = $_POST['ilosc'] ?? 0;

    // Przygotowanie zapytania SQL
    $stmt = $conn->prepare("INSERT INTO Asset_Manager (Nazwa, Opis, Miejsce, Data_Dodania, Koszt, Ilość) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssdi", $nazwa, $opis, $miejsce, $data_dodania, $koszt, $ilosc);

    if ($stmt->execute()) {
        // Powrót na tę samą stronę
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        echo "Błąd: " . $stmt->error;
    }

    $stmt->close();
}

$tabelasql = "SELECT * FROM Asset_Manager";
$result = mysqli_query($conn, $tabelasql);

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset Manager</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Asset Manager</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>

<!-- Button and Modal -->
<div class="container my-3">
    <div class="d-flex justify-content-end">
        <!-- Button to trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            Stwórz Asset
        </button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Dodaj nowy Asset</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="action" value="create">
                    <div class="form-group">
                        <label for="nazwa">Nazwa</label>
                        <input type="text" class="form-control" id="nazwa" name="nazwa" required>
                    </div>
                    <div class="form-group">
                        <label for="opis">Opis</label>
                        <input type="text" class="form-control" id="opis" name="opis" required>
                    </div>
                    <div class="form-group">
                        <label for="miejsce">Miejsce</label>
                        <input type="text" class="form-control" id="miejsce" name="miejsce" required>
                    </div>
                    <div class="form-group">
                        <label for="data_dodania">Data Dodania</label>
                        <input type="date" class="form-control" id="data_dodania" name="data_dodania" required>
                    </div>
                    <div class="form-group">
                        <label for="koszt">Koszt</label>
                        <input type="number" step="0.01" class="form-control" id="koszt" name="koszt" required>
                    </div>
                    <div class="form-group">
                        <label for="ilosc">Ilość</label>
                        <input type="number" class="form-control" id="ilosc" name="ilosc" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuluj</button>
                    <button type="submit" class="btn btn-primary">Zapisz</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Table -->
<div class="container">
    <table class="table table-dark table-hover table-bordered align-middle">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nazwa</th>
            <th>Opis</th>
            <th>Miejsce</th>
            <th>Data Dodania</th>
            <th>Koszt</th>
            <th>Ilość</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($result && mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $row['ID'] ?></td>
                    <td><?= $row['Nazwa'] ?></td>
                    <td><?= $row['Opis'] ?></td>
                    <td><?= $row['Miejsce'] ?></td>
                    <td><?= $row['Data_Dodania'] ?></td>
                    <td><?= $row['Koszt'] ?></td>
                    <td><?= $row['Ilość'] ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="7" class="text-center">Brak danych</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
