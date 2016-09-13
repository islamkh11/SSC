<?php
//courses Controll ::
/*
 * if ( new multimedia ) add new multimedia
 * if ( res id ) get rsources elements
 * if ( new post ) add new post
 * if ( new resource ) add new resource
 * if ( new course cover ) add new course cover
 * get user lang
 * get user courses
 * get user course title 
 * get user course posts
 * get user course images
 *  structure lang
 * 
 */
// Courses Control ::
$page = 'courses';
include '../includes/init.php';
// submit multimedia 
if (isset($_POST['subres']))
{    
    if (isset($_FILES)&& $_FILES!='')
        {
        // uploud
        try { //var_dump($_FILES); die;
            $allowedExts = array('jpg', 'png', 'gif', 'jpeg','3gp','mp4','mkv');
        $uploadsDirecotry = "../uploads/videos/";
        $maxSize = 400000000;
        $upload = new Upload($_FILES['fileres'], $allowedExts, $uploadsDirecotry, $maxSize);
        $upload->uploadFile();
        // add to db
        $data = ['resourceID'=>$_GET['id']];
        $data['link'] = $upload->getFileUrl();
        $data['title'] = $_POST['title'];
        $dbobj->setTable('multimedia');
        $addres = $dbobj->AddData($data);
        throw new Exception('Resource Uploaded Successfly');
        } catch (Exception $exc) { $errorMsg = '<h3 style="color:red">'.$exc->getMessage().'</a>'; }
        }
}
// if isset resource and id 
if (isset($_GET['stat']) && $_GET['stat']=='resource' && isset($_GET['id']))
{
    // if id not int die
    if (intval($_GET['id']) == 0)
        die;
    // use to set mode
    $data_course = new Course($dbobj);
    $coursesCodes = $data_course->userCoursesCodes(getLog());
    // get content elemnts [ res - multimedia ]
    $dbobj->setTable('resource');
    $content[0] = $dbobj->getAllDataByID($_GET['id'], 'id', 'ASC', 1)[0];
    $dbobj->setTable('multimedia');
    $content[0]['elements']= $dbobj->getAllDataByID($_GET['id'], 'resourceID');
    // get pict of owner
    $dbobj->setTable('member');
    $pict = $dbobj->getAllDataByID ($content[0]['username'], 'username', 'ASC', 1, 'pict')[0]['pict'];
    
    if ($content[0]['elements']!=FALSE)
    for ($j=0;$j<count($content[0]['elements']);$j++)
    { $content[0]['elements'][$j]['pict'] = $pict;
    $content[0]['elements'][$j]['username'] = $content[0]['username'];
    }
    // set add new and table
    $structure = ['table'=>'multimedia','mode'=>'resource','hidden'=>lang('hidden')];
    $structure['form'] = ['title'=>'resource title','file'=>'fileres','hidden'=>'resourceID','submit'=>'subres'];
    if ($content[0]['username'] == getLog())
    {   
        $structure['addNew'] = ['resource']; 
        $structure['unlink'] = lang('unlink');
    }
    if (IsPatton()) $structure['unlink'] = lang('unlink');
    // views
    include './views/headerInner.php';        
    include './views/coursem.php';
    include './views/footerInner.php';
    die;
}
try {
    // add new post 
    if (isset($_POST['sub_post'])&& ($_POST['sub_post']=='Submit'  ) )
        {
        $post = [   'username'  =>  getLog(),
                    'stat'      => $_POST['coursecode'],
                    'body'      => $_POST['desq'] ];
        // check if post contain (')
        for ($i=0;$i<strlen($post['body']);$i++)
            if (ord ($post["body"][$i]) == 39)  
                throw new Exception("<h4>Sorry Post <strong>Can Not</strong> Contain <strong>Spicial Char</strong> </h4>");
        $dbobj->setTable('post');
        $addnewpost = $dbobj->AddData($post);
        }
    // add new resource
    if (isset($_POST['sublec']) &&  ($_POST['sublec'] == 'Submit')  )
    {
        if (isset($_GET['stat'])) $type = $_GET['stat'];
        if (isset($_FILES['filelec'])&& !empty($_FILES['filelec']['name']))
            { // upload lectures
                $uploadsDir = '../uploads/files/';    
                $allowedExts = array('ppt','pdf','pptx');
                $upload = new Upload($_FILES['filelec'],$allowedExts,$uploadsDir,30000000);
                $upload->uploadFile();
                $data['src'] = $uploadsDir.$upload->getFileUrl();                
            }
        $data['title']      = $_POST['title'];
        $data['desq']       = $_POST['desq'];
        $data['code']       = $_POST['code'];
        $data['type']       = $type;
        $data['username']   = getLog();
        $dbobj->setTable('resource');
        $dbobj->AddData($data);   
   }
    // add new course cover 
    if (isset($_POST['subcover']) &&  ($_POST['subcover'] == 'Submit') && IsPatton() )
        {
         if (isset($_FILES['filecover'])&& !empty($_FILES['filecover']['name']))
            { 
                $uploud = new Upimage($_FILES['filecover']);
                $data = ['pict'=>$uploud->link()];
            }
            $dbobj->setTable('course');
            $dbobj->EditData($data, $_POST['code'], 'code');
        }
} catch (Exception $exc) { $errorMsg = '<div class="alert alert-danger"><h4>'.$exc->getMessage().'</h4></div>'; }
// SET CONTENT OF COURSES VIEW
// get courses codes and names and posts
    $data_course = new Course($dbobj);
    $coursesCodes = $data_course->userCoursesCodes(getLog());
