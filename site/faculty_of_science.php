<?php
// control faculity_of_science
$page = 'faculty_of_science';
// includes
include '../includes/init.php';
try {   
       // get vars
       $dbobj->setTable('sitebranch');
       $branches = $dbobj->getAllData();
       $dbobj->setTable('siteinfograph');
       $infograph = $dbobj->getAllData();
       $dbobj->setTable("site-dep-banner");     
       $site["site-dep-banner"] = isset ($_GET['arabic']) ? $dbobj->getAllDataByID('A',  'lang','ASC',20,$tar='*') : $dbobj->getAllDataByID('E',  'lang','ASC',20,$tar='*') ;
       $dbobj->setTable('site-prof');
       $site["site-prof"] = $dbobj->getAllData();                
    } catch (Exception $exc) { echo $exc->getMessage(); }
// includes
    include $FOSDir . 'header.php';
    include $FOSDir . 'accordion.php';
    include $FOSDir . 'infograph.php';
    include $FOSDir . 'dep.php';
    include $FOSDir . 'prof.php';
    include $FOSDir . 'footer.php';
