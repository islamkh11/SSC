<?php
// session 
session_start();
// define 
define('SITE', './site/');
define('APP', '../app');
define('MODELS', './app/models/');
$includes   = '../includes/';
$indexDir   = './indexpage/';
$FOSDir     = './faculty_of_science/';
$RegDir     = './registration/';
$imgDir     = './resources/images/';
$cssDir     = './resources/css/';
$viewDir    = './views/';
$profDir    = './profile/';
$coursesDir = './courses/';
$videoDir   = '../uploads/videos/'; 
$homeDir    = './home/';
$memImgDir  = '../uploads/images/';
// includes 
include 'autoloader.php';
include 'lang.php';
// redirect to index
//echo $_SESSION['sccuser'] . getLog();
if ( (isset ( $_GET['stat']) && $_GET['stat'] == 'logout') || !getLog() )
{ 
$pagesarr = ['index','faculty_of_science','registration'];
if ( array_search($page, $pagesarr) === FALSE ){
session_destroy ();
header('Location:index.php');
    }
}
// DataBase Object
$host           = "localhost";
$user           = "root";
$password       = "";
$database_name  = "scc";
try { $dbobj  = new DBObj($host , $user , $password , $database_name); } catch (Exception $exc) { echo $exc->getMessage(); }
// is log 
// function set log 
function setLog ($val){ $_SESSION['sccuser'] = $val;}
// function getLog
function getLog (){ 
   // echo $_SESSION['sccuser'];
  return  $val =  (isset($_SESSION['sccuser']) && !empty($_SESSION['sccuser']) ) ? $_SESSION['sccuser'] : FALSE ;
}
function IsPatton (){
  return  $val =  (isset($_SESSION['sccpatton']) & !empty($_SESSION['sccpatton'])) ? $_SESSION['sccpatton'] : FALSE ;
}
function getPict () {
    return  $val =  (isset($_SESSION['user_pict']) & !empty($_SESSION['user_pict'])) ? $_SESSION['user_pict'] : FALSE ;
}
function getColor () {
    return  $val =  (isset($_SESSION['color']) & !empty($_SESSION['color'])) ? $_SESSION['color'] : FALSE ;
}
function setColor($val){ $_SESSION['color'] = $val; }
function getUserLang () {
    return  $val = (isset($_SESSION['lang']) & !empty($_SESSION['lang'])) ? $_SESSION['lang'] : FALSE ;
}
function getElection () {
    global $dbobj;
    $dbobj->setTable('site');
    return $election = $dbobj->getAllDataByID(1)[0]['new_patton'];
}
function getTime() {
   echo '....'.date('i:s').'<br>';
}

// search inside array
function search_by_inside ($arr , $ned,$key){
    for ($i=0;$i<count($arr);$i++)
        if ($arr[$i][$key] == $ned)
            return 'TRUE';
    return FALSE;
}
// redirect
function redHome($msg , $url=NULL, $sec=3 )
{
    if ($url === null) $url = 'index.php';
    else $url = (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']!=='') ? $_SERVER['HTTP_REFERER']: 'index.php' ;
    header ("refresh:$sec;url=$url");
    return $msg."<div class='alert alert-info'><h4>You Will Be Redirected After <strong>$sec</strong> Seconds</h4></div>";
    exit();
} 
// get user lang 
try {
if (getLog())
{
$dbobj->setTable('member');
$user = $dbobj->getAllDataByID(getLog(), 'username','ASC',1,'lang')[0];
$user_lang = $user['lang'];
}
} catch (Exception $exc) {
    echo $exc->getMessage();
}
// end 18