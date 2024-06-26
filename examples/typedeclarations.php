<?php declare(strict_types=1); ?>

<?php 
include('pages/header.php'); 
require_once('pages/layout.php'); 

$layout = new Layouthelper();
?>
<br />
<h1>Type Declarations</h1>
<div class="container">

<?php
function addiere(int|float $a, int|float $b) : int|float
{
    $erg = $a + $b;
    return $erg;
}

function retStrOrNull(int $a) : null|string
{
    if($a === 7) {
        return null;
    } else {
        return "Ich bin ein String.";
    }
}
?>

<?php 
echo $layout->cardStart(); 
?>
<h4>PHP Code:</h4>
<pre><code>
function addiere(int|float $a, int|float $b) : int|float
{
    $erg = $a + $b;
    return $erg;
}

function retStrOrNull(int $a) : null|string
{
    if($a === 7) {
        return null;
    } else {
        return "Ich bin ein String.";
    }
}
</code></pre>
<h4>Ausgabe:</h4>
<?php
echo addiere(12.5, 2.7);
echo $layout->cardEnd(); 

echo "<br /><br />";

echo $layout->cardStart(); 
?>
<h4>PHP Code:</h4>
<pre><code>
var_dump(retStrOrNull(5));
echo "<br /><br />";
var_dump(retStrOrNull(7));
</code></pre>
<h4>Ausgabe:</h4>
<?php
var_dump(retStrOrNull(5));
echo "<br /><br />";
var_dump(retStrOrNull(7));
echo $layout->cardEnd(); 
?>

</div>

<?php include('pages/footer.php'); ?>
