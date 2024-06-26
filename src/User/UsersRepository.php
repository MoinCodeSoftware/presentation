<?php


namespace App\User;

use App\Core\AbstractRepository;
use PDO;

class UsersRepository extends AbstractRepository
{

    public function getModelName() 
    {
        return "App\\User\\UserModel";
    }

    public function getTableName() 
    {
        return "users";
    }

    public function findByUsername($username)
    {

        $table = $this->getTableName();
        $model = $this->getModelName();

        $statement = $this->pdo->prepare("SELECT * FROM `{$table}` WHERE username = :username");
        $statement->execute(['username' => $username]);
        $statement->setFetchMode(PDO::FETCH_CLASS, $model);
        $user = $statement->fetch(PDO::FETCH_CLASS);

        return $user;

    }



}



?>