<?php
include '../../includes/init.php';
if (isset($_GET['src'])) { ?>
    <h3><?=$_GET['src']?></h3>
    <video controls='' style='width: 100%;'>
        <source src='<?=$videoDir . $_GET['src']?>'></source>
    </video> <?php } ?>

