<?php
// Patton Controll ::
$page ='patton';
include '../includes/init.php';
// set data of slider & make elect first
if (getElection()=='T')
{   $patton = $dbobj->setTable('patton');
    $pattonUsernames = $dbobj->getAllData('username') ;
    for ($i=0;$i<count($pattonUsernames);$i++)
        $content[$pattonUsernames[$i]['username']]['title']=$pattonUsernames[$i]['username']; }
else  $content['0']['title']='Adminstration';
if (getElection()=='T')
{    // add new elect 
    if (isset($_POST['sub_elect']))
        include './patton/addelect.php';
    $dbobj->setTable('post');
    $electAllPosts = $dbobj->getAllDataByID('patton', 'stat');
    $dbobj->setTable('member');
    for ($i=0;$i<count($electAllPosts);$i++)
        $electAllPosts[$i]['pict'] = $dbobj->getAllDataByID($electAllPosts[$i]['username'], 'username','ASC',1,'pict')[0]['pict'];
    for ($i=0;$i<count($electAllPosts);$i++)
        $content[$electAllPosts[$i]['username']]['elements'][]= $electAllPosts[$i];
    $noMode='';
    $structure=['addNew'=>'post' ,'mode'=>'posts' ];
    $structure['form']=['h3'=>lang('electH3'),'hidden'=>'elected','submit'=>'sub_elect'];
} else {
    // add new post 
    try {
        if (isset($_POST['sub_post'])&& ($_POST['sub_post']=='Submit'  ) )
    {
        $post = [   'username'  => getLog(),
                    'stat'      => 'admin',
                    'body'      => $_POST['desq'] ];
        // check if post contain (')
        for ($i=0;$i<strlen($post['body']);$i++)
            if (ord ($post["body"][$i]) == 39)  
                throw new Exception("<h4>Sorry Post <strong>Can Not</strong> Contain <strong>Spicial Char</strong> </h4>");
        $dbobj->setTable('post');
        $addnewpost = $dbobj->AddData($post);
        }
    } catch (Exception $exc) { echo $exc->getMessage(); }
    // view patton posts
    $dbobj->setTable('post');
    $coursesPosts = $dbobj->getAllDataByID('admin', "stat",'Desc');
    $coursesPosts2 = $dbobj->getAllDataByID('patton', 'stat','Desc');
    for ($i=0;$i<count($coursesPosts2);$i++)
        $coursesPosts[]=$coursesPosts2[$i];
    $dbobj->setTable('member');
    for ($i=0;$i<count($coursesPosts);$i++)
        $coursesPosts[$i]['pict'] = $dbobj->getAllDataByID($coursesPosts[$i]['username'], 'username',$ord='ASC',1,'pict')[0]['pict'];
    $content['0']['elements']=$coursesPosts;
    $coursesCodes[0]='Admin';
    $noMode='';
    $structure = [ 'mode'=>'posts','addNew'=>'post','table'=>'post','hidden'=>lang('hidden'),'report'=>lang('report') ];
    if (IsPatton())
    {   $structure['unlink']=lang('unlink'); 
        $structure['form']=['hidden'=>'coursecode','submit'=>'sub_post','desq'=>lang('desq')];
    }
    
}
// view
include $viewDir .'headerInner.php';
include $viewDir .'coursem.php';
include $viewDir .'footerInner.php';
// 97
?>