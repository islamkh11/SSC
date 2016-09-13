<?php
$page = 'index';
include '../../includes/init.php';
try {
    if (isset($_COOKIE['rate']) && $_COOKIE['rate']=='T')
        echo '<div class="alert alert-danger">sorry , it seem you our site before.</div>';
    else {
        $data['rate'] = isset($_GET['i']) && is_numeric($_GET['i']) ? intval($_GET['i']) : 0;
        $dbobj->setTable('site_rate');
        $rates = $dbobj->AddData($data);
        echo '<div class="alert alert-success">succes add rate.</div>';
        setcookie('rate', 'T', time()+60*60); 
       }
} catch (Exception $exc) {  echo $exc->getMessage(); }
?>