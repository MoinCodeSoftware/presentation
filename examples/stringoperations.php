<?php

$testname = "Hallo Timm";
$ergebnis = strpos($testname, "Hallo");

echo "<h2>String zählen mit strlen() <br /></h2>";
var_dump(strlen($testname));
echo "<h2>String kleinschreiben mit strtolower() <br /></h2>";
var_dump(strtolower($testname));
echo "<h2>String großschreiben mit strtoupper() <br /></h2>";
var_dump(strtoupper($testname));
echo "<h2>String ersetzen mit str_replace() <br /></h2>";
var_dump(str_replace("Timm", "Besucher", $testname));
echo "<h2>String ersetzen mit str_pos() <br /></h2>";
var_dump("Timm Beginnt im String an Stelle: ".strpos($testname, "Timm")." ");
echo "<br /><br />Besonderheit wegen weak-typing in PHP: strpos bei Auffinden eines String an erster Position int(0) zurückgibt, darf kein !empty in einer if-Abfrage gemacht werden bzw. es darf keine Typ-Konvertierung stattfinden, da strpos int(0) zurückgibt aber das bei einer normalen Abfrage in ein false umgewandelt wird.";

echo "<br /><br /><br />";
echo "Hier würde er nichts ausgeben, da das Ergebnis int(0) ist.";

$testname = "Hallo Timm";
$ergebnis = strpos($testname, "Hallo");
if(!empty($ergebnis)) {
    echo "Begriff gefunden";
}
?>
<p>
if(!empty($ergebnis)) {
    echo "Begriff gefunden";
}
</p>

<p>Daher muss man mit !== false arbeiten</p>
<?php

$testname = "Hallo Timm";
$ergebnis = strpos($testname, "Hallo");

if($ergebnis !== false) {
    echo "Begriff gefunden";
}

?>