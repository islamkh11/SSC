<?php
$r = array ( 'title', /*'logo', 'mini_logo', */'brand' /*'map'*/, 'copy');
//for ( $i=0;$i<count($r);$i++)
//echo '$mainsettings["'.$r[$i].'"]         = $_POST["'.$r[$i].'"];<br>';

?>
<form action="" method="post" class="mainSettingsForm" enctype="multipart/form-data">

<label>statment</label>
    <input type="text" name="name" value="<?php echo $displayData['name'];?>">
    <label>new semister</label>
    <input type="text" name="new_sem" value="<?php echo $displayData['new_sem'];?>">
    <label>new patton</label>
    <input type="text" name="new_patton" value="<?php echo $displayData['new_patton'];?>">

<?php
for ( $i=0;$i<count($r);$i++)
echo '<label>'.$r[$i].'</label>
    <textarea name="'.$r[$i].'" >'.$displayData[$r[$i]].'</textarea>';

?>  
    <label>Cover</label>
    <input type="file" name="logo"  />    
    <img src="<?php echo $displayData['logo'];?>" width = '40%' >
    </p>
    <label>banner</label>
    <input type="file" name="banner"  />    
    <img src="<?php echo $displayData['banner'];?>" width = '40%' >
    </p>
    <label>mini_logo</label>
    <input type="file" name="mini_logo"  />    
    <img src="<?php echo $displayData['mini_logo'];?>" width = '40%' >
    </p>
    </p>
    <label>map</label>
    <input type="file" name="map"  />    
    <img src="<?php echo $displayData['map'];?>" width = '40%' >
    </p>       
   <label>regist</label>
    <input type="file" name="regist"  />    
    <img src="<?php echo $displayData['regist'];?>" width = '40%' >
    
    
            
   
    </p>    
    <input class="btn-lg btn-primary" type="submit" value="Update" name="submit">
    
</form>

