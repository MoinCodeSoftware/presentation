<?php


class LetsGo {


    public function __get($offset) 
    {
        if($offset == "triggervar") {
            return $offset = "erweitere TriggerVar";
        } else {
            return $offset;
        }

    }


    public function __isset($offset) {

        if($offset == "urknall") {
            return true;
        } else {
            return false;
        }

    }

    public function __set($offset, $value)
    {

        $this->$offset = $value." und in der Funktion minimal verändert wurde";
        return $this->$offset;

    }




}



$go = new LetsGo();


echo "<h2>__get()</h2>";
var_dump($go->notexists);
echo "<br /><br />";
var_dump($go->triggervar);



echo "<br /><br />";echo "<br /><br />";
echo "<h2>__isset()</h2>";

var_dump(isset($go->urknall));
echo "<br /><br />";
var_dump(isset($go->keinurknall));




echo "<br /><br />";echo "<br /><br />";
echo "<h2>__set()</h2>";

$go->ganzneueeigenschaft = 'Ich bin eine Eigenschaft die von Außen definiert'; 
var_dump($go->ganzneueeigenschaft);

echo "Möchte man in der Laufzeit zum Beispiel Berechnungen von Daten durchführen, wenn sie vorhanden sind aber auch nur dann, sind diese Methoden gut geeignet.
Beispielweise wenn wir im Model eine Start- und Enddatum haben und dann ohne Datenredundanz auf die Laufzeit in Wochen zugreifen möchten, können wir in der Laufzeit 
einfach eine (noch) nicht existente Eigenschaft definieren, abfangen, mit den Daten aus dem Model arbeiten (Start- und Enddatum), die Berechnung machen und dann als Klassen-Eigenschaft zurückgeben.";

?>