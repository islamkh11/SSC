<?php
// show comments
include '../../includes/init.php';
$dbobj->setTable('comment');
if (isset($_GET['body']))
{ 
    try {
        $comment = ['body'              =>  $_GET['body'],
                    'username'   =>  getLog(),
                    'post_id'           =>  $_GET['postid']];
        // check if post contain (')
        for ($i=0;$i<strlen($comment['body']);$i++)
            if (ord ($comment["body"][$i]) == 39)
                throw new Exception("sorry post cannot contain (')");
        //$addnewcomment = new Add($comment,'comment');
        $dbobj->AddData($comment);
        include './newnotify.php';
        include './get_notify.php';  
    } catch (Exception $exc) { echo '<div class="alert alert-danger">'.$exc->getMessage().'</div>'; }
}
// get all comments of this postid
$dbobj->setTable('comment');
$full_comments = $dbobj->getAllDataByID($_GET["postid"], 'post_id');
if ($full_comments!=FALSE)
    {
    $dbobj->setTable('member');
    for ($i=0;$i<count($full_comments);$i++) {
    $pict = $dbobj->getAllDataByID ($full_comments[$i]['username'], 'username', 'ASC', 1, 'pict')[0]['pict'];
    ?>  <div class="comment">
            <div class="profil-info">
                <a><img src="<?=$pict?>" alt="Profile Pic"></a>
                <h4><?=$full_comments[$i]["username"]?></h4>
                <div class="clear-fix"></div>
            </div>
            <p><?=$full_comments[$i]["body"]?></p>
        </div> 
<?php }
    }
echo  '<div class="comment">';
if ($_GET['ord'] == 'true')
{ ?>
<div class="profil-info">
    <a><img src="<?=getPict()?>" alt="Profile Pic"></a>
    <h4><?=getLog()?></h4>
    <div class="clear-fix"></div>
</div>
<form method ="post" name="formcomment<?=$_GET['k']?>">
    <textarea name="comment"  class="form-control" placeholder="Write Comment !"></textarea>
    <br>
    <button onclick="subcomm( document.formcomment<?=$_GET['k']?>.comment.value ,<?=$_GET["postid"]?>,<?=$_GET["i"]?>,<?=$_GET["k"]?>,true)" 
        name="sub_comment" type="button"  class="btn btn-success" style="width:100px" >Submit</button>
                                                                                                           
</form></div>
<?php
}
//75
?>