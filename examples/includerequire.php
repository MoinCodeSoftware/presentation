<?php include('pages/header.php'); ?>
<div class="container">
    <h2 class="exampleheading">include, require, include_once, require_once</h2>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4>Erklärung Include</h4>
                    <ul class="list-group">
                        <li class="list-group-item">include("datei.php"); - inkludiert mehrfach eine Datei, es kommt bei Fehlen maximal zu einer Fehlermeldung, aber der Code wird ausgeführt.</li>
                        <li class="list-group-item">include_once("datei.php"); - inkludiert einfach eine Datei (wird nicht mehrfach inkludiert), es kommt bei Fehlen maximal zu einer Fehlermeldung, aber der Code wird ausgeführt.</li>
                    </ul>
                    <br />
                    <h4>Erklärung Require</h4>
                    <ul class="list-group">
                        <li class="list-group-item">require("datei.php"); - Diese Datei muss vorhanden sein, sonst mit einem Fatal Error abgebrochen.</li>
                        <li class="list-group-item">require_once("datei.php"); - Datei muss vorhanden sein (sonst fatal error) und wird nur einmal geladen.</li>
                    </ul>
                    <br />
                    <p>Wird so richtig erst wichtig, in den OOP Beispielen.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('pages/footer.php'); ?>
