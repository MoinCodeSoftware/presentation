<?php

// Beispiel zu __invoke() 

class CallableObj
{

    public function __invoke(string $param) 
    {
        var_dump("__invoke wurde ausgeführt: ".$param);
    }

}

$callableObj = new CallableObj();

?>

<?php include('pages/header.php'); ?>
<?php require_once('pages/layout.php'); ?>

<div class="container">
    <h1>Magic Method: __invoke()</h1>

    <?php 
    $layout = new Layouthelper();

    echo $layout->cardStart(); 
    ?>
    <h4>PHP Code:</h4>
    <pre><code>
class CallableObj
{

    public function __invoke(string $param) 
    {
        var_dump("__invoke wurde ausgeführt: ".$param);
    }

}

$callableObj = new CallableObj();

// Schreibweise bei mm invoke möglich
$callableObj("ich wurde mit invoke übergeben");
    </code></pre>
    <h4>Ausgabe:</h4>
    <?php
    $callableObj("ich wurde mit invoke übergeben");
    ?>
    <?php echo $layout->cardEnd(); ?>
</div>

<?php include('pages/footer.php'); ?>
