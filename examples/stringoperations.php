<?php include('pages/header.php'); ?>

<div class="container">
    <!-- Beispiel 1: strlen() -->
    <div class="row mb-4">
        <div class="col-md-12">
            <h2>String zählen mit strlen()</h2>
            <pre><code>
$testname = "Hallo Timm";
var_dump(strlen($testname));
            </code></pre>
            <p>Ausgabe:</p>
            <pre><?php var_dump(strlen("Hallo Timm")); ?></pre>
        </div>
    </div>

    <!-- Beispiel 2: strtolower() -->
    <div class="row mb-4">
        <div class="col-md-12">
            <h2>String kleinschreiben mit strtolower()</h2>
            <pre><code>
$testname = "Hallo Timm";
var_dump(strtolower($testname));
            </code></pre>
            <p>Ausgabe:</p>
            <pre><?php var_dump(strtolower("Hallo Timm")); ?></pre>
        </div>
    </div>

    <!-- Beispiel 3: strtoupper() -->
    <div class="row mb-4">
        <div class="col-md-12">
            <h2>String großschreiben mit strtoupper()</h2>
            <pre><code>
$testname = "Hallo Timm";
var_dump(strtoupper($testname));
            </code></pre>
            <p>Ausgabe:</p>
            <pre><?php var_dump(strtoupper("Hallo Timm")); ?></pre>
        </div>
    </div>

    <!-- Beispiel 4: str_replace() -->
    <div class="row mb-4">
        <div class="col-md-12">
            <h2>String ersetzen mit str_replace()</h2>
            <pre><code>
$testname = "Hallo Timm";
var_dump(str_replace("Timm", "Besucher", $testname));
            </code></pre>
            <p>Ausgabe:</p>
            <pre><?php var_dump(str_replace("Timm", "Besucher", "Hallo Timm")); ?></pre>
        </div>
    </div>

    <!-- Beispiel 5: strpos() -->
    <div class="row mb-4">
        <div class="col-md-12">
            <h2>String Position finden mit strpos()</h2>
            <pre><code>
$testname = "Hallo Timm";
var_dump("Timm beginnt im String an Stelle: " . strpos($testname, "Timm"));
            </code></pre>
            <p>Ausgabe:</p>
            <pre><?php var_dump("Timm beginnt im String an Stelle: " . strpos("Hallo Timm", "Timm")); ?></pre>
        </div>
    </div>

    <!-- Besonderheit bei strpos -->
    <div class="row mb-4">
        <div class="col-md-12">
            <h2>Besonderheit wegen weak-typing in PHP</h2>
            <p>Besonderheit: Wenn strpos einen String an der ersten Position (int(0)) findet, darf kein !empty in einer if-Abfrage gemacht werden, da strpos int(0) zurückgibt, was bei einer normalen Abfrage in false umgewandelt wird.</p>
            <pre><code>
$testname = "Hallo Timm";
$ergebnis = strpos($testname, "Hallo");
if(!empty($ergebnis)) {
    echo "Begriff gefunden";
}
            </code></pre>
            <p>Hier würde nichts ausgegeben, da das Ergebnis int(0) ist.</p>
            <pre><?php
$testname = "Hallo Timm";
$ergebnis = strpos($testname, "Hallo");
if (!empty($ergebnis)) {
    echo "Begriff gefunden";
}
            ?></pre>
        </div>
    </div>

    <!-- Richtige Nutzung von strpos -->
    <div class="row mb-4">
        <div class="col-md-12">
            <h2>Richtige Nutzung von strpos</h2>
            <p>Daher muss man mit !== false arbeiten:</p>
            <pre><code>
$testname = "Hallo Timm";
$ergebnis = strpos($testname, "Hallo");
if ($ergebnis !== false) {
    echo "Begriff gefunden";
}
            </code></pre>
            <p>Ausgabe:</p>
            <pre><?php
$testname = "Hallo Timm";
$ergebnis = strpos($testname, "Hallo");
if ($ergebnis !== false) {
    echo "Begriff gefunden";
}
            ?></pre>
        </div>
    </div>
</div>

<?php include('pages/footer.php'); ?>
