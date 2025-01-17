<?php
    $file =mysql_num_rows($wynik);
    for ($i=0;$i<$file;$i++){
        $wiersz = mysql_fetch_row($wynik);
    }
    ?>