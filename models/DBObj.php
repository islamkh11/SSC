<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of DBObj
 * 
 * @author islam
 */
class DBObj {
    //put your code here
    private $host,$user,$password,$database_name,$tablename;
    
    function __construct($host , $user , $password , $database_name)
    {
        // set var of  database 
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database_name = $database_name; 
        // connect to database
        $this->connect();
    }
     private function connect()
    {  
        //connect to the server
        
        if(!$con = mysql_connect($this->host,$this->user, $this->password))
            throw new Exception("Error: not connected to the server.");        
        mysql_set_charset("utf-8",$con);
        // select the database
        if(!mysql_select_db($this->database_name))
            throw new Exception("Erro: No database selected");
        //else            throw  new Exception ('succes connect to database');
    mysql_set_charset("utf8");
    }
    function close()
    {
        unset($this->cxn);
        $this->cxn = null;
    }
    function  setTable($tablename)
    {
        $this->tablename = $tablename;
    }
    function getAllData($col='*',$limit=100,$ord='ASC') 
    {
        // get all data
        $sql = "SELECT $col FROM `$this->tablename` ORDER BY `id` $ord limit  ".$limit;
        return $this->Data_fetch($sql);
    }
    function getAllDataByID($id, $col = "id",$ord='ASC',$limit=100,$tar='*') {  
         $sql = "SELECT $tar FROM `$this->tablename` WHERE `$col`= '".$id."' ORDER By `id` ".$ord." limit ".$limit;
         return $this->Data_fetch($sql);
    }
    
    function Data_fetch($sql)
    {
        // return fetch array of data selected by givin sql query
        $res = mysql_query($sql);
		
		if ( $res!=FALSE )
		{ 
                $i=0;
		$num = mysql_num_rows($res);
                
		while ( $num )
		{
			$data[$i] = mysql_fetch_array($res,MYSQLI_ASSOC);
			$i++;
			$num--;
		} 
		
		}
		else $data=FALSE ;
		
        return @$data;
    }
    
     function AddData($data) {
		//var_dump($data);
        foreach ($data as $key => $value) {
            $keys[] = $key;
            $values[] = $value;
        }
        
        $tblKeys = implode($keys, "`,`");
		$tblKeys = '`'.$tblKeys.'`';        
        $keyss =  implode($values, "','");
        $keyss = "'" .$keyss."'";
      $sql = "INSERT INTO `".$this->tablename."`($tblKeys) VALUES ($keyss)";
    
    mysql_query("SET NAMES UTF8");
    return $this->excSql($sql);
    }
    
     function excSql ($sql)
    {
        $res = mysql_query($sql);
        
        // die ; 
          if(mysql_errno() == 0)
          {
          return TRUE;
          }
          else
          {
          throw new Exception("Error: Can not excute the query : ".$sql);
          return FALSE;
          } 
    }
    
     function EditData($data,$id,$col='id') {
      //  $id = intval($id);
        
        $sql = "UPDATE `$this->tablename` SET ";
        foreach ($data as $key => $value) {
            $sql .= "`" . $key . "` = '" . $value . "', ";
        }
        $pat = "+-0*/";
        $sql .= $pat;
        $sql = str_replace(", " . $pat, " ", $sql);
        $sql .= " WHERE `".$col."` = '$id'";
        return $this->excSql($sql);
    }
    
     function deletRecord( $id,$col='id' )
    {
         if ($col=='id' && intval($id) ==0)
         throw new Exception("Error: invailed id to delet."); ;
       $sql = "DELETE FROM `$this->tablename` WHERE `$col` = '$id' ";
        $res = mysql_query($sql);
        
        if(mysql_errno()!=0)
        {
            throw new Exception("Error: not deleted.");
        }
        else
        {
            return TRUE;
        }
    }
    
// end of class    
}
