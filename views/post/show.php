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

<h2>Kommentare</h2>

<?php

foreach($comments as $comment) { ?>


<div class="panel panel-default">
<div class="panel-body">
        <p><?php echo nl2br($comment['content']); ?></p>
    </div>
</div>


<?php } ?>


<div class="panel panel-default">
    <div class="panel-body">
        <form action="post?id=<?php echo $id; ?>" method="POST">

            <textarea name="content" class="form-control">


            </textarea>
            <br />
            <input type="submit" value="Kommentar hinzufügen" class="btn btn-primary">

        </form>
    </div>
</div>

<?php include __DIR__ . "/../../views/layout/footer.php"; ?>