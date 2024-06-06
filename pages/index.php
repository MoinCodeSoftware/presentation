<?php require_once('../init.php'); ?>
<?php include ('elements/header.php'); 

use App\Post\PostsRepository as PostsRepository;


?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <h1 class="text-center">Blog Dashboard</h1>
    </div>
    <p class="justify-content-center row smallText">powered by MyMVC Framework</p>


<?php

    $postsRepository = new PostsRepository($pdo);
    $result = $postsRepository->fetchPosts();

    echo '<ul class="my list-group">';

    foreach($result AS $post) : ?>

    <li class='my list-group-item'>
        <a href="post.php?id=<?php echo $post->id; ?>">
            <?php echo $post->title; ?>
        </a>
    </li>

<?php
    endforeach;

    echo '</ul>';


?>



  <?php include ('elements/footer.php'); ?>