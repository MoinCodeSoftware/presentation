<?php

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



echo "<b>offsetExists:</b>:";
var_dump(isset($entry['content']));
echo "<br /><br />";

echo "<b>offsetGet</b>:";
var_dump($entry['content']);
echo "<br /><br />";

$entry["content"] = "trigger";
echo "<b>offsetSet</b>: {$entry->setMe}";
echo "<br /><br />";

echo "<b>offsetUnset: (muss leer sein)</b>:";
unset($entry['content']);

// [OffsetExists] wird bei Abfragen wie isset() getriggert
// [OffsetGet] wird bei "Ausgabe"-Anweisungen getriggert wie var_dump(); 
// [OffsetSet] setzt Variablenwert bei Zuweisung von Außen 
// [OffsetUnset] vernichtet Variable bei unset 

?>