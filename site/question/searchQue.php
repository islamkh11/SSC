<?php
if (isset($_GET['searchKey']))
{
  include '../../includes/init.php';
    try {
    $valid = new Validator();
    if ($valid->checkNames($_GET['searchKey'], 'serch key'))
    {   
        $sql    = 'SELECT * FROM `ques` WHERE `que` LIKE "%'.$_GET['searchKey'].'%" ';
        $data   = $dbobj->Data_fetch($sql);
        echo count($data).' results';
        if ($data != FALSE)
        {
            $hash = new Hash();
            for ($i=0;$i<count($data);$i++)
            {   
            $hashed = $hash->encr('encrypt', $data[$i]['id']);
            $text = (strlen($data[$i]['que'])<151) ? $data[$i]['que'] :substr($data[$i]['que'], 0, 151).'....' ;    
            echo '<div class="alert alert-success resli"><a  href="?id='.$hashed.'">'.$text.'</a></div>';
            }
        }
        else echo 'No result';
    }
    $dbobj->close();
    } catch (Exception $exc) { echo $exc->getMessage(); }
}
// 54
