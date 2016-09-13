<?php
if (isset($_POST['sub_elect']))
{ 
    try {
    // del choose for this user if exist
    $dbobj->setTable('elect');
    $last_choose = $dbobj->getAllDataByID(getLog(), 'username');
    if ($last_choose!=FALSE)
        for ($i=0;$i<count($last_choose);$i++)    
            $dbobj->deletRecord($last_choose[$i]['id']);
    // add choose of thes user 
    $elect = ['username'=>getLog(),
              'choose'=>$_POST['elected']];
    $new_elect = $dbobj->AddData($elect);
    // throw succes
    if ($new_elect==True)
        throw new Exception ('<div class="alert alert-success">'.lang('successElect').'</div>');
} catch (Exception $exc) { $errorMsg =  $exc->getMessage(); }
}
?>
