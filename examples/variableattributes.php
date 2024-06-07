<?php

class Beispiel 
{

    public $eigenschaft = "Ich bin eine Eigenschaft";


}


$beispielObj = new Beispiel();
$name = "eigenschaft";

var_dump($beispielObj->$name);


?>