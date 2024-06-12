<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style>
        body {

            background-color: #f8f9fa;
        }
        .smallText {
            font-size:7px !important;
        }
        ul.my li:hover {
            background-color: lightblue;
        }
        .navbar {
            border-radius:0px;
        }
        .list-group-item:nth-child(even) {
            background-color: #f2f2f2;
        }
        .rainbow-link {
    background: linear-gradient(45deg, red, orange, yellow, green, blue, indigo, violet);
    background-size: 400% 400%;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: rainbow-animation 2s linear infinite;
    text-decoration: none; /* Um Unterstreichungen für Links zu entfernen */
}

.rainbow-link:hover {
    animation-play-state: paused; /* Stoppt die Animation beim Hovern */
}

@keyframes rainbow-animation {
    0% {
        background-position: 0% 50%;
    }
    100% {
        background-position: 100% 50%;
    }
}


    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index">MyMVC Framework</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index">Start</a>
                    </li>
                    <li class="nav-item">
                        <?php if(!empty($_SESSION['login'])) : ?>
                            <a class="nav-link" href="logout">Logout</a>
                            <?php else : ?>
                        <a class="nav-link" href="login">Login</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">


