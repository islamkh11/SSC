<?php
// control profile
$page = 'profile';
include '../includes/init.php';
include './profile/department.php';
// set member information
$dbobj->setTable('member');
$data_member = $dbobj->getAllDataByID(getLog(), 'username')[0];
$_SESSION['user_pict']  = $data_member['pict'];
$_SESSION['color']      = $data_member['color'];
$_SESSION['lang']       = $data_member['lang'];
$dbobj->setTable('join_course');
$user_courses_code      = $dbobj->getAllDataByID(getLog(), 'username', 'ASC', 100, 'code');
// site news
$dbobj->setTable('news');
$data_news = $dbobj->getAllDataByID (getUserLang(), 'lang');
// time table 
$dbobj->setTable('course');
for ($i=0;$i<count($user_courses_code);$i++)
    $user_courses[$i] = $dbobj->getAllDataByID ($user_courses_code[$i]['code'], 'code')[0];
$days = ['Sa','Su','Mo','Tu','We','Th',''];
$start = [8,10,12,2,4,6];
for ($i=0;$i<count($days);$i++)
    for ($j=0;$j<count ($start);$j++)
        $time_table [$days[$i]][$start[$j]]=[' ',' '];
$time_table['']['']=['',''];
$name = ($data_member['lang']=='ar') ? 'Aname' : 'name';
if (isset($user_courses))
    foreach ($user_courses as $key => $value) {
    $time_table[$value['day']][$value['start']]=['</h4><h4>'.$value[$name],'</h4><h4 class="place">'.$value['place']];
    }
// fav posts ::
$dbobj->setTable('fav_post');
$favPostData = $dbobj->getAllDataByID(getLog(), 'username');
$removedPost = ['body'=> 'this content maybe removed , sorry !',
                'username'=>''];
$dbobj->setTable('post');
if (isset($favPostData))
  foreach ($favPostData as $i => $Data) {
    $val = $dbobj->getAllDataByID($Data['post_id'])[0];
    $removedPost['id'] = $Data['id'];
    $poatData = ($val != NULL) ? $val : $removedPost ; 
    $poatData['fav_id'] = $Data['id'];
    $favPosts[$Data['code']][] = $poatData ;
}
// views
include $viewDir . 'headerInner.php';
include $profDir . 'academic-id.php'; 
$dbobj->setTable('site');
if ( $dbobj->getAllDataByID(1)[0]['new_sem'] == 'T'  ) include $profDir . 'data.php';
include $profDir . 'timetable.php';
include $profDir . 'fav.php';
include $viewDir . 'footerInner.php';
//155 111
?>