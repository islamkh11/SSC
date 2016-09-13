<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lecture
 *
 * @author islam
 */
class Resource {
    //put your code here
    
     public function __construct() {
         
     }
     public function getResource($dbobj,$user_courses_name,$type='lecture') {
     
         $this->data = FALSE;
     $db = $dbobj;
     $query = 'SELECT * FROM `resource`
             WHERE 
            `code`="'.$user_courses_name.'" && `type`="'.$type.'" order by `id` desc';
    $sql = mysql_query($query);
    if (mysql_affected_rows() > 0)
    {
        $num = mysql_affected_rows();
        $k=0;
        while ($num>0)  
        {
        $this->data[$k] = mysql_fetch_array($sql,MYSQL_ASSOC);
        $query2 = ' SELECT `pict` FROM `member` WHERE  `username`="'.$this->data[$k]["username"].'" ';
        $sql2 = mysql_query($query2);
        $this->data[$k]["pict"] = mysql_fetch_array($sql2,MYSQL_ASSOC)['pict'];
        $k++;
        $num--;
        }
        
     }
    
$db->close();
        return $this->data;
    }
    
    // class end
}
