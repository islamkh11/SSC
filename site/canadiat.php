<?php
$page = 'election';
include '../includes/init.php';
if (isset($_POST['sub_post'])&& $_POST['sub_post']=='Submit' )
{    
    try {
        // del user from patton if exist
        $dbobj->setTable('patton');
        $pattonUser = $dbobj->getAllDataByID(getLog(), 'username');
        if (isset($pattonUser[0]['id']))
        $dbobj->deletRecord( $pattonUser[0]['id'] );
        // add new user to patton 
        $patton = ['username'=>getLog()];
        $addnewpatton = $dbobj->AddData($patton);
        // del post patton for this user 
        $dbobj->setTable('post');
        $posts = $dbobj->getAllDataByID('patton','stat');
        for ($k=0;$k<count($posts);$k++)
           if ($posts[$k]['username']==getLog())
                $dbobj->deletRecord( $posts[$k]['id'] );
        // add new patton posts to post
        for ($j=0;$j<9;$j++)
        {
        $post = ['username'=>getLog(),
              'stat' => 'patton',
              'body'=>  '<h4 style="width:350px">'.lang('postcon',$j).'</h4><h5>'. $_POST['post'.$j].'</h5>'
        ];
               
        for ($i=0;$i<strlen($post['body']);$i++)
            if (ord ($post["body"][$i]) == 39)
            throw new Exception("sorry post cannot contain (')");
        $addnewpost = $dbobj->AddData($post);
        }
       throw new Exception('<div class="becanad"><div class="alert alert-success">'.lang('succesCanad').'</div></div>');
        
        
    } catch (Exception $exc) {
        $t= $exc->getMessage();
      $errorMsg =  "  
                <div class='modal-content' style='height:92px; margin-bottom: 12px;'><div class='modal-body'><p class='lead'>
                $t</a>
         </div></div>";
      //die;
    }
    }
// views ::
include $viewDir . 'headerInner.php';
include './canadiat/newelect.php';
include $viewDir . 'footerInner.php';
// 102