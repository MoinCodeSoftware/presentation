<?php 

    include('pages/header.php');
    require_once('pages/layout.php'); 

    $layout = new Layouthelper();

        function mySmallFunction($string) 
        {
            return $string;
        }


    $string = "Eine kleine Funktion wurde aufgerufen";

    $code = '<?php
    function mySmallFunction($string) 
    {
        return $string;
    }

    $string = "Eine kleine Funktion wurde aufgerufen";
    ?>';


$string = "Eine kleine Funktion wurde aufgerufen";


function showcaseReference(&$changeMe) {

    $changeMe[] = "Ich wurde durch eine Referenz hinzugefügt. Unschöner Codestil aber wichtig zu wissen!";

    return $changeMe;

}

$changeMe = ["Ein Listenelement"];


$code2 = '<?php 
    function showcaseReference(&$changeMe) {

    $changeMe[] = "Ich wurde durch eine Referenz hinzugefügt. Unschöner Codestil aber wichtig zu wissen!";

    return $changeMe;

}

$changeMe = ["Ein Listenelement"];

print_r( showcaseReference($changeMe) );
';


?>
<h1>Funktionen</h1>
<div class="container">


<h2>Funktionsaufruf</h2>
<?php

   /* Erster Output */ 

    echo $layout->cardStart(); 
    echo mySmallFunction($string);
    echo $layout->cardEnd(); 

    echo "<br />";

    echo $layout->cardStart(); 

    ob_start();
    highlight_string($code);
    $codeOutput = ob_get_clean();
    echo $codeOutput;

    echo $layout->cardEnd(); 
    
    /* Zweiter Output */ 

    echo "<h2>Referenzierung</h2>";

    echo $layout->cardStart(); 
    echo "<pre>";
    print_r( showcaseReference($changeMe) );
    echo "</pre>";
    echo $layout->cardEnd(); 

    echo "<br />";

    echo $layout->cardStart(); 
    ob_start();
    highlight_string($code2);
    $codeOutput2 = ob_get_clean();
    echo $codeOutput2;
    echo $layout->cardEnd(); 


    /* Beispiel Aufruf */
    function guten($var) 
    {
        print_r($var);
    }

    function tag() 
    {
        guten("Guten tag");
    }


    $code3 = '<?php
    /* Beispiel Funktionsaufruf */
    function guten($var) 
    {
        print_r($var);
    }

    function tag() 
    {
        guten("Guten tag");
    }
    ?>';

?>

<h2>Beispiel Funktionsaufrufe</h2>
<?php   

    echo $layout->cardStart(); 
    tag();
    echo $layout->cardEnd(); 

    echo "<br />";

    echo $layout->cardStart(); 
    ob_start();
    highlight_string($code3);
    $codeOutput3 = ob_get_clean();
    echo $codeOutput3;
    echo $layout->cardEnd(); 



    include('pages/footer.php'); 

?>
</div>