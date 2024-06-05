<?php $pdo = new PDO('mysql:host=localhost;dbname=blog2','root',''); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 70px;
        }
        .smallText {
            font-size:7px !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="go.php">Mein kleines MVC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="go.php">Start</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Mehr</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <h1 class="text-center">Blog Dashboard</h1>
        </div>
        <p class="justify-content-center row smallText">powered by MyMVC Framework</p>

    <?php
        $result = $pdo->query("SELECT * FROM `posts`");

        echo '<ul class="list-group">';

        foreach($result AS $post) : ?>

        <li class='list-group-item'>
            <?php echo $post['title']; ?>
        </li>

    <?php
        endforeach;

        echo '</ul>';
   

    ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
