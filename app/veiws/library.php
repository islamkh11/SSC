<h3>Library</h3>
<div claas="library"><div class="clear"></div>
<hr>
<h3>Images</h3>
<div class="imglib">
    <form class="mainSettingsForm add newPage imgs" action="" method="post">   
    <?php
            foreach ($images as $value) { ?>
            <p>
                <input type='checkbox' class='checkbox' name='checkimage[]' value='<?=$imagesDirecotry.$value?>'>
                <img src='<?=$imagesDirecotry.$value?>' />
            </p> <?php } ?>
	
            <div class="clear"></div>
            <input type="submit" name="submit" value="Delete">
     </form>
</div>
<div>
    <hr>
    <h3>Videos</h3>  
    <form class="mainSettingsForm add newPage imgs" action="" method="post">
	<table style="width:100%;">
	<?php 
        $k=0;
        foreach ($video as $value) {
            if ($k==0) 
		echo "<tr>"; ?>
            <td style="width:30%;">
                <input type='checkbox' class='checkbox' name='checkimage[]' value='<?=$videosDirecotry.$value?>'>
                <video width='100%' height='100%' controls>
                    <source src='<?=$videosDirecotry.$value?>' type='video/mp4'>
                </video>
            </td>
       <?php
            if ($k==2) {
                        echo "</tr> ";
                        $k=0;
                        }
            else $k++;
			} ?>
                        
        </table>
        <div class="clear"></div>
        <input type="submit" name="submit" value="Delete">
    </form>
</div>
</div>