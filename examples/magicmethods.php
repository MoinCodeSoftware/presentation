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
?>

<?php include('pages/header.php'); ?>
<?php require_once('pages/layout.php'); ?>

<div class="container">
    <h1>Magic Methods: __get(), __isset(), __set()</h1>

    <?php 
    $layout = new Layouthelper();

    echo $layout->cardStart(); 
    ?>
    <h2>__get()</h2>
    <h4>PHP Code:</h4>
    <pre><code>
public function __get($offset) 
{
    if($offset == "triggervar") {
        return $offset = "erweitere TriggerVar";
    } else {
        return $offset;
    }
}

var_dump($go->notexists);

var_dump($go->triggervar);
    </code></pre>
    <h4>Ausgabe:</h4>
    <?php
    var_dump($go->notexists);
    echo "<br /><br />";
    var_dump($go->triggervar);
    ?>
    <?php echo $layout->cardEnd(); ?>

    <?php 
    echo "<br /><br />";
    echo "<h2>__isset()</h2>";
    echo $layout->cardStart(); 
    ?>
    <h4>PHP Code:</h4>
    <pre><code>
public function __isset($offset) {

    if($offset == "urknall") {
        return true;
    } else {
        return false;
    }
}

var_dump(isset($go->urknall));

var_dump(isset($go->keinurknall));
    </code></pre>
    <h4>Ausgabe:</h4>
    <?php
    var_dump(isset($go->urknall));
    echo "<br /><br />";
    var_dump(isset($go->keinurknall));
    ?>
    <?php echo $layout->cardEnd(); ?>

    <?php 
    echo "<br /><br />";
    echo "<h2>__set()</h2>";
    echo $layout->cardStart(); 
    ?>
    <h4>PHP Code:</h4>
    <pre><code>
public function __set($offset, $value)
{
    $this->$offset = $value." und in der Funktion minimal verändert wurde";
    return $this->$offset;
}

$go->ganzneueeigenschaft = 'Ich bin eine Eigenschaft die von Außen definiert'; 
var_dump($go->ganzneueeigenschaft);
    </code></pre>
    <h4>Ausgabe:</h4>
    <?php
    $go->ganzneueeigenschaft = 'Ich bin eine Eigenschaft die von Außen definiert'; 
    var_dump($go->ganzneueeigenschaft);
    echo "Möchte man in der Laufzeit zum Beispiel Berechnungen von Daten durchführen, wenn sie vorhanden sind aber auch nur dann, sind diese Methoden gut geeignet.
    Beispielweise wenn wir im Model eine Start- und Enddatum haben und dann ohne Datenredundanz auf die Laufzeit in Wochen zugreifen möchten, können wir in der Laufzeit 
    einfach eine (noch) nicht existente Eigenschaft definieren, abfangen, mit den Daten aus dem Model arbeiten (Start- und Enddatum), die Berechnung machen und dann als Klassen-Eigenschaft zurückgeben.";
    ?>
    <?php echo $layout->cardEnd(); ?>

</div>

<?php include('pages/footer.php'); ?>
