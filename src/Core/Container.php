<?php

namespace App\Core;

use PDO;
use App\Post\PostsRepository;
use App\Post\CommentsRepository;
use App\Post\PostsController;
use App\Post\PostsAdminController;
use App\User\UsersRepository;
use App\User\LoginController;
use App\User\LoginService;
use Exception;
use PDOException;

class Container 
{

    private $receipts = [];
    private $instances = [];

    public function __construct()
    {
      $this->receipts = [
        'postsAdminController' => function() {
          return new PostsAdminController($this->make('postsRepository'), $this->make('loginService'));
        },
        'loginService' => function() {
          return new LoginService($this->make('usersRepository'));
        },
        'loginController' => function() {
          return new LoginController($this->make('loginService'));
        },
        'postsController' => function() {
            return new PostsController($this->make('postsRepository'), $this->make('commentsRepository'));
        },
        'commentsRepository' => function() {
          return new CommentsRepository(
            $this->make("pdo")
          );
        },
        'postsRepository' => function() {
          return new PostsRepository(
            $this->make("pdo")
          );
        },
        'usersRepository' => function() {
          return new UsersRepository(
            $this->make("pdo")
          );
        },
        'pdo' => function() {

          try {
             $pdo = new PDO(
                'mysql:host=localhost;dbname=blog;charset=utf8',
                'root',
                ''
            ); 
          } catch(PDOException $e) {
              echo "Critical: Verbindung zur DB fehlgeschlagen.";
              die();
          }
           
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