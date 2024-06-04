<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        
        .container {
            margin-top: 50px;
        }
        
        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .col-md-66 {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; /* Added margin-bottom to create spacing between boxes */
        }
        
        h2 {
            color: #343a40;
            margin-bottom: 20px;
        }
        
        ul {
            list-style-type: none;
            padding: 0;
        }
        
        li {
            margin-bottom: 10px;
        }
        
        a {
            color: #007bff;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        p {
            color: #6c757d;
        }
    </style>
</head>
<body>
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
                    <h2>PHP Funktionen</h2>
                    <ul>
                        <li><a href="examples/empty_isset.php">Empty und Isset</a> 
                        | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/empty_isset.php" target="_blank">GitHub</a>
                    </li>
                        <li><a href="examples/ifelse.php">If-Else</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/ifelse.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/stringoperations.php">String Operationen</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/stringoperations.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/whileschleife.php">While Schleifen</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/whileschleife.php" target="_blank">GitHub</a></li>
                        <li><a href="examples/whileschleife.php">For Schleifen</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/forschleife.php" target="_blank">GitHub</a></li>
                            <li><a href="examples/whileschleife.php">Do-While Schleife</a> | <a href="https://github.com/MoinCodeSoftware/presentation/blob/main/examples/dowhile.php" target="_blank">GitHub</a></li>
                    
                    
                        </ul>
                </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2>Projekt</h2>
                        <p>Hier ist ein Link zu meinem Projekt:</p>
                        <a href="project.php">Projekt</a>
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