// get courses title and posts 
    $dbobj->setTable('course');
    $books_data = new Resource();
 for ($i=0;$i<count($coursesCodes);$i++)
{   // get courses title
     $nameType = (getUserLang() == 'ar') ? 'Aname' : 'name' ;
     $content[$coursesCodes[$i]]['title']= $dbobj->getAllDataByID ($coursesCodes[$i], 'code', 'ASC', 100, $nameType)[0][$nameType];
    // get course elements [ books || lectures || posts]
     if (isset($_GET['stat']) && $_GET['stat']!='post' )
        $content[$coursesCodes[$i]]['elements'] = $books_data->getResource($dbobj,$coursesCodes[$i], $_GET['stat']);
    else {  
       $dbobj->setTable('post');
       $content[$coursesCodes[$i]]['elements'] = $dbobj->getAllDataByID($coursesCodes[$i], 'stat', 'DESC', 100);
         }
    $dbobj->setTable('course');
}
// get element images
$dbobj->setTable('member');
$hash = new hash();

for ($i=0;$i<count($coursesCodes);$i++)
   {   
    if ($content[$coursesCodes[$i]]['elements']!=FALSE)
       foreach ($content[$coursesCodes[$i]]['elements'] as $key => $value) {
           $ownerPict = $dbobj->getAllDataByID ($value['username'], 'username', 'ASC', 1, 'pict')[0]['pict'];
           $content[$coursesCodes[$i]]['elements'][$key]['pict'] = $ownerPict;
           $firsthashusername = new Hashen ($value['username']);
           $firsthashusername1 = $firsthashusername->getC();
           $hahenusername = $hash->encr('encrypt', $firsthashusername1);
           $content[$coursesCodes[$i]]['elements'][$key]['usernameHashed'] = $hahenusername;
       }
   }
// SET CONTENT OF COURSES VIEW
//views ::
include './views/headerInner.php';
// structure lang
if ($coursesCodes[0]==NULL) { ?>
<div class="alert alert-success" style="width: 40%; align-self: center; margin: 5% 0px 0px 25%;"><!--<div style="width: 40%; align-self: center; margin: 5% 0px 0px 25%;">'-->
    <h3> You Have No Registed Courses </h3>
    <hr>
    <h4> If You Want To Regist Courses Go To <a href="./profile.php">Profile</a> Then Choose Course </h4>
    <h5>( Check If Time Is New Semister )</h5>
    <hr>
    <h4> Or You Can Check <a href="./help.php">Help</a> Page</h4>
    <hr>
    <div class="alert alert-danger">
        <h5>If You Think That You See That By Wrong Just Contact The Adminstration</h5>
    </div>
</div>
<div style="height: 220px;width: 100%;"></div><!--</div>-->

  <?php include $viewDir . 'footerInner.php'; die ; }
if (isset($_GET['stat']) && $_GET['stat']=='book') {
            $structure = [  'addNew'=>'books',  'mode'  =>'book','downloude'=>'Downloud',
                            'table'=>'resource','hidden'=>lang('hidden') ];
            $structure['form']=['title'=>lang('book title'),'desq'=>lang('book desq'),'file'=>'filelec','hidden'=>'code',
                                'submit'=>'sublec'];
            if (IsPatton()) $structure['unlink'] = lang('unlink');
        }    
else if (isset($_GET['stat']) && $_GET['stat']=='lecture') {
        $structure = [ 'addNew'=>'books' , 'mode'=>'lecture', 'downloude'=>'Downloud',
                       'table' =>'resource' , 'hidden'=>lang('hidden') ];
        $structure['form']=['title'=>lang('lecture title'),'desq'=>lang('lecture desq'),'file'=>'filelec','hidden'=>'code','submit'=>'sublec'];
        if (IsPatton()) $structure['unlink'] = lang('unlink');
    }
else if (isset($_GET['stat']) && $_GET['stat']=='resource') {
        $structure = [ 'addNew'=>'multimedia' , 'mode'=>'multimedia', 'hidden'=>lang('hidden') , 'more'=>lang('more') , 'table' =>'resource'];
        $structure['form']=['title'=>lang('multimedia title'),'desq'=>lang('multimedia desq'),'hidden'=>'code'
                            ,'submit'=>'sublec'];
        if (IsPatton()) $structure['unlink'] = lang('unlink');
    }
else {
        // start work in posts structure 
            $structure = ['addNew'      =>'post' , 'mode'=>'posts' , 'table' =>'post', 
                          'form'        =>['hidden'=>'coursecode','submit'=>'sub_post' , 'desq'=>lang('desq')],
                          'posted'      =>lang('posted'),    'report'      =>lang ('report'),
                          'getNotify'   =>lang('getNotify'), 'addToFav'    =>lang('addToFav'),
                          'hidden'      =>lang('hidden')
                         ];
            if (IsPatton()) $structure['unlink'] = lang('unlink');
       // end work in posts structure 
    }
    if ( isset($_GET['stat']) && $_GET['stat']=="resource" && !isset ($_GET['id']))
    { 
        $dbobj->setTable('course');
        for ($i=0;$i<count($coursesCodes);$i++)
            $coursesNames[$i] = $dbobj->getAllDataByID($coursesCodes[$i], 'code','ASC',1);
    }
include $viewDir . 'coursem.php';
include $viewDir . 'footerInner.php';
// 314
?>