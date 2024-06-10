<?php

$filesource = "examplefile.dat";

// Generelles Beispiel einer abstrakten Klasse einmal zeigen

    abstract class ExampleAbstract 
    {

        public function printMe() {
            var_dump("Ich kann nur abgeleitet werden <br />");
        }

        abstract public function test();

    }


    class ExtendExampleAbstract extends ExampleAbstract 
    {
        public function test() {
            var_dump("Methode muss existieren (wie bei Interface) um erweitert zu werden <br />");
        }
    }


    $test = new ExtendExampleAbstract();
    $test->printMe();
    $test->test();

// Konkreteres Beispiel einer abstrakten Klasse einmal zeigen

    abstract class FileHandler 
    {
        abstract public function open($filesource);
        abstract public function read();
        abstract public function close();
    }

    class TextFileHandler extends FileHandler
    {

        public function open($filesource)
        {
            var_dump("Text Datei öffnen <br />");
        }
        public function read()
        {
            var_dump("Text Datei verarbeiten <br />");
        }

        public function close() 
        {
            var_dump("Textdatei schließen <br />");
        }

    }

    class XMLFileHandler extends FileHandler 
    {
        public function open($filesource) 
        {
            var_dump("XML Datei öffnen <br />");
        }

        public function read() 
        {
            var_dump("XML Datei verarbeiten <br />");
        }

        public function close() 
        {
            var_dump("XML Datei schließen <br />");
        }

    }


    class CsvFileHandler extends FileHandler 
    {

        public function open($filesource) 
        {
            var_dump("CSV Datei verarbeiten <br />");
        }

        public function read() 
        {
            var_dump("CSV Datei öffnen <br />");
        }


        public function close()
        {
            var_dump("CSV Datei schließen <br />");
        }


    }


$textFileHandler = new TextFileHandler();
$textFileHandler->open($filesource);
$textFileHandler->read();
$textFileHandler->close();


$xmlFileHandler = new XMLFileHandler();
$xmlFileHandler->open($filesource);
$xmlFileHandler->read();
$xmlFileHandler->close();

$csvFileHandler = new CsvFileHandler();
$csvFileHandler->open($filesource);
$csvFileHandler->read();
$csvFileHandler->close();





?>