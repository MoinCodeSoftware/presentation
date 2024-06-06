<?php


namespace App\Post;
use PDO;

class PostsRepository 
{

    private $pdo;

    public function __construct(PDO $pdo) 
    {
        $this->pdo = $pdo;
    }
    function fetchPosts() {
            
        return $this->pdo->query("SELECT * FROM `posts`");
    }

    function fetchPost($id) 
    {
      
        $statement = $this->pdo->prepare("SELECT * FROM `posts` WHERE id = :id");
        $statement->execute(['id' => $id]);
        return $statement->fetch();
    }


}



?>