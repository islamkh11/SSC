<?php
// indv include
$page='indv';
include '../includes/init.php';
$page='courses';
try { 
        if (isset($_GET['notifeid']))
           {    
            $notify_hash = new Hashout($_GET['notifeid']);
            $dbobj->setTable('notify');
            if ( intval( $notify_id = $notify_hash->orgtext)) $dbobj->deletRecord($notify_id) ;
            } 
        if (isset($_GET['notified']))
            { 
            $posthash = new Hashout($_GET['notified']);
            $postid = $posthash->orgtext;
            $dbobj->setTable('post');
            $post = $dbobj->getAllDataByID($postid)[0];
            $dbobj->setTable('member');
            if ($post != FALSE) $pict = $dbobj->getAllDataByID($post['username'], 'username', 'ASC', 1, 'pict')[0];
            }
 } catch (Exception $exc) { echo "<div class='alert alert-danger'>".$exc->getMessage()."</div>"; }
// views ::
include './views/headerInner.php';
include '../site/profile/indvPost.php';
include './views/footerInner.php';
?>