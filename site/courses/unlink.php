<?php
include '../../includes/init.php';
try {
if (!IsPatton())
    throw new Exception ('<div class="alert alert-danger"><h4>You Are <strong>Not Allowed</strong> To This Page '
            . 'In Order Of Site Protection We Inform You That Site Hold Your <strong>SRTID Protocol</strong></h4></div>');
if (IsPatton() && isset($_GET['postid']) )
{
        $dbobj->setTable($_GET['table']);
        // update with set perm to hidden
        $new_post_data  = [ 'perm' =>'hidden' ];
        $post_updated   = $dbobj->EditData($new_post_data,$_GET['postid']);
        if ($post_updated==TRUE)
            throw new Exception ('<div class="alert alert-success">'
                    . '<h4>Element <strong>Unlinked</strong> , <a href="./courses.php">Refresh </a></h4>');
}
} catch (Exception $exc) { echo $exc->getMessage(); }