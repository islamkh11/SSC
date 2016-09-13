<?php
if (isset($_POST['subInfo']))
{  
  try {
    //if ($_POST['email'] == $data_member['email']) throw new Exception ('You Enter The Same Email');
    // check if password is match
    if (md5($_POST['password'] )  != $data_member['password'] ) throw new Exception ('Password Not Correct');
    // valid info
    //var_dump($_POST);die;
    $valid = new Validator();
       $rules = [ 
           'username'=>'checkStings',
           'email'   =>'checkEmail',  
           'id'      =>'checkFloat',
           ];
    $valid->validate($_POST, $rules); 
    //$data['email'] = $_POST['email'];
    //$valid->checkEmail($data['email'], 'Email'); die;
    foreach ($rules as $key => $value) { $data [$key] = $_POST[$key]; }
    //$updat = new Update($data, 'member');
    
    $dbobj->setTable('member');
    $dbobj->EditData($data,getLog(),'username');
    $success='<div class="alert alert-success fonted text-center"><h4>Your Info Successfuly Updated</h4></div>';
     //die;
     // change in username
     if ($data_member['username'] != $data['username'])
     {
        // get all tables
        $tbls =  mysql_list_tables('scc');
        for ($i=0;$i< mysql_affected_rows();$i++)
        $tables_names[$i] =  mysql_fetch_array( $tbls , 2)[0];
        // set un modified tbls
        $rejectedTables=['admin','course','help','multimedia','news','site','site-dep-banner','site_rate'
                 ,'sitebranch','siteinfograph','siteopinion','siteprof','siteteam'];
        // set changes
        for ($i=0;$i<count($tables_names);$i++)
        {
            if ( array_search($tables_names[$i],$rejectedTables) === FALSE ) {
                    if ($tables_names[$i] == 'latest_message' || $tables_names[$i] == 'message' )
                        { 
                            // chang as sender
                            //$col = 'sender_username';
                            $Data='';
                            $Data['sender_username'] = $data['username'];
                            $dbobj->setTable($tables_names[$i]);
                            $dbobj->EditData($Data, $data_member['username'], 'sender_username');
                            // change as reciever
                            //$col = 'recieve_username'; 
                            $Data='';
                            $Data['recieve_username'] = $data['username'];
                            $dbobj->setTable($tables_names[$i]);
                            $dbobj->EditData($Data, $data_member['username'], 'recieve_username');
                        }
                   else {
                            // change in any tbl as username
                            $Data='';
                            //$col = 'username';
                            $Data['username'] = $data['username'];
                            $dbobj->setTable($tables_names[$i]);
                            $dbobj->EditData($Data, $data_member['username'], 'username');
                        }
                }
        }
        setLog($data['username']);
     }
     $mess = redHome($success,'setting.php');
      //   header ("Location:./profile.php");

     } catch (Exception $exc) { $mess = "<div class='alert alert-danger'><h4>".$exc->getMessage()." </h4></div>"; }
}
//34
?>