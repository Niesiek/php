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
        <a class="navbar-brand" href="./">Asset Manager</a>
    </div>
</nav>

<!-- Button and Table -->
<div class="container my-3">
    <div class="d-flex justify-content-end">
        <a href="create.php" class="btn btn-primary">Stwórz asset</a>
    </div>
    <?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'AssetManager';
    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $query = "SELECT * FROM Asset_Manager";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        echo "<table class='table table-dark table-hover table-bordered align-middle mt-3'>
                <thead class='table-dark'>
                    <tr>
                        <th>ID</th>
                        <th>Nazwa</th>
                        <th>Opis</th>
                        <th>Miejsce</th>
                        <th>Data Dodania</th>
                        <th>Koszt</th>
                        <th>Ilość</th>
                        <th class='text-end'>Akcje</th>
                    </tr>
                </thead>
                <tbody>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['ID']}</td>
                    <td>{$row['Nazwa']}</td>
                    <td>{$row['Opis']}</td>
                    <td>{$row['Miejsce']}</td>
                    <td>{$row['Data_Dodania']}</td>
                    <td>{$row['Koszt']}</td>
                    <td>{$row['Ilość']}</td>
                    <td class='text-end'>
                        <a href='edit.php?id={$row['ID']}' class='btn btn-success me-2'>Edytuj</a>
                        <a href='delete.php?id={$row['ID']}' class='btn btn-danger'>Usuń</a>
                    </td>
                </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p class='text-center mt-3'>Brak danych</p>";
    }
    ?>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
