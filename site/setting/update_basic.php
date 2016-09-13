<?php
if (isset($_POST['subBasic']))
{
   try {
       $dbobj->setTable('member');
       // valid info
       $valid = new Validator();
       $rules = [ 'day'    =>'checkInteger', 'month'      =>'checkInteger',
                  'year'   =>'checkInteger', 'fname'      =>'checkNames',
                  'sname'  =>'checkNames',  //'username'   =>'checkStings',
                  'gender' =>'checkStings',
           ];
       $valid->validate($_POST, $rules); 
       // set data arr
       foreach ($rules as $key => $value) { if ($key!='subBasic' && $key!='day' && $key!='month' && $key!='year' ) $data[$key] = $_POST[$key] ;}
       $data['date_of_birth'] = $_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
       // update
       $updat = $dbobj->EditData($data,getLog(),'username'); //new Update($data,'member');
       $mess = redHome(lang('updateinfo'),'setting.php');
      } catch (Exception $exc) { $mess = "<div class='alert alert-danger fonted text-center'>".$exc->getMessage()."</div>";}
}
//62
?>