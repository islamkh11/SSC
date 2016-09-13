<!--
control structure ::
- headline 
- link add new 
- includes
- arrayes & variables
- action -> Get ->Submit [ Add - Delet - Edit]                 
- display model
- view display
-->
<?php
//includes ::
include_once 'controll.php';
if ($Controll['headline'] == 'empty')
    { 
        echo '<h3>Empty or fail request</h3>';
        die;
    }
?>
<?php if (isset($Controll['con']['A']) && $Controll['con']['A']==1 ) { ?>
<h2><a href="?page=<?=$Controll['page']?>&action=add">Add New <?=$Controll['page']?></a></h2>
<?php
}
// vaiables ::
$tabename  =  $Controll['tabename'];
$fil       =  $Controll['fil'];
$inputs    =  $Controll['inputs'];
$select    =  $Controll['select'];
$area      =  $Controll['area'];
$page      =  $Controll['page'];
$dbobj->setTable($tabename);
// Submit ::
   if ($_POST OR @$_GET['action']) {
       try {
           // Add
    if (isset($_GET['action']) && $_GET['action'] == "add") {

        if (isset($_POST['submit']) && $_POST['submit'] == "Add") {
            $valid = new Validator();
            //check select  
                      if (  count($select)>0 ) 
                         foreach ($select as $key => $value ) {
                              if ( $valid->checkStings($_POST[$key],$key)  )
                                    $newPage[$key] = $_POST[$key] ;
                         }
           // check input 
                    if (  count($inputs)>0 ) 
                        foreach ($inputs as $key  ) { $newPage[$key] = $_POST[$key] ; }
            // check desq 
		      if (  count($area)>0 ){ 
                         foreach ($area as $key  ) { $newPage[$key] = $_POST[$key] ; }
                      }  
            if (isset($_FILES))
                         { 
                         foreach ($fil as $key0  =>$value0 ) {
                           if ( $key0 == 'image' )
                           {    
                               foreach ($fil['image'] as $key1 =>$value1)
                               {  $image = new Upimage ($_FILES[$value1]);
				  $newPage[$value1]=	$image->link;
                           
                               }
                           }
                           if ($key0 == 'vedio')
                           {
                               foreach ($fil['vedio'] as $key1 =>$value1)
                                        {  
                                            $video = new Upvideo ($_FILES[$value1]);
                                            $newPage[$value1]=	$video->link;
                                        }
                            }
                          
                            } 
                         }
            $addNewPage = $dbobj->AddData($newPage);
            if ($addNewPage) { echo '<script type="text/javascript"> alert("The New '.$Controll['tabename'].' recorde was Created !"); history.back();</script>'; }
        } else { include 'veiws/addNew.php'; }
    }
    // Delete:
    if (isset($_GET['action']) AND $_GET['action'] == "delete") {
            $id = $_GET['id'];
            $deletedPage = $dbobj->deletRecord($id);
            if ($deletedPage) 
                echo '<script type="text/javascript"> alert("The  '.$Controll['tabename'].' recorde was deleted !"); history.back();</script>'; 
    }
    // Edit
    if (isset($_GET['action']) AND $_GET['action'] == "edit") {
        $id = intval($_GET['id']);
        if ($id==0 )
            return;
        $pagedata = $dbobj->getAllDataByID($id)[0];
        include 'veiws/edit.php';
        $valid = new Validator();
        if (isset($_POST['submit']) && $_POST['submit'] == "Edit") {            
                     if (  count($select)>0 ){ 
                         foreach ($select as $key => $value ) {
                              if ( $valid->checkStings($_POST[$key],$key)  )
                                    $newPage[$key] = $_POST[$key] ;
                         }
                      }
                     // check input 
		      if (  count($inputs)>0 ){ 
                         foreach ($inputs as $key  ) { $newPage[$key] = $_POST[$key] ; }
                      }  
                      // check desq 
		      if (  count($area)>0 ){ 
                          foreach ($area as $key  ) { $newPage[$key] = $_POST[$key] ; }
                      }  
                      // upload files
                      if (isset($_FILES) )
                         foreach ($fil as $key0  =>$value0 ) {
                           if ( $key0 == 'image' )
                           {    
                               foreach ($fil['image'] as $key1 =>$value1)
                               {  if ( !empty($_FILES[$value1]['name']) )
                                     {$image = new Upimage ($_FILES[$value1]);
				      $newPage[$value1]=$image->link;
                                     }
                               }
                           }
                           if ($key0 == 'vedio')
                           {
                               foreach ($fil['vedio'] as $key1 =>$value1)
                               { if ( !empty($_FILES[$value1]['name']) )
                                     {
                                        $video = new Upvideo ($_FILES[$value1]);
                                        $newPage[$value1]=	$video->link;
                                     }
                               }
                            }
                          
                         } 
			
        $updatedPage = $dbobj->EditData($newPage,$id);
        if ($updatedPage) { echo '<script type="text/javascript"> alert("The  '.$Controll['tabename'].' recorde was updated !"); history.back();</script>'; }
        }
    }
       } catch (Exception $exc) { echo $exc->getMessage(); }
}
// Display ::
   else { 
    $DataDisplay = $dbobj->getallData('*',1000,'ASC') ;
    include './veiws/display.php';
}
// 211
?>