<?php
// global controll ::
$page='home';
include '../includes/init.php';
// add new post 
if (isset($_POST['sub_post']) && $_POST['sub_post']=='Submit'  )
    try {
        $post = [   'username'  =>  getLog(),
                    'stat'      =>  'global',
                    'body'      =>  $_POST['post']  ];
        // check if post contain (')
        for ($i=0;$i<strlen($post['body']);$i++)
            if (ord ($post["body"][$i]) == 39)
                throw new Exception("sorry post cannot contain (')");
        $dbobj->setTable('post');
        $addnewpost = $dbobj->AddData($post);
        if ($addnewpost == TRUE)
            include $coursesDir . 'newnotify.php';
    } catch (Exception $exc) { $errorMsg= "<div class='alert alert-danger'>".$exc->getMessage()."</div>"; }
// add to database
$dbobj->setTable('post');
$global_post = $dbobj->getAllDataByID('global', 'stat','DESC',100,$tar='*');
//$all_posts->getAllDataByID('global','stat','DESC');
$message = '';    
include $viewDir . 'headerInner.php';
include $homeDir . 'main.php';
include $viewDir . 'footerInner.php';
//40
?>