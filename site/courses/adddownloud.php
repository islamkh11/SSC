<?php
include '../../includes/init.php';
if (isset($_GET['i']));
{
  try {
        $r = $_GET['p']+1 ;
        $data['downloud']=$r ;
        $dbobj->setTable('resource');
        $updat = $dbobj->EditData($data, $_GET['i']);
       } catch (Exception $exc) { echo $exc->getMessage(); }
       ?><div class="alert alert-info"><strong><a href="<?=$_GET['c']?>">Downloud (<?=$data["downloud"]?>)</a></strong></div><?php
}
?>
