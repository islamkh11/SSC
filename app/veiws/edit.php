<!--
//`name`, `color`, `num`

-->
<form class="mainSettingsForm add newPage" action="" method="post" enctype="multipart/form-data">
    <h1>Edit  <?=$tabename?>:</h1>
    <!--<select >
        <option disabled="" selected="" >A</option>
        <option>B</option>
    </select>-->
<?php
//var_dump($select);
//inputs
//echo '<select><option></opt</select>';
for ( $i=0;$i<count($inputs);$i++)
echo '<label> '.$inputs["$i"].'</label>
    <input type="text" name="'.$inputs["$i"].'" placeholder="plese write the '.$tabename .' '.$inputs["$i"].' here" 
	value="'.$pagedata[$inputs["$i"]].'">';
// select	
if (  count($select)>0 ){ 
    foreach ($select as $key => $value) {
            echo '<label>'.$key.'</label>';
            echo '<select name="'.$key.'">';
            echo '<option  selected="" >'.$pagedata[$key].'</option>';
            for ( $i=0;$i<count($value);$i++)
                 echo '<option>'.$value[$i].'</option>';
            echo '</select> <p><br>';
    }
}
//file 
if (isset ( $fil))
    foreach ($fil as $key => $value)
            {
                if ($key == 'image')
                    foreach ($fil['image'] as $key1)
                             echo ' <label>'.$key1.'</label>
                                    <input type="file" name="'.$key1.'"  />    
                                    </p><img src='.$pagedata[$key1].' width=300px height=150px /></p>';
                 if ($key == 'vedio')
                    foreach ($fil['vedio'] as $key1)
                             echo ' <label>'.$key1.'</label>
                                    <input type="file" name="'.$key1.'"  />    
                                    </p><video controls="" width=70%><source src='.$pagedata[$key1].' type="video/mp4" ></video></p>';
            }

 echo '<p><br>';
//die;

for ( $i=0;$i<count($area);$i++)
echo '<label>'.$area[$i].'</label>
    <textarea name="'.$area[$i].'" placeholder="plese write the '.$area[$i].' here">'.$pagedata[$area[$i]].'</textarea>
    ';
	?>        
    <input type="submit" name="submit" value="Edit">           
     
</form>