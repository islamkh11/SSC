<?php
include '../includes/init.php';
$mess=  '';
$dbobj->setTable('member');
$data_member = $dbobj->getAllDataByID(getLog(),"username",'ASC',1,$tar='*')[0];

if ( isset($_POST)) {
if (isset($_POST['subBasic']))
    include './setting/update_basic.php';

if (isset($_POST['subInfo']) )
    include './setting/update_info.php';
if (isset($_POST['subPass']))
    include './setting/update_pass.php';
//sub_pict
if (isset($_POST['subColor']))
    include './setting/update_color.php';

/*if (isset($_POST['sub_pict']))
    include './setting/update_pict.php';
if (isset($_POST['sub_color']))
        include './setting/update_color.php';
if (isset($_POST['sub_lang']))
        include './setting/update_lang.php';*/
if (isset($_POST['sub_privacy']))
{ //echo '<h1>yyyyyyyyyyyy</h1>';
    include './setting/update_privacy.php';}
}
//$user_lang = $data_member['lang'];
// views ::
$page = 'setting';
$datee = explode( '-' , $data_member['date_of_birth'] ) ;
$privacy = explode('/', $data_member['privacy']);
//var_dump($date);
include './views/headerInner.php';
include './setting/main.php';
include './setting/footerInner.php';
// 35
?>