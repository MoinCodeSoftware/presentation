<h2>Simples Do-While Beispiel</h2>
<p>Fußgesteuerte Schleifen immer wenn die Operation mindestens einmal ausgeführt werden muss. 
    <br />Ein Beispiel wäre bei einem Zufallszahlengenerator, der bei 5 abbricht aher mindestens eine Zufallszahl natürlich generieren soll</p>

    <p>
$counter = 100;

do {

echo "Count: ".$counter."<br />";
$counter--;
} while($counter >= 1);</p>

<?php


$counter = 100;

do {

echo "Count: ".$counter."<br />";
$counter--;
} while($counter >= 1);

?>