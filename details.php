<?php

$blogdata = [
    ['title' => 'Title 1', 'content' => 'this is the content for title 1', 'author' => 'Danny Poff', 'date' => 'Today'],
    ['title' => 'Title 2', 'content' => 'this is the content for title 2', 'author' => 'Nate Brewer', 'date' => 'Today Aswell']
];

$post_id=$_GET['x'];

?>

<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <div class="jumbotron text-center">
        <h1><?php echo $blogdata[$post_id]['title'] ?></h1>
        <hr>
        <h3>
            <?php echo $blogdata[$post_id]['content'] ?>
        </h3>
        <h5>
            <?php echo $blogdata[0]['author'].' - '.$blogdata[0]['date'] ?>
        </h5>
    </div>


</html>