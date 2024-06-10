<?php

namespace App\Core;

abstract class AbstractController 
{


    protected function render($view, $params) 
    {

   /*      $name = "params";
        var_dump(${$name}); */

        /* foreach($params as $key => $value) {
            ${$key} = $value;
        } */

        extract($params);


        include __DIR__ . "/../../views/{$view}.php";


    }








}


?>