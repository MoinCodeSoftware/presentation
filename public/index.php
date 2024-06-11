<?php

session_start();

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
    '/login' => ['controller' => 'loginController', 'method' => 'login'],
    '/dashboard' => ['controller' => 'loginController', 'method' => 'dashboard'],
    '/logout' => ['controller' => 'loginController', 'method' => 'logout'],
    '/posts-admin' => ['controller' => 'postsAdminController', 'method' => 'index'],
    '/posts-edit' => ['controller' => 'postsAdminController', 'method' => 'edit']
];

if(isset($routes[$pathInfo])) {

    $route           = $routes[$pathInfo];
    $routeController = $route['controller'];
    $routeMethod     = $route['method'];

    $controller = $container->make($routeController);
    $controller->$routeMethod();
}



?>