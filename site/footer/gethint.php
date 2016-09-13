<?php
include '../../includes/init.php';
// Array with member usernames
if ( !isset( $_GET['str'])) die;
$dbobj->setTable('member');
$allUsername = $dbobj->getAllData( 'username');
// get the q parameter from URL
$q = $_GET["str"];
$hint = "";
// lookup all hints from array if $q is different from ""
$hint_names = array();
if ($q !== "") {
    $q      = strtolower($q);
    $len    = strlen($q);
    foreach($allUsername as $name) { 
        if (stristr($q, substr($name['username'], 0, $len))) { $hint_names[] = $name['username']; }
    }
}
// display output
?><table style="width: 100%;"><?php
$j = 0;
for ($i=0;$i<count($hint_names);$i++)
{
$pict_member = $dbobj->getAllDataByID($hint_names[$i], 'username', 'ASC', 1, 'pict')[0]['pict'];
if ($j==0) { ?> <tr style="height: 130px;width: 100%;"> <?php } ?>
                    <td style="width: 25%;" >  
                        <img class="img-hint" ondblclick=select_hint("<?=$hint_names[$i]?>") src="<?=$pict_member?>" alt="Profile Pic">
                        <h4 class="h4-hint" style=" "><?=$hint_names[$i]?></h4>
                    </td>
<?php if ($j==3){
                    echo '</tr> ';
                    $j=0;
                }
    else $j++;
}
//66
?>
</table>