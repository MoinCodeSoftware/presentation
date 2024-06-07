<?php

class Beispiel 
{

    public $eigenschaft = "Ich bin eine Eigenschaft";

    public function beispielMethode() {
        var_dump("Geht auch mit Methoden");
    }
}


$beispielObj = new Beispiel();
$name = "eigenschaft";
$methode = "beispielMethode";

var_dump($beispielObj->$name);
echo "<br /><br />";
$beispielObj->$methode();


?>