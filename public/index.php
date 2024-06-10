<?php

require ("../init.php");

/* var_dump($_SERVER);
var_dump($container); */

$pathInfo = $_SERVER['PATH_INFO'];

if($pathInfo == "/index") {

    $postsController = $container->make("postsController");
    $postsController->index();

} elseif($pathInfo == "/post") {
    $postsController = $container->make("postsController");
    $postsController->show();
}


?>