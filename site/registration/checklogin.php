<?php
// check login control
if ( isset ($_POST['sub']) && $_POST['sub'] == 'sub' )
{
// set info
$log = $_POST['log'];
$password = $_POST['password'];
$type = FALSE;
try {
//check requier username , password  
  $valid = new Validator();
  $valid->checkRequired ($log, '<strong>ID or UserName or Email</strong>');
  $valid->checkRequired ($password, '<strong>Password</strong>');
// check log type {email , id , username }
    try { $type =  $valid->checkEmail($log, 'Email')     ? 'email'    : ''; } catch ( Exception $e ){ }
    try { $type =  $valid->checkStings($log, 'Username') ? 'username' : ''; } catch ( Exception $e ){ }
    try { $type =  $valid->checkFloat($log, 'ID')        ? 'ID'       : ''; } catch ( Exception $e ){ }
    if ( $type == FALSE ) throw new Exception("please inter valid <strong>ID , Username Or Email</strong>");
// matching
    $password   = md5($password);
    //$dbobj->setTable('member');
    $sql        = "SELECT * FROM `member` WHERE `$type` ='".$log."' && `password`='".$password."'";
    $data        = $dbobj->Data_fetch($sql)[0];
// set login info 
    if ( $data ){
                    $_SESSION['sccuser'] = $data['username'];
                    $dbobj->setTable('patton');
                    $data_patton = $dbobj->getAllDataByID(getLog (), 'username');
                    if ( isset($data_patton[0]['username']) )
                        $_SESSION['sccpatton'] = $data_patton[0]['username'];
                    $dbobj->close();
                    header('Location:./index.php');
                }
    else  throw new Exception("login Information Is <strong>Not Matching</strong>"); 
} catch (  Exception $e ) { $mess = "<div class='alert alert-danger' style='padding-bottom:5px;'><h4>".$e->getMessage()."</h4></div>"; }

}
// 123
?>