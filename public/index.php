<?php

require ("../init.php");

/* var_dump($_SERVER);
var_dump($container); */
if (isset($_SERVER['PATH_INFO'])) {
    $pathInfo = $_SERVER['PATH_INFO'];
} else {
    $pathInfo = '/';
}


$routes = [
    '/index' =>  ['controller' => 'postsController', 'method' => 'index'],
    '/post' => ['controller' => 'postsController', 'method' => 'show'],
    '/login' => ['controller' => 'loginController', 'method' => 'login']
];

if(isset($routes[$pathInfo])) {

    $route           = $routes[$pathInfo];
    $routeController = $route['controller'];
    $routeMethod     = $route['method'];

    $controller = $container->make($routeController);
    $controller->$routeMethod();
}



?>