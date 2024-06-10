<?php

declare(strict_types=1);

?>

<?php 

include('pages/header.php'); 
require_once('pages/layout.php'); 

$layout = new Layouthelper();


?>


<h1>Type Declarations</h1>
<div class="container">

<?php

function addiere(int|float $a, int|float $b) : int|float
{
    $erg = $a + $b;
    return $erg;
}


function retStrOrNull(int $a) : null|string  //short wäre hier ?string aber nur bei 1 type
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
echo addiere(12.5, 2.7);
echo $layout->cardEnd(); 

echo "<br /><br />";

echo $layout->cardStart(); 
var_dump(retStrOrNull(5));
echo "<br /><br />";
var_dump(retStrOrNull(7));
echo $layout->cardEnd(); 



?>


<?php include('pages/footer.php'); 