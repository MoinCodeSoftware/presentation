<?php

namespace App\Core;
use App\Post\PostsRepository;
use PDO;


class Container 
{

    private $pdo;
    private $postsRepository;


    public function getPdo() 
    {

        // nicht mehrfach erstellen
        if(!empty($this->pdo)) {
            return $this->pdo;
        }

        $this->pdo = new PDO('mysql:host=localhost;dbname=blog','root',''); 
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        return $this->pdo;

    }





    public function getPostsRepository() 
    {

        if(!empty($this->postsRepository)) {
            return $this->postsRepository;
        }

 
        $this->postsRepository = new PostsRepository($this->getPdo());
         
    }

}



?>