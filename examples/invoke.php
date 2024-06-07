<?php

// Beispiel zu __invoke() 

    class CallableObj
    {

        public function __invoke(string $param) 
        {

            var_dump("__invoke wurde ausgeführt: ".$param);


        }

    }


    function test($fn) 
    {

        $fn();

    }



$callableObj = new CallableObj();

// Schreibweise bei mm invoke möglich
$callableObj("ich wurde mit invoke übergeben");



?>