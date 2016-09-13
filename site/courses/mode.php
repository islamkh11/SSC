<?php
$n = (!isset($n)) ? 0 : $n+1 ;
$courseInfo = $data_course->courseInfo($coursesCodes[$n])[0];
?>
<div class="col-md-8" >
    <div class="status">
        <table style="width: 100%;height: 100%;">
            <tr>
                <td style="width:25%;padding: 5px;">
                    <div class="clear-fix"></div>
                    <h3 class="modeh3"><?php echo strtoupper($structure['mode']);?></h3>
                    <div class="clear-fix"></div>
                    <div class="clear-fix"></div>
                </td>
                <td  style="width:75%;margin-left:5px ;padding: 5px;">
                <?php if (!empty($courseInfo['pict'])) { ?> <div style="display: block; height: 140px;">
                                                                <img style="width:90%;height: 100%;" src="<?=$courseInfo['pict']?>" alt=" ">
                                                            </div>
                                                  <?php } else if (IsPatton()) {?> 
                                                            <div id="altcover<?=$key?>">
                                                                <h3>If You Have Cover For This Course Just <a style="text-decoration: none;" onclick="uploudCover(<?php echo chr(39).$key.chr(39) ; ?>)">Uploud It</a> </h3>
                                                            </div>
                                                                            <?php } ?>
                 </td>
             </tr>
         </table>
    </div>
</div><!--40-->