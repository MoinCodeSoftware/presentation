<?php include __DIR__ . "/../../../views/layout/header.php"; ?>

<h2>Posts verwalten</h2>
<?php

echo '<ul class="my list-group">';
    foreach($all as $entry) :?>
    <li class='my list-group-item'>
        <a href="posts-edit?id=<?php echo secOutput($entry->id); ?>"><?php echo secOutput($entry->title); ?> (bearbeiten)</a>
    </li>
   <?php endforeach;
echo '</ul>';
?>

<?php include __DIR__ . "/../../../views/layout/footer.php"; ?>