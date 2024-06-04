<?php

//Beispiel Umgang mit empty()

    $beispielEmpty = "";
    $beispielZeroStr = "0";
    $beispielZero = 0;
    $beispielFilled = "123";

    echo "<h2>Beispiele mit empty()</h2>";
    echo 'empty($beispielEmpty = "") === ';
    var_dump(empty($beispielEmpty));
    echo '<br />';
    echo 'unbliebter Sonderfall: empty($beispielZeroStr = "0") === ';
    var_dump(empty($beispielZeroStr));
    echo '<br />';
    echo 'empty($beispielZero = 0) === ';
    var_dump(empty($beispielZero));
    echo '<br />';
    echo 'empty($beispielFilled = "123") === ';
    var_dump(empty($beispielFilled));
    echo '<br />';
    echo '<br />';
    echo "<h2>Beispiele mit isset()</h2>";
    echo '<br />';
    echo 'isset($beispielFilled = "123") === ';
    var_dump(isset($beispielFilled));
    echo '<br />';
    echo 'isset($beispielEmpty = "") === ';
    var_dump(isset($beispielEmpty));
    echo '<br />';
    echo 'isset(unset($beispielNotExistent)) === ';
    var_dump(isset($beispielNotExistent));
    echo '<br />';

?>