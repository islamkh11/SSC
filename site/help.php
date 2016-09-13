<?php
include '../includes/init.php';
$page='help';
$dbobj->setTable('help');
$help_data = $dbobj->getAllData();
// views
include $viewDir . 'headerInner.php';
include './help/main.php';
include $viewDir . 'footerInner.php';