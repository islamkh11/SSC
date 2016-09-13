<?php
//$page = "question";
//$user_lang = 'en';
$page='questions';
include '../includes/init.php';
$queDisplay = 'F';
$msg = '';
$msg_ans='';
// display specific que and answers
if (isset($_GET['id']))
{
    try {
     $hashid=new Hash();
     $id = $hashid->encr('decrypt', $_GET['id']);
    if ( intval($id) < 1 ) throw  new Exception ('system error ');
    else {
        $dbobj->setTable('ques');
        $que_data = $dbobj->getAllDataByID($id)[0];
        $dbobj->setTable('member');
        $que_data['pict'] = $dbobj->getAllDataByID($que_data['username'], 'username','ASC',1,'pict')[0]['pict'];
        $dbobj->setTable('answer');
        $ans_data = $dbobj->getAllDataByID($que_data['id'], 'queId');
        $dbobj->setTable('member');
        if ($ans_data != FALSE)
            for ($i=0;$i<count($ans_data);$i++)
                $ans_data[$i]['pict'] = $dbobj->getAllDataByID($ans_data[$i]['username'], 'username','ASC',1,$tar='pict')[0]['pict'];
        $queDisplay='T';
     }
    } catch (Exception $exc) { echo $exc->getMessage(); }
}
// display recent question  && answer
try {
    $dbobj->setTable('ques');
    $recent_ques = $dbobj->getAllData('*',10,'Desc');
    $dbobj->setTable('answer');
    $recent_ans = $dbobj->getAllData('*',10,'Desc');
    $dbobj->setTable('member');
    for ($i=0;$i<count($recent_ques);$i++)
        $recent_ques[$i]['pict'] = $dbobj->getAllDataByID($recent_ques[$i]['username'], 'username','ASC',1,'pict')[0]['pict'];
    for ($i=0;$i<count($recent_ans);$i++)
        $recent_ans[$i]['pict']  = $dbobj->getAllDataByID($recent_ans[$i]['username'], 'username','ASC',1,'pict')[0]['pict'];    
} catch (Exception $exc) {  $msg =  $exc->getMessage(); }
// add new question 
if (isset($_POST['sub']) && $_POST['sub']=='Ask')
{   
    $que = $_POST['que'];
    try {
        $valid = new Validator();
        if ($valid->checkNames($_POST['que'], 'question') && $valid->checkRequired($_POST['que'], 'question') )
        {
            if (strlen($_POST['que'])>500) throw  new Exception ('<div class="alert alert-danger fonted" >Max Question Length Is 500</div>');
            $data = ['que'     =>$_POST['que'], 'username'=>  getLog()];
            $dbobj->setTable('ques');
            $add = $dbobj->AddData($data);
            if ($add) throw  new Exception ('<div class="alert alert-success fonted">Succes Adding Your Question</div>');
        }
    } catch (Exception $exc) { $msg = $exc->getMessage(); }
}
$myans = '';
// add new answer 
if (isset($_POST['sub']) && $_POST['sub']=='Answer')
{   $myans = $_POST['ans'];
    try {
        $valid = new Validator();
        if ($valid->checkNames($_POST['ans'], 'Answer'))
        {
            if (strlen($_POST['ans'])>1000) throw  new Exception ('<div class="alert alert-danger fonted">Max Answer Length Is 1000</div>');
            $data = ['ans'     =>$_POST['ans'],
                     'username'=>getLog(),
                     'queId'   =>$id];
            $dbobj->setTable('answer');
            $add = $dbobj->AddData($data);
            if ($add) throw  new Exception ('<div class="alert alert-success fonted">Succes Adding Your Answer</div>'); 
        }
    } catch (Exception $exc) { $msg_ans = $exc->getMessage(); }    
}
if (!isset($que))
$que ='';
include './views/headerInner.php';
include './question/main.php';
include './views/footerInner.php';
// 149 107