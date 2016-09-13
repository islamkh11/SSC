<?php
// data main control ::
$mess='';
// update 'branch','major','minor'
if ( (isset($_POST['subLevel']) && $_POST['subLevel'] == 'Submit') )
{
    $inputs =['branch','major','minor'];
    try {
        $valid = new Validator();
        for ($i=0;$i<count($inputs);$i++)
            {
            $newdata[$inputs[$i]] = $_POST[$inputs[$i]];
            $rules [$newdata[$inputs[$i]]] = 'checkStings';
            }
        $valid->validate($newdata, $rules);
        $dbobj->setTable('member');
        $level_update =  (  $dbobj->EditData($newdata,getLog(), 'username') ) ? 'T' : 'F' ;
        }
    catch (Exception $e) { $mess = "<div class='alert alert-danger'>".$e->getMessage()." </div>"; }
}
// set new courses
if ( (isset($_POST['sub_mat']) && $_POST['sub_mat']=='Submit'))
{ 
try {
    // set the courses choosen in array 
    $valid = new Validator();
    foreach ($_POST as $key => $value) {
        
        if ( is_array( $value))
           foreach ($value as $mydep => $code) {
            $selected_mat[] =  $code;
             }
        else if ($value!='Submit' && $value!='تسجيل')
            $selected_mat[]=$value;
       
    }
    if ( !isset($selected_mat))
        throw new Exception ('<strong>No</strong> Courses Choosen');
    if (count($selected_mat)> 12)
        throw new Exception ('<strong>Maximum</strong> Courses To Choose is <strong>12</strong>');
    // select all courses already in database to delet them 
    $dbobj->setTable('join_course');
    $last_courses_id = $dbobj->getAllDataByID(getLog(), 'username',$ord='ASC',$limit=100,$tar='id');
    if ($last_courses_id != FALSE  )
    {
    for ($i=0;$i<count($last_courses_id);$i++)
        $delet_courses_by_id = $dbobj->deletRecord( $last_courses_id[$i]['id'] );
    }
    // add new courses    
   foreach ($selected_mat as $key => $value){ 
       $valid->checkStings ($value, 'Course');
       $last_courses_id = $dbobj->getAllDataByID(getLog(), 'username',$ord='ASC',$limit=100,$tar='code');
       if ( $last_courses_id==FALSE || search_by_inside( $last_courses_id,$value,'code')== FALSE )
       {
       $add_mat = ['username' => getLog(), 'code' => $value];
       $addNewMat =  $dbobj->AddData($add_mat);
       }       
   }
    if ($addNewMat) $mess = "<div class='alert alert-success'><h4><strong>Successful</strong> Registration courses <a href ='./profile.php'>Refresh</a></h4></div>";
   
} catch (Exception $ex) { $mess = "<div class='alert alert-danger'>".$ex->getMessage()."</div>"; }
}
if (isset($level_update) && $level_update=='T')
{   
    include $profDir .'matirial.php';
    include $profDir .'matirial_stat.php';    
}
else include $profDir .'level_stat.php';
// 111
?>
