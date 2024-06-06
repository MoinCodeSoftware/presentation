<?php


include('pages/header.php'); 
require_once('pages/layout.php'); 

$layout = new Layouthelper();

class Entry implements ArrayAccess
{


    public $beispiel = "Beispiel";
    public $setMe;

    public function offsetExists($offset) 
    {
        if($offset == "content") {
            return true;  
        }
        var_dump("offsetExists: {$offset}");
    }
        

    public function offsetGet($offset)
    {
       
        if($offset == "content") {
            return $this->beispiel;
        }
    }

    public function offsetSet($offset, $value)
    {
        if($offset == "content") {
            $this->setMe = $value;
           // return $this->setMet;
        }
    }

    public function offsetUnset($offset)
    {
        if($offset == "content") 
        {
            unset($this->beispiel);

        }
    } 

}

$entry = new Entry();



$code = 'class Entry implements ArrayAccess
{


    public $beispiel = "Beispiel";
    public $setMe;

    public function offsetExists($offset) 
    {
        if($offset == "content") {
            return true;  
        }
        var_dump("offsetExists: {$offset}");
    }
        

    public function offsetGet($offset)
    {
       
        if($offset == "content") {
            return $this->beispiel;
        }
    }

    public function offsetSet($offset, $value)
    {
        if($offset == "content") {
            $this->setMe = $value;
        }
    }

    public function offsetUnset($offset)
    {
        if($offset == "content") 
        {
            unset($this->beispiel);

        }
    } 

}';

?>



<h1>Type Declarations</h1>
<div class="container">

<?php

echo $layout->cardStart();
echo $layout->formatCode($code);
echo $layout->cardEnd();

echo $layout->cardStart();
echo "<b>offsetExists:</b>:";
var_dump(isset($entry['content']));
echo $layout->cardEnd();

echo $layout->cardStart();
echo "<b>offsetGet</b>:";
var_dump($entry['content']);
echo $layout->cardEnd();

echo $layout->cardStart();
$entry["content"] = "trigger";
echo "<b>offsetSet</b>: {$entry->setMe}";
echo $layout->cardEnd();

echo $layout->cardStart();
echo "<b>offsetUnset: (muss leer sein)</b>:";
unset($entry['content']);
echo $layout->cardEnd();

// [OffsetExists] wird bei Abfragen wie isset() getriggert
// [OffsetGet] wird bei "Ausgabe"-Anweisungen getriggert wie var_dump(); 
// [OffsetSet] setzt Variablenwert bei Zuweisung von Außen 
// [OffsetUnset] vernichtet Variable bei unset 

?>

<?php include('pages/footer.php'); ?>