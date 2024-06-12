<?php include('pages/header.php'); ?>
<?php require_once('pages/layout.php'); ?>

<?php

$layout = new Layouthelper();

$languages = [
    "HTML",
    "CSS",
    "JavaScript",
    "Ajax",
    "SQL",
    "C#"
];

$languages[] = "Java";
array_unshift($languages, "PHP");

$cms = array("sehr gut" => "WordPress", "gut" => "Joomla!", "auch gut" => "CMSunrise", "ganz okay" => "Typo3");
$cms["noch so einiges mehr"] = "Zusätzlich";

$alles = [
    "Programmierung" => [
        "HTML",
        "CSS",
        "JavaScript",
        "Ajax",
        "SQL",
        "C#"
    ],
    "E-Commerce" => [
        "Magento",
        "Shopware",
        "WooCommerce",
        "OSCommerce",
        "JTL Shop"
    ]
];

?>

<div class="container">
    <h2>Arrays</h2>

    <div class="row mb-4">
        <div class="col-md-12">
            <?php echo $layout->cardStart(); ?>
            <h4>PHP Code:</h4>
            <pre><code>
$languages = [
    "HTML",
    "CSS",
    "JavaScript",
    "Ajax",
    "SQL",
    "C#"
];

$languages[] = "Java";
array_unshift($languages, "PHP");
            </code></pre>
            <h4>Ausgabe:</h4>
            <ul>
                <?php 
                foreach ($languages as $language) {
                    echo "<li>{$language}</li>";
                }
                ?>
            </ul>
            <?php echo $layout->cardEnd(); ?>
        </div>
    </div>

    <h2>Assoziative Arrays</h2>

    <div class="row mb-4">
        <div class="col-md-12">
            <?php echo $layout->cardStart(); ?>
            <h4>PHP Code:</h4>
            <pre><code>
$cms = array("sehr gut" => "WordPress", "gut" => "Joomla!", "auch gut" => "CMSunrise", "ganz okay" => "Typo3");
$cms["noch so einiges mehr"] = "Zusätzlich";
            </code></pre>
            <h4>Ausgabe:</h4>
            <ul>
                <?php 
                foreach ($cms as $key => $value) {
                    echo "<li>{$value} beherrsche ich {$key}</li>";
                }
                ?>
            </ul>
            <?php echo $layout->cardEnd(); ?>
        </div>
    </div>

    <h2>Mehrdimensionale Arrays</h2>

    <div class="row mb-4">
        <div class="col-md-12">
            <?php echo $layout->cardStart(); ?>
            <h4>PHP Code:</h4>
            <pre><code>
$alles = [
    "Programmierung" => [
        "HTML",
        "CSS",
        "JavaScript",
        "Ajax",
        "SQL",
        "C#"
    ],
    "E-Commerce" => [
        "Magento",
        "Shopware",
        "WooCommerce",
        "OSCommerce",
        "JTL Shop"
    ]
];
            </code></pre>
            <h4>Ausgabe:</h4>
            <ul class="list-group">
                <?php
                foreach ($alles as $programmiersprachen => $items) {
                    echo "<li class='list-group-item'><b>{$programmiersprachen}</b><ul class='list-group'>";
                    foreach ($items as $item) {
                        echo "<li class='list-group-item'>{$item}</li>";
                    }
                    echo "</ul></li>";
                }
                ?>
            </ul>
            <?php echo $layout->cardEnd(); ?>
        </div>
    </div>

    <p class="alert alert-primary">Verwendung auch von Array Funktionen z.B. array_unshift für den showcase. Bitte Sourcecode ansehen.</p>
</div>

<?php include('pages/footer.php'); ?>
