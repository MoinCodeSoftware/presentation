<?php include __DIR__ . "/../../../views/layout/header.php"; ?>

<?php
    foreach($all as $entry) :?>
    <li>
        <a href="posts-edit?id=<?php echo secOutput($entry->id); ?>"><?php echo secOutput($entry->title); ?></a>
    </li>
   <?php endforeach;
?>

<?php include __DIR__ . "/../../../views/layout/footer.php"; ?>