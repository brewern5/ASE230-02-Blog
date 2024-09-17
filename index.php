<?php

$blogdata = [
    ['title' => 'Title 1', 'content' => 'this is the content for title 1', 'author' => 'Danny Poff', 'date' => 'Today'],
    ['title' => 'Title 2', 'content' => 'this is the content for title 2', 'author' => 'Nate Brewer', 'date' => 'Today Aswell']
];

function displayElement($element,$x) { ?>
    <header class="resume-header pt-4 pt-md-0">
        <div class="row">
            <div class="col">
                <div class="row p-4 justify-content-center justify-content-md-between">
                    <div class="primary-info col-auto">
                        <a href = "detail.php?x=<?php echo $x;?>"><?=$element['title']; ?></a>
                    </div><!--//primary-info-->
                </div><!--//row-->
            
            </div><!--//col-->
        </div><!--//row-->
    </header>


<?php
}

?>
<!DOCTYPE html>
<html>

    <?php for($x=0;$x<count($blogdata);$x++) displayElement($blogdata[$x],$x); ?>

</html>