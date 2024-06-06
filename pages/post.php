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
$postRepository = new App\Post\PostsRepository($pdo);

$post = $postRepository->fetchPost($id);

?>




<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $post["title"]; ?></h3>
    </div>
    <div class="panel-body">
        <p><?php echo nl2br($post["content"]); ?></p>
    </div>
</div>





<?php include ('elements/footer.php'); ?>