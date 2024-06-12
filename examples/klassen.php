<?php include('pages/header.php'); ?>
<?php require_once('pages/layout.php'); ?>

<?php
$layout = new Layouthelper();
?>

<div class="container">
    <h1>Klassen</h1>

    <h2>Einfache Klasseninstanziierung</h2>
    <?php echo $layout->cardStart(); ?>
    <h4>PHP Code:</h4>
    <pre><code>
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
    </code></pre>
<?php

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

?>
    <h4>Ausgabe:</h4>
    <?php
    echo $mutterObj->getName("MutterKlasse");
    ?>
    <?php echo $layout->cardEnd(); ?>

    <h2>Klassen Konstruktor</h2>
    <?php echo $layout->cardStart(); ?>
    <h4>PHP Code:</h4>
    <pre><code>
$mutterObj = new MutterKlasse();
echo $mutterObj->constructorOutput();
    </code></pre>
    <h4>Ausgabe:</h4>
    <?php echo $mutterObj->constructorOutput(); ?>
    <?php echo $layout->cardEnd(); ?>

    <h2>GET mit privaten Eigenschaften</h2>
    <?php echo $layout->cardStart(); ?>
    <h4>PHP Code:</h4>
    <pre><code>
$mutterObj = new MutterKlasse();
echo $mutterObj->getIBAN();
    </code></pre>
    <h4>Ausgabe:</h4>
    <?php echo $mutterObj->getIBAN(); ?>
    <?php echo $layout->cardEnd(); ?>

    <h2>SET mit privaten Eigenschaften</h2>
    <?php echo $layout->cardStart(); ?>
    <h4>PHP Code:</h4>
    <pre><code>
$mutterObj = new MutterKlasse();
echo $mutterObj->setIBAN();
    </code></pre>
    <h4>Ausgabe:</h4>
    <?php echo $mutterObj->setIBAN(); ?>
    <?php echo $layout->cardEnd(); ?>

    <h2>Vererbung mit Kindklasse</h2>
    <?php echo $layout->cardStart(); ?>
    <h4>PHP Code:</h4>
    <pre><code>
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
echo $kindKlasseObj->getName("Kindklasse");
    </code></pre>

<?php
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
echo $kindKlasseObj->getName("Kindklasse");

?>





    <h4>Ausgabe:</h4>
    <?php echo $kindKlasseObj->getName("Kindklasse"); ?>
    <?php echo $layout->cardEnd(); ?>

    <h2>Vererbung mit Kindklasse mit setIBAN</h2>
    <?php echo $layout->cardStart(); ?>
    <h4>PHP Code:</h4>
    <pre><code>
$kindKlasseObj = new KindKlasse();
echo $kindKlasseObj->setIBAN();
    </code></pre>
    <h4>Ausgabe:</h4>
    <?php echo $kindKlasseObj->setIBAN(); ?>
    <?php echo $layout->cardEnd(); ?>

    <h2>Auf Elternklassen Funktion via ::parent zugreifen</h2>
    <?php echo $layout->cardStart(); ?>
    <h4>PHP Code:</h4>
    <pre><code>
$kindKlasseObj = new KindKlasse();
echo $kindKlasseObj->getIBAN();
    </code></pre>
    <h4>Ausgabe:</h4>
    <?php echo $kindKlasseObj->getIBAN(); ?>
    <?php echo $layout->cardEnd(); ?>

    <h2>In Kindklasse auf protected Variable der Elternklasse zugreifen</h2>
    <?php echo $layout->cardStart(); ?>
    <h4>PHP Code:</h4>
    <pre><code>
$kindKlasseObj = new KindKlasse();
echo $kindKlasseObj->getProtected();
    </code></pre>
    <h4>Ausgabe:</h4>
    <?php echo $kindKlasseObj->getProtected(); ?>
    <?php echo $layout->cardEnd(); ?>
</div>

<?php include('pages/footer.php'); ?>
