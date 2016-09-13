/* 
 * file js contain all function used in site
 * the functionality is o use ajax for adding comment
 */
function choosecolor ($id){
   document.getElementById($id).class='active';//style.border="3px solid black";
}

function tour ()
    {
        alert ('sorry this service is not ready');
    }
function addContact ( $username , $email , $content )
{
    createRequestObject('message_contact');
    sendReq('./indexpage/addcontact.php','username^email^content',$username+'^'+$email+'^'+$content);
    handleResponse();
}
function unlink ($i,$table)
{
    createRequestObject('alertMessage');
     sendReq('./courses/unlink.php','postid^table',$i+'^'+$table);
	handleResponse();
}
// display video
function viewvideo($c,$j,$num)
{
    for ($i=0;$i<$num;$i++)
        document.getElementById('viewvideo'+$i).innerHTML='';
    
   createRequestObject('viewvideo'+$j);
     sendReq('./courses/viewvideo.php','src^p',$c+'^'+'Y');
	handleResponse();
}
// check regist
function checkRegist(){
   // fname sname uname email password repassword id branch major minor day month year gen
   createRequestObject('rigistmessages');
   sendReq('./registration/checkregist.php',
           '$trans[fname]^$trans[sname]^$trans[username]^$trans[email]^'+
           '$trans[password]^$trans[repassword]^$trans[id]^$trans[branch]^$trans[major]^$trans[minor]^$trans[day]^'+
           '$trans[month]^$trans[year]^$trans[gen]',
            fname.value+'^'+ sname.value+'^'+ uname.value+'^'+ email.value+'^'+ password.value+'^'+ repassword.value+'^'+
            id.value+'^'+ branch.value+'^'+ major.value+'^'+ minor.value+'^'+ day.value+'^'+ month.value+'^'+ year.value
                       +'^'+ gen.value);
	handleResponse();
    }
// search by wolframe api 
function WFSearch ()
{
    
    if (document.getElementById('searchKey').value !='')
    {
        $text = document.getElementById('searchKey').value;
    createRequestObject('chat');
    sendReq('./profile/WFSearch.php','text^id',$text+'^yy');
    handleResponse();
    }
}
// add rate to the site
function add_rate ($i)
    {   
    createRequestObject('new_rate');
    sendReq('./indexpage/addrate.php','i^p',$i+'^'+'Y');
    handleResponse();
    }
// add downloud
function add_downloud ($i,$j,$c)
    {   
      
       // return ;
        createRequestObject('new_downloud'+$i);
     sendReq('./courses/adddownloud.php','i^p^c',$i+'^'+$j+'^'+$c);
	handleResponse();
    }
//send message
function every_mn ()
{
    alert (Date(year));
    
}
function sendmessage($touser,$body)
{ 
    createRequestObject('chat2');
    sendReq('./footer/message.php','username^body',$touser+'^'+$body);
    handleResponse();
    
}
function sendmessage1($touser,$body)
{ //alert ($touser+$body);
    //die;
    
    createRequestObject('profile-info');
     sendReq('./footer/message.php','username^body^e',$touser+'^'+$body+'^'+'e');
     handleResponse();
}
// close chat 
 function closechat()
 {    
     document.getElementById('chat').innerHTML=''
             +'<div  class="dropdown">'
             +'<a data-toggle="dropdown" onclick="closechat()"><i class="fa fa-comments-o fa-2x"></i></a>'
             +'<ul  class="dropdown-menu chat" role="menu" aria-labelledby="dLabel">'
             +'</ul>'
             +'</div>';
     
 }
