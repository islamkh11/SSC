<!--
//`name`, `color`, `num`
-->
<form class="mainSettingsForm add newPage" action="" method="post" enctype="multipart/form-data">
    <h1> add new <?=$tabename?>:</h1>
<?php
//var_dump($select);
if (  count($inputs)>0 )
{
for ( $i=0;$i<count($inputs);$i++)
     echo '<label>'.$inputs["$i"].'</label>
           <input type="text" name="'.$inputs["$i"].'" 
	   placeholder="plese write the '.$tabename .' '.$inputs["$i"].' ">';	
}

if (  count($select)>0 ){ 
    foreach ($select as $key => $value) {
            echo '<label>'.$key.'</label>';
            echo '<select name="'.$key.'">';
            for ( $i=0;$i<count($value);$i++)
                 echo '<option>'.$value[$i].'</option>';
            echo '</select> <p><br>';
    }
}

if (isset ( $fil))
    foreach ($fil as $key => $value)
            for ( $j=0;$j<count($value);$j++)
            echo ' <label>'.$value[$j].'</label>
                 <input type="file" name="'.$value[$j].'"  />    
                 </p>';


echo '<p><br>';

if (  count($area)>0 )
{
     for ( $i=0;$i<count($area);$i++)
          echo '<label>'.$area[$i].'</label>
                <textarea name="'.$area[$i].'"  placeholder="plese write the '.$area[$i].' here"></textarea>';
}

?>
<!--
    <label>name</label>
    <input type="text" name="title" placeholder="plese write the skill name ">
    
    <label>num</label>
    <input type="text" name="num" placeholder="plese write the skill num ">
    -->
     
<!--
<option>primary</option>
<option>danger</option>
<option>success</option>
<option>info</option>
-->
    
    
    <input type="submit" name="submit" value="Add">           
     
</form>