<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Posts
 *
 * @author islam
 */
class Course {
    //put your code here
    private $dbobj;
    public function __construct($dbobj) {
        $this->dbobj = $dbobj ;
      
    }
    public function userCoursesCodes($username){
        // return courses join by user
       // include 'DBObj.php';
        
        $this->dbobj->setTable('join_course');
        //$data = new Display ('join_course');
        $userCoursesCodes = $this->dbobj->getAllDataByID($username, 'username', 'ASC', 100, 'code');
                //$data->getColByCol('code', 'username', $username);
        $userCoursesCodes0 = NULL;
        for ($i=0;$i<count($userCoursesCodes);$i++)
        $userCoursesCodes0[$i] = $userCoursesCodes[$i]['code'];
        return $userCoursesCodes0;
       
    }
    public function coursesNames($coursesCodes,$lang) {
       // $data = new Display('course');
        
        if ($lang == 'ar')
                for ($i=0;$i<count($coursesCodes);$i++)
            $courseNames[$i]['name'] = $this->dbobj->getAllDataByID($coursesCodes[$i], 'code', 'ASC', 100, 'Aname')[0]['Aname'];
                       // $data->getColByCol ('Aname', 'code', $coursesCodes[$i])[0]['Aname'];
    
        else for ($i=0;$i<count($coursesCodes);$i++)
            $courseNames[$i]['name'] = $this->dbobj->getAllDataByID($coursesCodes[$i], 'code', 'ASC', 100, 'name')[0]['name'];
             //   $data->getColByCol ('name', 'code', $coursesCodes[$i])[0]['name'];
    return $courseNames;
        
    }
    public function coursesPosts($coursesCodes)
    {   // return posts by courses

        // get post by code
       // $data = new Display ('post');
        $this->dbobj->setTable('post');
        for ($i=0;$i<count($coursesCodes);$i++)
            $courses_posts[$coursesCodes[$i]] = $this->dbobj->getAllDataByID($coursesCodes[$i], 'stat', 'DESC', 100, '*');
                //$data->getAllDataByID($coursesCodes[$i], 'stat','DESC');
         
        // get pict by post code
        //$data_member = new Display ('member');
        $this->dbobj->setTable('member');
        for ($i=0;$i<count($coursesCodes);$i++)
        {   if ($courses_posts[$coursesCodes[$i]]!=FALSE)
            for ($j=0;$j<count($courses_posts[$coursesCodes[$i]]);$j++)
                $courses_posts[$coursesCodes[$i]][$j]['pict'] = 
                    $this->dbobj->getAllDataByID($courses_posts[$coursesCodes[$i]][$j]['writer_username'], 'username', 'ASC', 100, 'pict')[0]['pict'];
                  //  $data_member->getColByCol ('pict', 'username', $courses_posts[$coursesCodes[$i]][$j]['writer_username'])[0]['pict'];
        }            
          
          
          
   return $courses_posts;
    }
    public function courseInfo($courseCode)
    { // get all info of course 
        
      // get info by code
       // $data = new Display ('course');
        $this->dbobj->setTable('course');
     return   $course_info = $this->dbobj->getAllDataByID($courseCode, 'code');
             $data->getAllDataByID($courseCode, 'code');
        
    }
    // end of class
}
