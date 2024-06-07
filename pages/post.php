<?php 
    require_once('../init.php');
    include ('elements/header.php');
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <h1 class="text-center">Posts</h1>
    </div>


<?php

    $id = $_GET['id'];
    $postRepository = $container->getPostsRepository();
    $post = $postRepository->fetchPost($id);

?>




<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $post['title']; ?></h3>
    </div>

   <?php echo $post->getShortContent($post['content']); ?>
    
    <div class="panel-body">
        <p><?php echo nl2br($post['content']); ?></p>
    </div>
</div>





<?php include ('elements/footer.php'); ?>