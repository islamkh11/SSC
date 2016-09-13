<?php 
$page = 'index';
include '../../includes/init.php';
if ( isset($_GET['username']) && $_GET['username']!='' )
   {
     
     
    try { $valid = new Validator();
          if ( $valid->checkNames($_GET['username'],'<strong>username</strong>'))
             $newPage['username'] = $_GET['username'] ;
          if ( $valid->checkEmail($_GET['email'],'<strong>email</strong>'))
             $newPage['email'] = $_GET['email'] ;
          if ( $valid->checkRequired($_GET['content'],'<strong>message</strong>'))
             $newPage['message'] = $_GET['content'] ;
          if ( $valid->checkNames($_GET['content'],'<strong>message</strong>'))
             $newPage['message'] = $_GET['content'] ;
          
	  }catch (Exception $exc) {
            echo '<div class="alert alert-danger" style="font-size: 22px;"> '.$exc->getMessage().'</div>';
			return;
        }
    try {
         $dbobj->setTable('sitecontact');
         $addNewPage = $dbobj->AddData($newPage);
         if ($addNewPage) {
                            $messa = "Your <strong>Message</strong> Was Added We Will <strong>Replay</strong> You By Email";
                            throw new Exception($messa);
                            }
            } catch (Exception $exc) { echo '<div class="alert alert-success" style="font-size: 22px;">'.$exc->getMessage().'</div>';}
	
}  