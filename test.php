<head>
    <style>
        td{
            border: 1px solid;
        }
    </style>
</head>
<body>
<table style="width: 200px ; height: 200px ; border: 1px black solid;" CELLSPACING="10" cellspadding="15" >
                                            <tr>
                                                <td>A</td>
                                                <td>A</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>A</td>
                                                <td>A</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>A</td>
                                                <td>A</td>
                                                <td>A</td>
                                            </tr>
                                        </table>
</body>
<?php

die;
try {
    include './models/DBObj.php';
$dbobj = new DBObj('localhost', 'root', '', 'scc');
$msg2 = 'list of tables : '.'<br>';
$tbls =  mysql_list_tables('scc');
for ($i=0;$i< mysql_affected_rows();$i++)
    $tables_names[$i] =  mysql_fetch_array( $tbls , 2)[0];
//echo '<pre>';
//var_dump($tables_names);
//echo '</pre>';
// zaza11 lisa11
//$Data = [ 'username'=>'zaza11'];
//echo array_search('jkdgsfjh',$tables_names);
$rejectedTables=['admin','course','help','multimedia','news','site','site-dep-banner','site_rate'
                 ,'sitebranch','siteinfograph','siteopinion','siteprof','siteteam'];
//echo array_search('admin',$rejectedTables);
//die;
for ($i=0;$i<count($tables_names);$i++)
{
    echo $tables_names[$i].' ::<br>';
    if (is_int(array_search($tables_names[$i],$rejectedTables) ) )
    {
  //      echo 'Not Accepted Table<hr>';
        
    }
    else {
        if ($tables_names[$i] == 'latest_message' || $tables_names[$i] == 'message' )
        { 
          $col = 'sender_username';
          $Data='';
          $Data[$col] = 'zaza11';
          $dbobj->setTable($tables_names[$i]);
          if ( $dbobj->EditData($Data, 'lisa11', $col))
          {
//echo 'Success...';
              }
          
          //die;
          $col = 'recieve_username'; 
          $Data='';
          $Data[$col] = 'zaza11';
          $dbobj->setTable($tables_names[$i]);
          if ( $dbobj->EditData($Data, 'lisa11', $col))
          {
              //echo 'Success...<hr>';
          }
        }
        else {
        $Data='';
        $col = 'username';
        $Data[$col] = 'zaza11';
        $dbobj->setTable($tables_names[$i]);
        
        if ( $dbobj->EditData($Data, 'lisa11', $col))
        {
            //echo 'Success...<hr>';
        
        }
    }
    }
}
} catch (Exception $exc) {
    echo $exc->getMessage();
}


?>