<?php
if (isset($_POST['subPass']))
{
    try { 
    // check password
    if (  md5($_POST['oldpassword']) != $data_member['password'] )  throw new Exception ('You Enter Uncorrect Old Password');
    if ( empty($_POST['password']) )                                throw new Exception ('You Did Not Enter Password');
    if ($_POST['password']!= $_POST['repassword'])                  throw new Exception (' password and repassword not matched');
    // update password
    $data['password'] = md5 ( $_POST['password']);
    $dbobj->setTable('member');
    $dbobj->EditData($data,getLog(),'username');
    $mess = redHome(lang('updateinfo'),'setting.php');
    } catch (Exception $exc) { $mess = "<div class='alert alert-danger fonted text-center'>".$exc->getMessage()."</div>";}
}
// 32
?>