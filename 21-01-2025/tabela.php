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

$tabelasql="SELECT * FROM uzyskowski";
$result = mysqli_query($conn, $tabelasql);
if(mysqli_query($conn, $tabelasql)){
    echo "<table border='1'>
<tr>
<th>ID</th>
<th>Imie</th>
<th>Nazwisko</th>
<th>Wiek</th>
</tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
<td>".$row['iduzyskiwski']."</td>
<td>".$row['imie']."</td>
<td>".$row['nazwisko']."</td>
<td>".$row['wiek']."</td>
</tr>";
    }
    echo "</table>";
}else{
    echo "Brak Danych <br>";
}