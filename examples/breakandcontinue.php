<?php include('pages/header.php'); ?>

<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <h2>Break and Continue</h2>
            <p>Schleife zählt eigentlich bis 100, macht zwischen 50 und 60 ein <b>(continue;)</b> und bricht ab <b>(break;)</b> bei <b>71</b></p>
            <pre><code>
for($x = 0; $x <= 100; $x++) {
    if($x >= 50 && $x <= 60) {
        continue;
    } elseif($x == 71) {
        break;
    }
    var_dump($x);
    echo "&lt;br /&gt;";
}
            </code></pre>
            <p>Ausgabe:</p>
            <pre><?php
for($x = 0; $x <= 100; $x++) {
    if($x >= 50 && $x <= 60) {
        continue;
    } elseif($x == 71) {
        break;
    }
    var_dump($x);
    echo "<br />";
}
            ?></pre>
        </div>
    </div>
</div>

<?php include('pages/footer.php'); ?>
