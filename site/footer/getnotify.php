<?php
//show notify for member
include '../../includes/init.php';
$dbobj->setTable('notify');
$user_notify = $dbobj->getAllDataByID(getLog(), 'username',$ord='ASC',$limit=100,'*');
if ($user_notify!=FALSE)
foreach ($user_notify as $key => $value) {
    if ($value['stat']=='comment' && $value['num'] != 0) {
    $dbobj->setTable('post');
    $post_data = $dbobj->getAllDataByID($value['page']);
    $hashid = new Hashen($value['page']);
    $hashid1 = new Hashen($value['id']); ?>
    <li>
        <a href="./indv.php?notified=<?=$hashid->getC()?>&notifeid=<?=$hashid1->getC()?>">
            <p> New <?=$value['num']?> Comments In Post You Follow </p>
        </a>
    </li>
<?php 
    }
}
//37