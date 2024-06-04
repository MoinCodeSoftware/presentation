
<!DOCTYPE html>
<html>
<head>
    <title>If-Else Beispiel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>If-Else Beispiel</h2>
        <form method="POST" action="ifelse.php">
            <div class="form-group">
                <label for="num1">Nummer 1:</label>
                <input type="number" class="form-control" id="num1" name="num1" required>
            </div>
            <div class="form-group">
                <label for="num2">Nummer 2:</label>
                <input type="number" class="form-control" id="num2" name="num2" required>
            </div>
            <button type="submit" class="btn btn-primary">Vergleiche die Nummern</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            if ($num1 < $num2) {
                echo "<br /><p>$num1 ist kleiner als $num2</p>";
            } elseif ($num1 > $num2) {
                echo "<br /><p>$num1 ist größer als $num2</p>";
            } else {
                echo "<br /><p>Die Nummern sind gleich du Schlingel</p>";
            }
        }
        ?>
    </div>
</body>
</html>

