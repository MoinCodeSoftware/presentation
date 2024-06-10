<?php


namespace App\Post;

use App\Core\AbstractRepository;

class PostsRepository extends AbstractRepository
{

    function getShortContent() {

    }

    public function getTableName() 
    {
        return "posts";
    }

    public function getModelName() 
    {
        return "App\\Post\\PostModel";
    }

}
