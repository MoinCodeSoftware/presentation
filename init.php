<?php

    require(__DIR__."/autoload.php");
    require(__DIR__."/db.php");

    $container = new App\Core\Container();

    function secOutput($str)
    {
        return htmlentities($str, ENT_QUOTES, 'UTF-8');
    }
    



?>