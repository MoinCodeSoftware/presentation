<?php

class MeineException extends Exception
{

}

function turn($a) {

    if($a == 0) {
        throw new Exception("Error Exeption");
    }
    
    if($a == 1) {
        throw new MeineException("Error Meine Exeption");
    }
    return -$a;
}

?>

<?php include('pages/header.php'); ?>
<?php require_once('pages/layout.php'); ?>

<div class="container">
    <h1>Exceptions</h1>

    <?php 
    $layout = new Layouthelper();

    echo $layout->cardStart(); 
    ?>
    <h4>PHP Code:</h4>
    <pre><code>
class MeineException extends Exception
{

}

function turn($a) {

    if($a == 0) {
        throw new Exception("Error Exeption");
    }
    
    if($a == 1) {
        throw new MeineException("Error Meine Exeption");
    }
    return -$a;
}

var_dump("START");

try {
    turn(0);
} catch(MeineException $e) {
    
    var_dump("Es ist eine MeineException aufgetreten");
} catch(Exception $e) {
    
    var_dump("Es ist eine Exception aufgetreten");
}

var_dump("STOP");


var_dump("START");

try {
    turn(1);
} catch(MeineException $e) {
    
    var_dump("Es ist eine MeineException aufgetreten");
} catch(Exception $e) {
    
    var_dump("Es ist eine Exception aufgetreten");
}

var_dump("STOP");
    </code></pre>
    <h4>Ausgabe:</h4>
    <?php
    var_dump("START");

    try {
        turn(0);
    } catch(MeineException $e) {
        var_dump("Es ist eine MeineException aufgetreten");
    } catch(Exception $e) {
        var_dump("Es ist eine Exception aufgetreten");
    }

    var_dump("STOP");


    var_dump("START");

    try {
        turn(1);
    } catch(MeineException $e) {
        var_dump("Es ist eine MeineException aufgetreten");
    } catch(Exception $e) {
        var_dump("Es ist eine Exception aufgetreten");
    }

    var_dump("STOP");
    ?>
    <?php echo $layout->cardEnd(); ?>
</div>

<?php include('pages/footer.php'); ?>
