<?php
include '../../includes/init.php';
$valid = new Validator();
if ( isset($_GET['postid']) )
{
    
    try {
    $valid_res = $valid->checkStings($_GET['reso'], '<strong>Report</strong>');
         $data = [ 'post_id'        => $_GET['postid'],
                   'reporter'       => getLog(),
                   'reported_for'   => $_GET['reso'] ];
    $dbobj->setTable('postreported');     
    $addreport = $dbobj->AddData($data); 
    } catch (Exception $exc) { echo '<div class="alert alert-danger"><h4>'.$exc->getMessage().'</h4></div>'; }
}
?>