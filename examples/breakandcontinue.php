<?php include('pages/header.php'); ?>

<h2>Break and Contineu</h2>
<p>Schleife zählt eigentlich bis 100, macht zwischen 50 und 60 ein <b>(contineu;)</b> und bricht ab <b>(break;)</b> bei <b>70</b></p>
<?php

for($x = 0; $x <= 100; $x++) {

    if($x >= 50 && $x <= 60) {
        continue;
    } elseif($x == 71) {
        break;
    }

    var_dump($x);
    echo "<br />";

}


?>

<?php include('pages/footer.php'); ?>