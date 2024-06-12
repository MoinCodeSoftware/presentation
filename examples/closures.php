<?php

$closure = function() {
    var_dump("eine Closure");
};

$closure();
?>

<?php include('pages/header.php'); ?>
<?php require_once('pages/layout.php'); ?>

<div class="container">
    <h1>Closures</h1>

    <?php 
    $layout = new Layouthelper();

    echo $layout->cardStart(); 
    ?>
    <h4>PHP Code:</h4>
    <!-- PHP Code mit Prism.js Syntaxhighlighting -->
    <pre><code class="language-php">
<?php echo htmlentities('
$closure = function() {
    var_dump("eine Closure");
};
$closure();
'); ?>
    </code></pre>
    <h4>Ausgabe:</h4>
    <!-- Ausgabe ohne Syntaxhighlighting -->
    <?php
    $closure();
    ?>
    <?php echo $layout->cardEnd(); ?>
</div>

<?php include('pages/footer.php'); ?>


