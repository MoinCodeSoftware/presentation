<?php

namespace App\Core;
use App\Post\PostsRepository;
use PDO;


class Container 
{

    private $receipts = [];
    private $instances = [];

    public function __construct()
    {
      $this->receipts = [
        'postsRepository' => function() {
          return new PostsRepository(
            $this->make("pdo")
          );
        },
        'pdo' => function() {
            $pdo = new PDO(
                'mysql:host=localhost;dbname=blog;charset=utf8',
                'root',
                ''
            ); 
          $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
          return $pdo;
        }
      ];
    }

    public function make($name) 
    {

        if(!empty($this->instances[$name])) 
        {
            return $this->instances[$name];
        }


        if(isset($this->receipts[$name])) {

            $this->instances[$name] = $this->receipts[$name]();
        }

        return $this->instances[$name];

    }




  /*   private $pdo;
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
 */
}



?>