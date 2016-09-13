<?php
include_once 'controll.php';
// vaiables ::
$tabename  =  'patton';
$inputs    =  ['username','choose'];
$dbobj->setTable($tabename);
// Delete:
    if (isset($_GET['action']) AND $_GET['action'] == "delete") {
        try {
            $id = $_GET['id'];
            $dbobj->setTable($tabename);
            $deletedPage  = $dbobj->deletRecord($id);
            if ($deletedPage) 
                echo '<script type="text/javascript"> alert("The  patton recorde was deleted !"); history.back();</script>';
        } catch (Exception $exc) { echo $exc->getMessage(); }
    }
// Display ::
else {
    $DataDisplay =  $dbobj->getallData();
    $dbobj->setTable('elect');
    for ($i = 0; $i < count($DataDisplay); $i++) {
      $num = $dbobj->getAllDataByID($DataDisplay[$i]['username'],  'choose','ASC',$limit=1000);
      if ($num!=FALSE)
            $DataDisplay[$i]['choose']= count ($num) ;
      else  $DataDisplay[$i]['choose']=0;
     }
    $Controll ['con']['D']=1;
    $page = 'patton';
    include 'veiws/display.php';
}
// 57
?>