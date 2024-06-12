<?php include('pages/header.php'); 

$beispielEmpty = "";
$beispielZeroStr = "0";
$beispielZero = 0;
$beispielFilled = "123";

// PHP code as string for display
$phpCode = <<<'CODE'
<?php include('pages/header.php'); 

$beispielEmpty = "";
$beispielZeroStr = "0";
$beispielZero = 0;
$beispielFilled = "123";

?>

<h1>empty() && isset()</h1>
<div class="container">

<?php

echo "<h2>Beispiele mit empty()</h2>";
echo 'empty($beispielEmpty = "") === ';
var_dump(empty($beispielEmpty)); 
echo '<br />';
echo '<b>Sonderfall</b>: empty($beispielZeroStr = "0") === ';
var_dump(empty($beispielZeroStr));
echo '<br />';
echo 'empty($beispielZero = 0) === ';
var_dump(empty($beispielZero));
echo '<br />';
echo 'empty($beispielFilled = "123") === ';
var_dump(empty($beispielFilled));
echo '<br />';
echo "<h2>Beispiele mit isset()</h2>";
echo 'isset($beispielFilled = "123") === ';
var_dump(isset($beispielFilled));
echo '<br />';
echo 'isset($beispielEmpty = "") === ';
var_dump(isset($beispielEmpty));
echo '<br />';
echo 'isset(unset($beispielNotExistent)) === ';
var_dump(isset($beispielNotExistent));
echo '<br />';

?>
</div>
<?php include('pages/footer.php'); ?> 
CODE;

?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>empty() && isset()</h1>
            <?php
                echo "<h2>Beispiele mit empty()</h2>";
                echo 'empty($beispielEmpty = "") === ';
                var_dump(empty($beispielEmpty)); 
                echo '<br />';
                echo '<b>Sonderfall</b>: empty($beispielZeroStr = "0") === ';
                var_dump(empty($beispielZeroStr));
                echo '<br />';
                echo 'empty($beispielZero = 0) === ';
                var_dump(empty($beispielZero));
                echo '<br />';
                echo 'empty($beispielFilled = "123") === ';
                var_dump(empty($beispielFilled));
                echo '<br />';
                echo "<h2>Beispiele mit isset()</h2>";
                echo 'isset($beispielFilled = "123") === ';
                var_dump(isset($beispielFilled));
                echo '<br />';
                echo 'isset($beispielEmpty = "") === ';
                var_dump(isset($beispielEmpty));
                echo '<br />';
                echo 'isset(unset($beispielNotExistent)) === ';
                var_dump(isset($beispielNotExistent));
                echo '<br />';
            ?>
        </div>
        <div class="col-md-6">
            <h1>PHP Code</h1>
            <!-- PHP Code mit Prism.js Syntaxhighlighting -->
            <pre><code class="language-php"><?php echo htmlspecialchars($phpCode); ?></code></pre>
        </div>
    </div>
</div>

<?php include('pages/footer.php'); ?> 
