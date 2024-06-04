<?php include('pages/header.php'); ?>
<?php require_once('pages/layout.php'); ?>

<?php

    $layout = new Layouthelper();

    $languages = array(
    "HTML",
    "CSS",
    "JavaScript",
    "PHP",
    "Ajax",
    "SQL"
);

$languages[] = "Java";

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


<?php include('pages/header.php'); ?>