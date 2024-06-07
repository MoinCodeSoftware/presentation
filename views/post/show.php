<?php include __DIR__ . "/../../views/layout/header.php"; ?>
 

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $post['title']; ?></h3>
    </div>

   <?php echo $post->getShortContent($post['content']); ?>
    
    <div class="panel-body">
        <p><?php echo nl2br($post['content']); ?></p>
    </div>
</div>


<?php include __DIR__ . "/../../views/layout/footer.php"; ?>