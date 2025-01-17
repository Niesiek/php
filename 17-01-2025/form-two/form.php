<?php
if (!empty($_POST['jezyki'])) {
    echo '<p><b>'.$_POST['nazw'].'</b> zna: </p>';
    echo '<ul>';
    foreach ($_POST['języki'] as $wartosc) {
        echo "<li>$wartosc</li>";
    }
    echo "</ul>";
    } else {
    echo "<p><b>".$_POST['nazw']."</b> nie zna żadnego języka.</p>";

}