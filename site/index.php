<?php
//control index 
$page = 'index';
include '../includes/init.php';
// check user login
if (getLog() != FALSE) header ("Location:./profile.php");
// includes views
include $indexDir . 'header.php';
include $indexDir . 'features.php';
// work on statis ::
try {
$dbobj->setTable('member');
$num_of_memebr = count($dbobj->getAllData('username',10000));
$num_of_login  = count($dbobj->getAllDataByID('T', 'login','ASC',10000,'id'));
$dbobj->setTable('comment');
$num_of_comment = count($dbobj->getAllData('id',10000));
} catch (Exception $exc) { echo $exc->getMessage();}
include $indexDir . 'statis.php';
// work on rate ::
$dbobj->setTable('siteOpinion');
$opinion =  $dbobj->getAllData('*',10);
$dbobj->setTable('site_rate');
$rate = $dbobj->getAllData('rate',100,'ASC');
$sum = 0;
for ( $i=0 ; $i<count($rate) ; $i++)
     $sum = $sum+$rate[$i]['rate'];
$avirage = $sum /  count($rate);
include $indexDir . 'rate.php';
// work on team ::
$dbobj->setTable('siteteam');
$table['site-team'] = $dbobj->getAllData('*',10);
$N = count($table['site-team']);
include $indexDir . 'team.php';
//  includes
include $indexDir . 'contact.php';
include $indexDir . 'footer.php';
// 100