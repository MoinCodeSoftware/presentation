<?php 

include __DIR__ . "/../../views/layout/header.php";


echo '<ul class="my list-group">';

foreach($posts AS $post) : ?>

<li class='my list-group-item'>
    <a href="post?id=<?php echo secOutput($post->id); ?>">
        <?php echo secOutput($post->title); ?>
    </a>
</li>
<?php

endforeach;

echo '</ul>';



include __DIR__ . "/../../views/layout/footer.php";

?>
