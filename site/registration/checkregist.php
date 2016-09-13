<?php
/*
 * checkregist page repair the array data to add
 * check required for 
 * insert inputs into  data array 
 * add data into database
 * //--checked database--//
 */
// control registration 
$page='registration';
include '../../includes/init.php';
  try {
      // check inputs exist
      $inp = ['fname','sname','username','email','password','repassword','id',
              'branch','major','minor','day','month','year','gen'];
      foreach ($inp as $key => $value) {
          if (!isset($_GET['$trans'][$value]))
              throw new Exception ('<h4>You Enter <strong>Strange Input</strong> Like : ^ , & , | , % . </h4>');
      }
      //check the input validation
      $valid = new Validator();
      $rules = array (
                           'fname'      =>"checkRequired|checkNames",
                           'sname'      =>"checkRequired|checkNames",
                           'username'   =>"checkRequired|checkStings",
                           'email'      =>"checkRequired|checkEmail",
                           'password'   =>"checkRequired|checkStings",
                           'repassword' =>"checkRequired",
                           'id'         =>"checkFloat",
                           'branch'     =>"checkStings",
                           'major'      =>"checkStings",
                           'minor'      =>"checkStings",
                           'day'        =>"checkStings",
                           'month'      =>"checkStings",
                           'year'       =>"checkStings",
                           'gen'        =>"checkStings"
                          );
          $valid->validate ($_GET['$trans'],$rules);
          if ( $_GET['$trans']['password'] != $_GET['$trans']['repassword'] )
              throw new Exception ('password and repassword not match ') ;
          else $data['password'] = $_GET['$trans']['password'];
          foreach ($_GET['$trans'] as $key => $value) {
                                                        if ($key != 'repassword' )
                                                            $data[$key] = $value;
                                                      }  
          // check exist 
        $dbobj->setTable('member');
        $ch = ['username','id','email'];
        for ($i=0;$i<count($ch);$i++)
            {
                $usernames = $dbobj->getAllDataByID($data[$ch[$i]], $ch[$i],'ASC',1,$ch[$i]);
                if ($usernames != FALSE )
                    throw new Exception('<h4>Sorry <strong>'.$ch[$i].'</strong> Is Already Exist</h4>');
            }
        // rearrang input
      $data['date_of_birth']    =   $data['day'].'-'.$data['month'].'-'.$data['year'];
      $data['gender']           =   $data['gen'];
      $data['activated']        =   '0';
      $data['pict']             =   $imgDir.'05.png';
      $data['signup']           =   date('Y-m-d');
      $data['password']         =   md5($data['password']);
      $arr                      = ['day'=>'','month'=>'','year'=>'','gen'=>''];
      $data = array_diff_key($data,$arr );
      // add 
      $add = $dbobj->AddData($data);
      echo "<div class='alert alert-success'><h4><strong>Succes Rigistration</strong></h4></div>";
   
  } catch (Exception $ex) {
  echo "<div class='alert alert-danger'><h4>".$ex->getMessage()."</h4></div>";
  die;
  }
// 120
?>