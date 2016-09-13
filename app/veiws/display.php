<h3><?=strtoupper($page)?></h3>
<h4><?='Num Of Rows : '.count($DataDisplay)?></h4>
<table class="table table-hover table-bordered sectionTable">
    <tr class="danger">
        <th>Id</th>
        <?php
		if (isset ( $inputs[0]))
		   for ( $i=0;$i<count($inputs);$i++)
		       echo ' <th>'.$inputs[$i].'</th>';
		if (isset ( $select))
                    foreach ($select as $key => $value) 
                        echo ' <th>'.$key.'</th>';
                 if (isset ( $area))
                    for ( $i=0;$i<count($area);$i++) 
                        echo ' <th>'.$area[$i].'</th>';     
		if (isset ( $fil))
		 foreach ($fil as $key => $value)
                     for ( $i=0;$i<count($value);$i++)
		          echo ' <th>'.$value[$i].'</th>';
		?>
        <th>Action</th>  
    </tr>
    <?php
    for ($i = 0; $i < count($DataDisplay); $i++) {
        echo "            
                <tr>
                    <td>".$DataDisplay[$i]['id']."</td>";
                    if (isset ( $inputs))
		       for ( $j=0;$j<count($inputs);$j++)
		            echo " <td>".$DataDisplay[$i][$inputs[$j]]."</td>";
		    if (isset ( $select))
		        foreach ($select as $key => $value)
                        echo " <td>".$DataDisplay[$i][$key]."</td>";
                    if (isset ( $area))
                    for ( $j=0;$j<count($area);$j++) 
                     echo " <td>".$DataDisplay[$i][$area[$j]]."</td>";
					
		    if (isset ( $fil))
	             	foreach ($fil as $key => $value)
                               for ( $j=0;$j<count($value);$j++)
	                 	echo ' <td>'.$DataDisplay[$i][$value[$j]].'</td>';
				//	<td>".$DataDisplay[$i]['num']."</td>
		
                              
                 echo "   <td>";
    if (isset($Controll['con']['D']) && $Controll['con']['D']==1 )              
echo "<a href='?page=".$page."&action=delete&id=".$DataDisplay[$i]['id']."'><img src='resources/images/delete.png'></a>";
                   
    if (isset($Controll['con']['U']) && $Controll['con']['U']==1 ) 
echo "<a href='?page=".$page."&action=edit&id=".$DataDisplay[$i]['id']."'><img src='resources/images/edit.png'></a>";
echo "
                    </td>
                </tr>
            ";
        }
?>
    
</table>
<!-- 73 -->