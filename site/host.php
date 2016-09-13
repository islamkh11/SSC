<?php
// includes
$page='profile';
include '../includes/init.php';
include './profile/department.php';
/******************************************/
if (isset($_GET['user'])&& !empty($_GET['user']) )
    try {
    $hash           = new Hash();
    $hashuserout    = new Hashout($hash->encr('decrypt', $_GET['user']));
    $valid          = new Validator();
    $valid->checkStings($hashuserout->orgtext, 'system input');
    // work with username
    $target_username =  $hashuserout->orgtext;
    // set member information
    $data_member = $dbobj->getAllDataByID($target_username,"username",'ASC',1,'*')[0] ;
    // set privacy array 
    $_SESSION['user_pict'] = $data_member['pict'];
    $_SESSION['color'] = $data_member['color'];
    if ($target_username != getLog())
        $privacy = explode('/', $data_member['privacy']) ;
    $dbobj->setTable('join_course');
    $user_courses_code = $dbobj->getAllDataByID($target_username,"username",'ASC',100,'code');
    // get site news
    $dbobj->setTable('news');
    $data_news = $dbobj->getAllDataByID (getUserLang(), 'lang');
    include './views/headerInner.php';
    if (isset($privacy)&& $privacy[0]!='')
        for ($h=0;$h<count($privacy);$h++)
            { 
            if ( $privacy[$h] == 'AC' )
                include './profile/academic-id.php';
            if ( $privacy[$h] == 'TT' )
               {
                $dbobj->setTable('course');
                for ($i=0;$i<count($user_courses_code);$i++)
                    $user_courses[$i] = $dbobj->getAllDataByID($user_courses_code[$i]['code'], 'code')[0];
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
                include './profile/timetable.php';
                }
            if ( $privacy[$h] == 'FP' )
                {
                // work in fav :: 
                $dbobj->setTable('fav_post');
                $favPostData = $dbobj->getAllDataByID( $target_username,'username');
                for($i=0;$i<count($favPostData);$i++)
                    $favPostId[$favPostData[$i]['code']][] = $favPostData[$i]['post_id'];
                $dbobj->setTable('post');
                for($i=0;$i<count($user_courses);$i++)
                    {   
                    if (isset($favPostId[$user_courses[$i]['code']]))
                        for ($j=0;$j<count($favPostId[$user_courses[$i]['code']]);$j++)
                            $favPosts[$user_courses[$i]['code']][$j] = $dbobj->getAllDataByID($favPostId[$user_courses[$i]['code']][$j])[0] ;
                    }
                include './profile/fav.php';
                }
            }
        else echo '<div style="width:60%;margin-left:20%;margin-top: 1%;" class="alert alert-info"><div class="text-center"><h3>User Display No Information  </h3></div></div><div style="height:450px"></div>';   
        include './views/footerInner.php';
     } catch (Exception $exc) { echo '<div class="alert alert-danger"><h3>'.$exc->getMessage().'</h3><a href="./index.php">refresh</a></div>';}
// 134
?>