<?php
//'id', 'title', 'logo', 'mini_logo', 'brand', 'map', 'copy'
//'pict', 'name', 'facebook', 'twitter', 'google', 'work'
//'site-prof','site-account-settings'
 /* else if ($_GET['page'] == 'site-site')
   $Controll=['headline'=>'',
              'page'    =>$_GET['page'],
              'tabename'=>'',
              'inputs'  =>[''],
              'select'  =>[''=>['']],
              'area'    =>[''],
              'fil'     =>['image'=>[''],
                           'vedio'=>[''],
                           'file' =>['']
                  ]
       ];
  
*/
if ($_GET['page'] == 'site-features')
   $Controll=['headline'=>'Features',
              'page'    =>$_GET['page'],
              'tabename'=>'site-features',
              'inputs'  =>['title'],
              'select'  =>['type'=>['thumbs-up','user','lock']],
              'area'    =>['desq'],
              'fil'     =>[/*'image'=>[''],
                           'vedio'=>[''],
                           'file' =>['']*/
                  ]
       ];
else if ($_GET['page'] == 'site team')
   $Controll=['headline'=>'Team',
              'con'     =>['A'=>1,'U'=>1,'D'=>1],
              'page'    =>$_GET['page'],
              'tabename'=>'siteTeam',
              'inputs'  =>['name', 'facebook', 'twitter', 'google', 'work','Aname','Awork'],
              'select'  =>[],
              'area'    =>[],
              'fil'     =>['image'=>['pict'],
                           
                  ]
       ]; 
else if ($_GET['page'] == 'Contact')
   $Controll=['headline'=>'Contact',
              'con'     =>['A'=>0,'U'=>0,'D'=>1],
              'page'    =>$_GET['page'],
              'tabename'=>'sitecontact',
              'inputs'  =>['username', 'email', 'message'],
              'select'  =>[],
              'area'    =>[],
              'fil'     =>[
                           
                  ]
       ];
else if ($_GET['page'] == 'site Banner')
   $Controll=['headline'=>'Banner',
              'con'     =>['A'=>1,'U'=>1,'D'=>1],
              'page'    =>$_GET['page'],
              'tabename'=>'site-dep-banner',
              'inputs'  =>['title'],
              'select'  =>[],
              'area'    =>['desq'],
              'fil'     =>['image'=>['banner'],
                           
                  ]
       ];
else if ($_GET['page'] == 'site Prof')
   $Controll=['headline'=>'Prof.',
              'con'     =>['A'=>1,'U'=>1,'D'=>1],
              'page'    =>$_GET['page'],
              'tabename'=>'siteProf',
              'inputs'  =>['title'],
              'select'  =>[],
              'area'    =>['desq'],
              'fil'     =>['image'=>['pict'],
                          
                  ]
       ];
        

else if ($_GET['page'] == 'news')
   $Controll=['headline'=>'News',
              'con'     =>['A'=>1,'U'=>1,'D'=>1],
              'page'    =>$_GET['page'],
              'tabename'=>'news',
              'inputs'  =>[],
              'select'  =>[],
              'area'    =>['news'],
              'fil'     =>[
                  ]
       ];

else if ($_GET['page'] == 'course')
   $Controll=['headline'=>'Course',
              'con'     =>['A'=>1,'U'=>1,'D'=>1],
              'page'    =>$_GET['page'],
              'tabename'=>'course',
              'inputs'  =>['code',  'name','place' ],
              'select'  =>['start'=>['8','10','12','2','4','6'],
                            'day'=>['Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday']],
              'area'    =>[],
              'fil'     =>['image'=>['pict']
                  ]
       ];
else if ($_GET['page'] == 'post Reported')
   $Controll=['headline'=>'Reported Posts',
              'con'     =>['A'=>0,'U'=>0,'D'=>1],
              'page'    =>$_GET['page'],
              'tabename'=>'postReported',//`post_id`, `reporter`, `reported_for`
              'inputs'  =>['post_id','username','reported_for'],
              'select'  =>[],
              'area'    =>[],
              'fil'     =>[
                  ]
       ];
else if ($_GET['page'] == 'site Opinion')
   $Controll=['headline'=>'Opinion',
              'con'     =>['A'=>1,'U'=>1,'D'=>1],
              'page'    =>$_GET['page'],
              'tabename'=>'siteOpinion',
              'inputs'  =>['name'],
              'select'  =>[],
              'area'    =>['desq'],
              'fil'     =>[]
       ];
else if ($_GET['page'] == 'time_table')
   $Controll=['headline'=>'Time Table',
              'page'    =>$_GET['page'],
              'tabename'=>'time_table',
              'inputs'  =>['code','desq'],
              'select'  =>['start'=>['8','10','12','2','4','6'],
                            'day'=>['Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday']],
              'area'    =>[],
              'fil'     =>[]
       ];
else if ($_GET['page'] == 'posts')
   $Controll=['headline'=>'Posts',
              'con'     =>['A'=>1,'U'=>0,'D'=>1],
              'page'    =>$_GET['page'],
              'tabename'=>'post',
              'inputs'  =>['stat', 'username', 'body', 'perm'],
              'select'  =>[],
              'area'    =>[],
              'fil'     =>[
                  ]
       ];
else if ($_GET['page'] == 'comments')
   $Controll=['headline'=>'Comments',
              'con'     =>['D'=>1],
              'page'    =>$_GET['page'],
              'tabename'=>'comment',
              'inputs'  =>['post_id', 'username', 'body', 'date'],
              'select'  =>[],
              'area'    =>[],
              'fil'     =>[]
       ];
else    $Controll=['headline'=>'empty'];



?>