// show chat 
function showchat($name,$id)
{   $er = $name;
    closechat();
    createRequestObject('chat');
    sendReq('./footer/message.php','username^id',$name+'^'+$id);
    handleResponse();
    $page  = './footer/message.php';
    $div   = 'chatmessages';
    $var   = 'username';
    $val   = $name;
    $timer = 2000;
    //alert ($timer);
	setTimeout('Ajax1("'+$page+'","'+$div+'","'+$var+'","'+$val+'",'+$timer+')',$timer);
        //alert('messs'.$er);
    //scrollling("messs"+$name);
}
function scrollling ($div){
    //alert (document.getElementById($div));
    
   //alert($div);
    document.getElementById($div).scrollIntoView(); 
}
// show latest message
function showmessage()
{   closechat();
    createRequestObject('latest_message');
    sendReq('./footer/message.php','showMessage','TRUE');
    handleResponse();
   scrollling ("for_msend");
}
// add post to my favorite 
function removeFromFav ($i)
{
    createRequestObject('message');
     sendReq('./profile/remove_fav.php','postid^y',$i+'^'+'Y');
	handleResponse();
}
function addfav($i,$code)
 {
   
    createRequestObject('alertMessage');
     sendReq('./courses/newfav.php','postid^y^code',$i+'^'+'Y'+'^'+$code);
	handleResponse();
    
 }
// submit new comment
function subcomm($body,$idofpost,$i,$k,$ord){
        createRequestObject('newcomm'+$i+'l'+$k);
        sendReq('./courses/newcomm.php','body^postid^i^k^ord',$body+'^'+$idofpost+'^'+$i+'^'+$k+'^'+$ord);
	handleResponse();
}
// do not show all coments for all posts
function clearcomment($n,$k){
    for ($i=0;$i < $n ;$i++)
    {
     //alert('newcomm'+$i+'l'+$k);
    document.getElementById('newcomm'+$i+'l'+$k).innerHTML=' ';
    }
}
// show uploud cover form 
function uploudCover(ord)
{
    $con = '<form method="post" enctype= "multipart/form-data">\n\
<input name="filecover" style="display: block; height: 40px; margin: 0px 30px 0px 25%;" type="file">\n\
<input name="code" value="'+ord+'" type="hidden">\n\
<input name="subcover" value="Submit" class="btn btn-success post" title="" type="submit">\n\
</form>';
     document.getElementById('altcover'+ord).innerHTML=$con;
}
// get a post comments 
function showComments($i,$k,$postid,$num,$ord){
  /*
    * i : order of post in course
    * k : order of course 
    * postid : post of the id in database
    * num : num of posts in course
    * ord : if coudle be recomment 
    */
     //alert('newcomm'+$i+'l'+$k);
     clearcomment($num,$k);
     createRequestObject('newcomm'+$i+'l'+$k);
     sendReq('./courses/newcomm.php','i^postid^ord^k',$i+'^'+$postid+'^'+$ord+'^'+$k);
     handleResponse();
     
}   
// submit a report    
function report($postid)
{ 
    $reso = '';
    $reso = prompt ('please write down why you report this post .');
   
    
    if ( !$reso || $reso == '' )
    return;
//else 
    	createRequestObject('alertMessage');
        sendReq('./courses/addreport.php','reso^postid',$reso+'^'+$postid);
	handleResponse();
       alert ('thank you , your report has been added and the adminstration will confirm you reported result .');
    
}

// set all notification
function getnotif($postid)
{
   	createRequestObject('alertMessage');
        sendReq('./courses/get_notify.php','postid^ord',$postid+'^'+'$ord');
	handleResponse();
       
}

// show all notify to user
function shownotify ()
{  //alert('yyy');
   createRequestObject('notify');
     sendReq('./footer/getnotify.php','postid^y','i'+'^'+'Y');
	handleResponse();
}

function showHint (str)
{
    createRequestObject('profile-info');
     sendReq('./footer/gethint.php','str',str);
	handleResponse();
}

function select_hint($reicever)
{
   // alert($reicever);
    document.formsend1.subbody.value=$reicever;
 document.getElementById('profile-info').innerHTML=''   
}

function queSearch($searchKey)
{
    document.getElementById('res3').style.display='block';
    createRequestObject('ulRes');
    sendReq('./question/searchQue.php','searchKey',$searchKey);
    handleResponse();        
}