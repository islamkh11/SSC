<?php
include '../../includes/init.php';
//show latest message
if ( isset($_GET['showMessage']) && $_GET['showMessage']=='TRUE' )
{  
try {
    // show latest message
    $dbobj->setTable('latest_message');
    $latest_message = $dbobj->getAllDataByID(getLog(), 'recieve_username');
    // get latest message pict  
    $dbobj->setTable('member');
    if ($latest_message != FALSE)
    for ($i=0;$i<count($latest_message);$i++)
    { $sender_pict =  $dbobj->getAllDataByID($latest_message[$i]['sender_username'], 'username', 'ASC', 1, 'pict')[0]['pict'];
      ?>
        <li>
            <div class="row" onclick=showchat("<?=$latest_message[$i]['sender_username']?>",1)>
                <div class="col-md-4" style="height: 100px">
                    <div class="profile-info">
                        <a><img src="<?=$sender_pict?>" alt="Profile Pic"></a>
                                <h5><?=$latest_message[$i]['sender_username']?></h5>
                            </div>
                </div>
            <div class="col-md-8">
                <div class="message">
                    <p><a><?=substr($latest_message[$i]['body'],0,30)?></a></p>
                </div>
            </div>
            </div>
        </li>
     <?php
     }
     else echo '<h4 align=center>You Have No New Message</h4>';
     
     
} catch (Exception $exc) {
    echo $exc->getMessage();
}  
}

//    send new message 
else if (isset ($_GET['username']) && isset ($_GET['body']) )
{ 
    try {
           // select last messege between
           $query = 'SELECT `id` FROM `latest_message`
                     WHERE  ( `sender_username`="'.getLog().'" && `recieve_username`="'.$_GET['username'].'" ) ';
           $sql = mysql_query($query);
           if (mysql_affected_rows()>0)
            {  
              //delet chosen message from latest message
             $dbobj->setTable('latest_message');
             $delet = $dbobj->deletRecord(mysql_fetch_array($sql)['id']);
            }
            // add new message
            $data = ['sender_username'  =>  getLog(),
                     'recieve_username' =>  $_GET['username'],
                     'body'             =>  $_GET['body']];
            $dbobj->setTable('latest_message');
            $addLatestMessage = $dbobj->AddData($data);
            $dbobj->setTable('message');
            $addMessage = $dbobj->AddData($data);
            if ($addLatestMessage == TRUE && $addMessage == TRUE) { ?> <div class="alert alert-success text-center"><h4>Message <strong>Sended</strong></h4></div><?php }
        
    } catch (Exception $exc) { echo $exc->getMessage(); }
}
// show message form
else if ( isset($_GET['username']) && isset($_GET['id']) )
{ 
    ?>
      <div class="dropdown open">
            <a data-toggle="dropdown " onclick="closechat()"><i class="fa fa-comments-o fa-2x"></i></a>
            <div class="dropdown-menu chat" style="bottom: 135%;overflow-x: hidden;" >
                    
                <ul role="menu" aria-labelledby="dLabel"  style="" >
                        <li style="color: black; background:white;border: none;">
                            <form name="formsend">
                                  <input name="message" id="messs<?=$_GET['username']?>" autofocus style="border-radius: 1px 1px 1px 1px; width: 90%;">
                                  <br><input  type="button"  onclick=sendmessage("<?=$_GET['username']?>",document.formsend.message.value) 
                                                   value="Send" style="width: 70%; height: 25px; margin: 10px 0px 0px 10%;"></input>
                                            
                            </form>
    
                        </li>
                        <li style="border: none;">
                            <div id="chat2"></div>
                        </li>
                    </ul>  
                    <ul role="menu" aria-labelledby="dLabel" id="chatmessages"></ul>
                </div>                    
      </div>
      <?php
}
// show all message 
else if ((isset($_GET['username']) ) )
{   echo date('h:m:s');
    try {
   $query = 'SELECT * FROM `message`
             WHERE ( `sender_username`="'.$_GET['username'].'" && `recieve_username`="'.getLog().'" ) ||
                   ( `sender_username`="'.getLog().'" && `recieve_username`="'.$_GET['username'].'" ) order by `id` desc limit 100';
   mysql_query("SET NAMES UTF8");
   $sql = mysql_query($query);
   $dbobj->setTable('member');
   $num_message =  mysql_affected_rows();
   if ($num_message>0)
   {   // display all message
    for ($i=0;$i<$num_message;$i++)
       { 
       $messages [$i] = mysql_fetch_array($sql,MYSQL_ASSOC);
       $sender_pict = $dbobj->getAllDataByID($messages[$i]['sender_username'], 'username', 'ASC', 1, 'pict')[0]['pict'];
       if ($messages[$i]['sender_username']!= getLog())
        { ?>
   <li  class="user-name" style="width :96%">
        <div class="row" >
            <div class="col-md-3">
                <a><img src="<?=$sender_pict ?>" alt="Profile Pic"></a>
            </div>
            <div  class="col-md-9">
                <p ><?=$messages[$i]['body']?></p>
            </div>
        </div>
    </li>
      <?php } else { ?>
    <li class="me"  style="width :96%">
        <div class="row" >
            <div class="col-md-9">
                <p><?=$messages[$i]['body']?></p>
            </div>
            <div class="col-md-3">
                <a><img src="<?=$sender_pict ?>" alt="Profile Pic"></a>
            </div>
        </div>
    </li>
    
    <?php }
      }      
   }
   }catch (Exception $exc) { echo $exc->getMessage(); }

}
// 190
    ?>
       
            