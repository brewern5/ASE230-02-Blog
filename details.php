<?php

$blogdata = [
    ['title' => 'Title 1', 'content' => 'this is the content for title 1', 'author' => 'Danny Poff', 'date' => 'Today'],
    ['title' => 'Title 2', 'content' => 'this is the content for title 2', 'author' => 'Nate Brewer', 'date' => 'Today Aswell']
];

$post_id=$_GET['x'];

?>

<html>
    <head>
        <h1><?php echo $blogdata[$post_id]['title'] ?></h1>
        <hr>
    </head>
    <h3>
        <?php echo $blogdata[$post_id]['content'] ?>
    </h3>
    <h5>
        <?php echo $blogdata[0]['author'].' - '.$blogdata[0]['date'] ?>
    </h5>


</html>