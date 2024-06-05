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
    protected $ueberschreibMich = "MutterklasseVariable";

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

/* Vererbung Showcase */

class KindKlasse extends MutterKlasse {

    private $iban;

    public function getName($name)
    {
        $prepareName = "Das hier ist die Kindklasse {$name}";
        return $prepareName;
    }
    public function setIBAN() 
    {
        $this->iban = "DE000000000000000000";
        return $this->iban;
    }

    public function getIBAN() 
    {
        return parent::getIBAN();
    }

    public function getProtected() 
    {
        $this->ueberschreibMich = "In Kindklasse überschrieben";
        return $this->ueberschreibMich;
    }

}

$kindKlasseObj = new KindKlasse();



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

<h2>Vererbung mit Kindklasse</h2>

<?php
    echo $kindKlasseObj->getName("Kindklasse");
?>


<h2>Vererbung mit Kindklasse mit setIBAN</h2>

<?php
    echo $kindKlasseObj->setIBAN();
?>

<h2>Auf Elternklassen Funktion via ::parent zugreifen</h2>

<?php
    echo $kindKlasseObj->getIBAN();
?>


<h2>In Kindklasse auf protected Variable der Elternklasse zugreifen</h2>

<?php
    echo $kindKlasseObj->getProtected();
?>


<?php include('pages/footer.php'); ?>