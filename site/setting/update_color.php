<?php
if (isset($_POST['subColor']))
{   try {
    // update image
    if (!empty($_FILES['image']['tmp_name']))
    {
        $uplaod         = new Upimage($_FILES['image']);
        $data['pict']   = $uplaod->link;
    }
    // set lang and color and privace
    if (empty($_POST['choosecolor']) || empty($_POST['chooselang']))
        throw new Exception ('Sys Error');
    $data['color']  = $_POST['choosecolor'];
    $data['lang']   = $_POST['chooselang'];
    $privacy='';
    if (isset($_POST['AC']) && $_POST['AC']=='on') $privacy.='AC/';
    if (isset($_POST['TT']) && $_POST['TT']=='on') $privacy.='TT/';
    if (isset($_POST['FP']) && $_POST['FP']=='on') $privacy.='FP/';
    $data['privacy']= $privacy;
    // update
    $dbobj->setTable('member');
    $dbobj->EditData($data,getLog(),'username');
    setColor($data['color']);
    $mess = redHome(lang('updateinfo'),'setting.php');
     } catch (Exception $exc) { $mess = "<div class='alert alert-danger fonted text-center'>".$exc->getMessage()."</div>";}
}
// 30
?>