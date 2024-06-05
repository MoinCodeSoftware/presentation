<?php

include('pages/header.php');
require_once('pages/layout.php'); 

$layout = new Layouthelper();


?>


<?php

/* Mutterklasse */

class MutterKlasse {

    public $name;
    private $iban = "DE609289283992843";
    private $constructorOut = "";


    public function __construct() 
    {
        $this->constructorOut = "Ich bin der Konstruktor.";
    }

    public function constructorOutput() 
    {
        return $this->constructorOut;
    }

    public function getName($name) 
    {
        $prepareName = "Das hier ist die Elternklasse {$name}";
        return $prepareName;
    }

    public function getIBAN() 
    {
        return $this->iban;
    }

    public function setIBAN() 
    {
        $this->iban = "DE999999999999999";
        return $this->iban;
    }

}

$mutterObj = new MutterKlasse();


?>

<h1>Klassen</h1>
<div class="container">

<h2>Einfache Klasseninstanziierung</h2>

<?php
    echo $mutterObj->getName("MutterKlasse");
?>


<h2>Klassen Konstruktor</h2>
<?php echo $mutterObj->constructorOutput(); ?>

<h2>GET mit privaten Eigenschaften</h2>

<?php
    echo $mutterObj->getIBAN();
?>

<h2>SET mit privaten Eigenschaften</h2>

<?php
    echo $mutterObj->setIBAN();
?>


<?php include('pages/footer.php'); ?>