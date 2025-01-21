<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularz</title>
</head>
<body>
<h1>Dodaj uzytkownika</h1>
<form action="database_con.php" method="post">
    Imię: <input type="text" name="imie"><br>
    Nazwisko: <input type="text" name="nazwisko"><br>
    Wiek: <input type="text" name="wiek"><br>
    <input type="submit" value="Dodaj
użytkownika">
</form>

<h1>Aktualizuj uzytkownika</h1>
<form action="update.php" method="post">
    ID Uzytkownika: <input type="text" name="id"><br>
    Nowe imie: <input type="text" name="nowe_imie"><br>
    <input type="submit" value="Aktualizuj">
</form>
<h2>Usuń uzytkownika</h2>
<form action="delete_db.php" method="post">
    ID Uzytkownika: <input type="text" name="id"><br>
    <input type="submit" value="Usuń">
</form>
<h2>Tabela:</h2>
<?php include 'tabela.php'; ?>
</body>
</html>

