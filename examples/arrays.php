<?php include('pages/header.php'); ?>
<?php require_once('pages/layout.php'); ?>

<?php

    $layout = new Layouthelper();

    $languages = array(
    "HTML",
    "CSS",
    "JavaScript",
    "Ajax",
    "SQL",
    "C#"
);

$languages[] = "Java";
array_unshift($languages, "PHP");

    $cms = array("Sehr gut" => "WordPress", "Gut" => "Joomla!", "Auch gut" => "CMSunrise", "Ganz okay" => "Typo3");

?>
   <h1>Arrays</h1>
<div class="container">


        <h2>Programmiersprachen</h2>

        <?php echo $layout->cardStart(); ?>
        <ul>
        <?php 
            foreach($languages as $language) {
                echo "<li>{$language}</li>";
            }
        ?>
        </ul>
        <?php echo $layout->cardEnd(); ?>
        <br />
        <h2>Content Management Systeme</h2>

        <?php echo $layout->cardStart(); ?>
        <ul>
        <?php 
            foreach($cms as $key => $value) {
                echo "<li>{$value} beherrsche ich {$key}</li>";
            }
        ?>
        </ul>
        <?php echo $layout->cardEnd(); ?>
<br />
        <p class="alert alert-primary">Verwendung auch von Array Funktionen z.B. array_unshift für den showcase. Bitte Sourcecode ansehen.</p>


<?php include('pages/footer.php'); ?>