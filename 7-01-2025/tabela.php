<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tx = true;
    if($tx) {
    ?>
    <table align="left" border="1" width="400" hspace="40" vspace="20" cellspacing="4">
        <tr>
            <td>Nazwisko</td>
            <td>Imie</td>
            <td>Telefon</td>
        </tr>
        <tr>
            <td>Nowak</td>
            <td>Jan</td>
            <td>589-403-043</td>
        </tr>
        <tr>
            <td>Kowalski</td>
            <td>Adam</td>
            <td>589-123-043</td>
        </tr>
        <tr>
            <td>Górniak</td>
            <td>Mateusz</td>
            <td> 653-413-532</td>
        </tr>
    </table>
    <?php
    }
    ?>
</body>
</html>