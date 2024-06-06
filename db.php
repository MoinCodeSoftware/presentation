<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=blog','root',''); 
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>