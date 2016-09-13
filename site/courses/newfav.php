<?php
try {
include '../../includes/init.php';
$valid = new Validator();
if (isset($_GET['postid']) && $valid->checkInteger($_GET['postid'], 'Post ID'))
{
    $dbobj->setTable('fav_post');
    $fav_user_post = $dbobj->getAllDataByID(getLog(), 'username', 'ASC', 100, 'post_id');
    //var_dump($fav_user_post);
    $datafav = ['post_id'=>$_GET['postid']];
    for ($i=0;$i<count($fav_user_post);$i++)
        if ( $datafav === $fav_user_post[$i] )
               throw new Exception ('<div class="alert alert-danger"><h4>You Already Add This Post To Fav Posts</h4></div>');
    $datafav['username']=  getLog();
    $datafav['code']    = $_GET['code'];
    $dbobj->AddData($datafav);
    throw new Exception ('<div class="alert alert-success"><h4>Successfly Add This Post To Fav Posts</h4></div>');
    }
} catch (Exception $exc) { echo $exc->getMessage(); }
//38
    ?>