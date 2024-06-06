<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=blog','root',''); 
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


    function fetch_posts() {
        
        global $pdo;
        
        return $pdo->query("SELECT * FROM `posts`");
    }

    function fetch_post($id) 
    {
        global $pdo;

        $statement = $pdo->prepare("SELECT * FROM `posts` WHERE id = :id");
        $statement->execute(['id' => $id]);
        return $statement->fetch();
    }

?>