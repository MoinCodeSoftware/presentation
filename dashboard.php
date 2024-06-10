<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="examples/css/style.css">
    <style>
        .navbar-toggler-icon {
            background-image: url('https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css');
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php">Startseite</a>
                </li>
                <!-- Weitere Navigationspunkte hier einfügen -->
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1>Dashboard</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Willkommen im Dashboard</h2>
                        <p>Für mein aktuelles Bewerbungsverfahren nach fünf Jahren Selbständigkeit werde ich häufig nach Referenzen gefragt. 
                            Da ich diese zwar vorweisen aber nicht im Detail den Code preisgeben kann, soll dieses Repository einen Einblick über Skills und Stil vermitteln.</p>
                            <p>Ziel ist es, alle von mir verwendeten Technologien einmal anzuwenden und darzustellen. Daher wird dieses Repository mit der Zeit wachsen. Im Kern sind 
                                dies HTML, CSS, JavaScript, jQuery, PHP, Ajax, SQL aber auch APIs und Schnittstellen mit XML, CSV, JSON werden folgen, sowie verschiedene Arbeiten mit 
                                Frameworks wie Laravel, Symfony, Zend. Für den Start soll ein eigenes Framework auf MVC Basis vermitteln, dass ich über das generelle Verständnis eines jeden
                                MVC basierten Frameworks verfüge und es auch selbst nachgebaut habe. 
                            </p>
                    </div>
                </div>
            </div>
        </div>
        
    <br /><br />
        
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                <div class="card-body">
                    <h2>PHP Basics</h2>
                    <ul>
                        <li><a href="examples/empty_isset.php">Empty und Isset</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/empty_isset.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/ifelse.php">If-Else</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/ifelse.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/stringoperations.php">String Operationen</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/stringoperations.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/whileschleife.php">While Schleifen</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/whileschleife.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/forschleife.php">For Schleifen</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/forschleife.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/dowhile.php">Do-While Schleife</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/dowhile.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/includerequire.php">Include or Require </a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/includerequire.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/breakandcontinue.php">Break and Continue</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/breakandcontinue.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/arrays.php">Arrays</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/arrays.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/functions.php">Funktionen</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/functions.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/klassen.php">Klassen und Vererbung</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/klassen.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/arrayaccess.php">ArrayAccess Interface</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/arrayaccess.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/typedeclarations.php">Type Declarations</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/typedeclarations.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/variableattributes.php">Variable Attribute & Methoden</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/variableattributes.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/magicmethods.php">Magische Methoden</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/magicmethods.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/invoke.php">Invoke Beispiel</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/invoke.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/exceptions.php">Exceptions</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/exceptions.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/closures.php">Closures</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/closures.php" target="_blank">GitHub</a></li>
                    </ul>
                </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2>MyMVC Framework</h2>
                        <p>Zend, Laravel, Symfony? Wie wäre es mit einem eigenen Framework? Jedes Framework hat seine Vorteile und Eigenheiten. 
                            Um wirklich sicherzustellen, das Prinzip zu verstehen und damit jedes Framework schnell lernen zu können, lohnt es sich, sein eigenes Framework zu entwickeln. </p>
                        <a href="pages/index.php">MVC Projekt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>