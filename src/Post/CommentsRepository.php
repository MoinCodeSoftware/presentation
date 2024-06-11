<?php


namespace App\Post;

use App\Core\AbstractRepository;
use PDO;

class CommentsRepository extends AbstractRepository
{

    public function getTableName() 
    {
        return "comments";
    }

    public function getModelName() 
    {
        return "App\\Post\\CommentModel";
    }

    public function allByPost($id) 
    {

        $table = $this->getTableName();
        $model = $this->getModelName();


        $statement = $this->pdo->prepare("SELECT * FROM `{$table}` WHERE `post_id` =  :id ");
        $statement->execute(['id' => $id]);

        $comments     = $statement->fetchAll(PDO::FETCH_CLASS, $model);

        return $comments;
    
    }


    public function insertForPost($postId, $content) 
    {

        $table = $this->getTableName();

        $statement = $this->pdo->prepare(
            "INSERT INTO `$table` (`content`, `post_id`) VALUES (:content, :postId)"
        );
        $statement->execute([
            'content' => $content, 
            'postId' => $postId
        ]);

       



    }

  

}


