<?php include('pages/header.php'); ?>

<div class="container">
    <!-- Simples Do-While Beispiel -->
    <div class="row mb-4">
        <div class="col-md-12">
            <h2>Simples Do-While Beispiel</h2>
            <p>Fußgesteuerte Schleifen immer wenn die Operation mindestens einmal ausgeführt werden muss. 
            <br />Ein Beispiel wäre bei einem Zufallszahlengenerator, der bei 5 abbricht aber mindestens eine Zufallszahl natürlich generieren soll</p>
            <pre><code>
$counter = 100;

do {
    echo "Count: ".$counter."<br />";
    $counter--;
} while($counter >= 1);
            </code></pre>
            <p>Ausgabe:</p>
            <pre><?php
$counter = 100;
do {
    echo "Count: " . $counter . "<br />";
    $counter--;
} while ($counter >= 1);
            ?></pre>
        </div>
    </div>
</div>

<?php include('pages/footer.php'); ?>
