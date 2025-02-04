<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
<nav class="navbar navbar-expand-md navbar-dark bg-dark border-bottom">
    <div class="container fluid">
        <a class="navbar-brand" href="../index.php">Asset Manager</a>
    </div>
</nav>
<div class="container">
    <h2 style="text-align: center">Login</h2>
    <form action="../index.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Zaloguj</button>
    </form>
</div>
<!-- PHP Script -->
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "AssetManager";

        $conn = mysqli_connect($host, $username, $password, $dbname);

        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
        if(mysqli_query($conn, $query)){
            header('location: /AssetMenager/index.php');
            exit();
        }else{
            echo "<h1>Błąd podczas Logowania</h1>";
        }


    }
?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
