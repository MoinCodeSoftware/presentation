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
?>

<?php include('pages/header.php'); ?>
<?php require_once('pages/layout.php'); ?>

<div class="container">
    <h1>Dynamic Property und Method Access</h1>

    <?php 
    $layout = new Layouthelper();

    echo $layout->cardStart(); 
    ?>
    <h4>PHP Code:</h4>
    <pre><code>
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
$beispielObj->$methode();
    </code></pre>
    <h4>Ausgabe:</h4>
    <?php
    echo var_dump($beispielObj->$name);
    echo "<br /><br />";
    $beispielObj->$methode();
    ?>
    <?php echo $layout->cardEnd(); ?>
</div>

<?php include('pages/footer.php'); ?>
