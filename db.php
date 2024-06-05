<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=blog2','root',''); 


    function fetch_posts() {
        
        global $pdo;
        $res = $pdo->query("SELECT * FROM `posts`");

        return $res;
    }

?>