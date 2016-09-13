<?php
// we have postid & user want to be notify for it & stat = comment & num initialy 0 ,
//include '../../includes/init.php';
try {
    $data_notify = [
    'username'=>  getLog(),
    'stat'    =>'comment',
    'page'    =>$_GET['postid'],
    'num'     => 0
];
// if there is already notify for this post do not add new!!!!!! 
    $dbobj->setTable('notify');
    $notify = $dbobj->getAllDataByID(getLog(), 'username');
    $alerdy_notify = FALSE;
for ($i=0;$i<count($notify);$i++)
    if ($notify[$i]['stat']=='comment' && $notify[$i]['page']==$data_notify['page'])  $alerdy_notify=TRUE;
// add new notify
if (!$alerdy_notify)
    $dbobj->AddData ($data_notify);
} catch (Exception $exc) { echo $exc->getMessage(); }
?>