<?php


namespace App\User;

use App\Core\AbstractController;

class LoginController extends AbstractController
{

    public function __construct(UsersRepository $usersRepository)
    {

        $this->usersRepository = $usersRepository;

    }


    public function login()
    {

        if(!empty($_POST["username"]) && !empty($_POST['password']))
        {


            $err = null;

            $username = $_POST["username"];
            $password = $_POST["password"];

            $user = $this->usersRepository->findByUsername($username);

            if(!empty($user)) {

                if(password_verify($password, $user->password))
                {
                        echo "LOGIN ERFOLGREICH";
                } else {
                    $err = "Passwort falsch!";
                }

            } else {
                $err = "Kein Benutzer mit dem Usernamen vorhanden!";
            }
            var_dump($password);

        }

        $this->render("user/login", ['err' => $err]);

    }
}



?>