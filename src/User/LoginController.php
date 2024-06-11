<?php


namespace App\User;

use App\Core\AbstractController;
use App\User\LoginService;

class LoginController extends AbstractController
{

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function dashboard() {

        
        $this->loginService->check();
        $this->render("user/dashboard", []);
       
    }

    public function logout()
    {
        $this->loginService->logout();
    }

    public function login()
    {

        $err = "";

        if(!empty($_POST["username"]) && !empty($_POST['password']))
        {

            $username = $_POST["username"];
            $password = $_POST["password"];

            if($this->loginService->attempt($username, $password)) {
                header("Location: dashboard");
                return;
            } else {
                $err = "Benutzername oder Passwort falsch";
            }

        } else {
           $err = "";
        }

        $this->render("user/login", ['err' => $err]);

    }
}



?>