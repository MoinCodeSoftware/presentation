<?php include('pages/header.php'); ?>
<body>
    <div class="container">
        <h1>For Schleifen Beispiel</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $limit = $_POST["limit"];
            if ($limit > 100) {
                echo '<div class="alert alert-danger">Denk an deine Rechenkapazität! Bitte wähle eine kleinere Zahl aus.</div>';
            } else {
                echo '<div class="alert alert-success">Erfolgreich bis ' . $limit . ' gezählt.</div>';
                for ($i = 1; $i <= $limit; $i++) {
                    echo '<div class="alert alert-info">Schleife ist in Wiederholung ' . $i . '.</div>';
                }
                echo '<div class="alert alert-primary">Schleife beendet.</div>';
            }
        }
        ?>
        <form method="POST">
            <div class="form-group">
                <label for="limit">Bis wohin soll die Schleife zählen?</label>
                <input type="number" class="form-control" id="limit" name="limit" min="1" max="100" required>
            </div>
            <button type="submit" class="btn btn-primary">Start</button>
        </form>
    </div>
</body>
</html>