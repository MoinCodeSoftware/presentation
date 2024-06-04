<?php include('pages/header.php'); ?>
<body>
    <div class="container">
        <h1>While Schleife</h1>
        <form method="POST">
            <div class="form-group">
                <label for="zahl">Geben Sie eine Zahl ein:</label>
                <input type="number" class="form-control" id="zahl" name="zahl" required>
            </div>
            <button type="submit" class="btn btn-primary">Abschicken</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $zahl = $_POST['zahl'];

            if ($zahl > 100) {
                echo '<div class="alert alert-warning" role="alert">
                        Die eingegebene Zahl ist zu hoch. Bitte wählen Sie eine Zahl unter 100.
                      </div>';
            } else {
                $num = 1;

                while ($num <= $zahl) {
                    echo "Wir sind bei der While-Wiederholung Nummer: " . $num . "<br>";
                    $num++;
                }
            }
        }
        ?>

    </div>
<?php include('pages/footer.php'); ?>