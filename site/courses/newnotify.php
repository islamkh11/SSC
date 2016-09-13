<?php
// if add new comment 
// we have alerady recourds contain users to notify
// we get all those records id , then increment its num by 1
if ( isset($addnewcomment) && $addnewcomment == TRUE)
{
    $dbobj->setTable('notify');
    $all_notify_id = getAllDataByID($comment['post_id'], "page",'ASC',100,'id');
    for ($i=0;$i<count($all_notify_id);$i++)
    {
        $query = 'UPDATE `notify` SET  `num` = `num`+1 WHERE `id` ='.$all_notify_id[$i]['id'];
        $sql = mysql_query($query);
    }
}
// 76