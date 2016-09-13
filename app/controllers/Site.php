<h3>Main Settings</h3>
<?php 
$pic = ['logo','mini_logo','map','banner','regist'];
$dbobj->setTable("site");
$displayData = $dbobj->getAllData('*',1)[0];
// update site
if(isset($_POST['submit']) && $_POST['submit'] == "Update")
{     
  try {
      // insert data into array
      $mainsettings['name']         = $_POST['name'];
      $mainsettings['new_sem']      = $_POST['new_sem'];
      $mainsettings['new_patton']   = $_POST['new_patton'];
      $mainsettings['title']        = $_POST['title'];
      $mainsettings['brand']        = $_POST['brand'];
      $mainsettings['copy']         = $_POST['copy'];
      // uploud images
      for ($i=0;$i<count($pic);$i++)
            if (!empty($_FILES[$pic[$i]]['name'])) {
               echo $i . ' num of uploads';
                try {
                    $image = new Upimage ($_FILES[$pic[$i]]);
                    $mainsettings[$pic[$i]]=$image->link;
                } catch (Exception $exc) {
                    $exc->getMessage();
				
                }
            } else $mainsettings[$pic[$i]] = $displayData[$pic[$i]]; 
            
    
        $updat = $dbobj->EditData($mainsettings,1);
        if($updat == TRUE)
            echo '<script type="text/javascript"> alert("The site updated ^_^  "); history.back();</script>';
    } catch (Exception $exc) { echo $exc->getMessage(); }
}
else include './veiws/v_site.php';
// 68
?>