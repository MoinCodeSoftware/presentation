<?php include __DIR__ . "/../../views/layout/header.php"; ?>
 

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo secOutput($post['title']); ?></h3>
    </div>

   <?php echo secOutput($post->getShortContent($post['content'])); ?>
    
    <div class="panel-body">
        <p><?php echo secOutput($post['content']); ?></p>
    </div>
</div>

<h2>Kommentare</h2>


<ul class="list-group">
<?php

foreach($comments as $comment) { ?>

<li class="list-group-item">
    <?php echo secOutput($comment['content']); ?>
</li>

<?php } ?>
</ul>


<div class="panel panel-default">
    <div class="panel-body">
        <form action="post?id=<?php echo $post['id']; ?>" method="POST">

            <textarea name="content" class="form-control"></textarea>
            <br />
            <input type="submit" value="Kommentar hinzufügen" class="btn btn-primary">

        </form>
    </div>
</div>

<?php include __DIR__ . "/../../views/layout/footer.php"; ?>