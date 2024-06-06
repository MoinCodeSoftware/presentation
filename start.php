<?php


function autoload($className) 
{

    $prefix = "App";
    $dir = "./src";

    $clss = substr($className, strlen($prefix));
    $clss = str_replace("\\", "/", $clss);

    if(file_exists("{$dir}{$clss}.php")) {
        require("{$dir}{$clss}.php");
    }

}

$pdo = new PDO('mysql:host=localhost;dbname=blog','root','');


spl_autoload_register("autoload");



?>
