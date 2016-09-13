<?php
// control registration
$page = 'registration';
include '../includes/init.php';
$mess = '';
// deal check login 
if ( isset ($_POST['sub']) && $_POST['sub'] == 'sub' )
    include './registration/checklogin.php';
// includes
include './registration/header.php';
include $RegDir . 'signup.php';
include $RegDir . 'login.php';
include $indexDir . 'footer.php';