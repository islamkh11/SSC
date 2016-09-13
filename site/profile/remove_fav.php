<?php
// init
include '../../includes/init.php';
if ( isset($_GET['postid']))
{ 
    try {
        //check if fav id exist with same username
        $dbobj->setTable('fav_post');
        $fav_id = $dbobj->getAllDataByID($_GET['postid'], 'id');
        if ($fav_id[0]['username']!= getLog())
            throw new Exception ('<h4>Not <strong>Allowed</strong> User</h4>');
        // delet from fav
        $delet_fav = $dbobj->deletRecord( $_GET['postid'] );
        echo '<div class="alert alert-success"><h4>Succesfly <strong>Delete</strong> Post From Your Fav <a href="./profile.php">Refresh</a></h4></div>';
    } catch (Exception $exc) { echo "<div class='alert alert-danger'>".$exc->getMessage()."</div>"; }
}
// 28