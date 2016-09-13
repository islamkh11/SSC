<!-- Start Section Favourites -->
		<section class="favourites text-center">
			<div class="container-fluid">
				<i class="fa fa-thumbs-o-up fa-4x"></i>
				<h2 class="h1"><?=lang('favTitle')?></h2>
                                <div id='message'></div>
                                <?php if (isset($user_courses) && $user_courses[0]!=NULL) { ?>
				<div id="main-carousel" class="carousel slide courses" data-ride="carousel">
					<div class="controls">
						<div class="row">
							<div class="col-xs-1">
								<a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								</a>
							</div>
							<div class="col-xs-10">
								<!-- Indicators -->
								<ul class="carousel-indicators">
                                                                    <?php 
                                                                    if (isset($user_courses) && $user_courses[0]!=NULL)
                                                                        if ($data_member['lang']=='ar')
                                                                        for($i=0;$i<count($user_courses);$i++) {
                                                                          echo '<li data-target="#main-carousel" data-slide-to="'.$i.'" ';
                                                                               if ($i==0) echo  'class="active"';
                                                                               echo '><p>'.$user_courses[$i]['Aname'].'</p></li>';   
                                                                        }
                                                                        else for($i=0;$i<count ($user_courses);$i++) {
                                                                          echo '<li data-target="#main-carousel" data-slide-to="'.$i.'" ';
                                                                               if ($i==0) echo  'class="active"';
                                                                               echo '><p>'.$user_courses[$i]['name'].'</p></li>';   
                                                                        }
                                                                    ?>
                                                              </ul>
							</div>
							<div class="col-xs-1">
								<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</a>
							</div>
						</div>
					</div>
					
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
<?php 
if ( isset( $user_courses ) )
    for ( $k=0 ; $k<count($user_courses) ; $k++)   
        {
          echo '<div class="item';
          // make it active for first time only 
          if (!isset($p)) echo ' active';
          $p=0;
          echo '"><section class="courses-contents">';
          // change in posts
          $cols = 0;
          $i=0;
          if ( isset ( $favPosts[$user_courses[$k]['code']]) )
              foreach ( $favPosts[$user_courses[$k]['code']] as $key => $value) 
                      {  
                       $fav_posts = $favPosts[$user_courses[$k]['code']];
                        if ($cols==0)
                        echo '<div class="row">';
                        $cols++;		
                        $dbobj->setTable('member');
                        $post_pict = $dbobj->getAllDataByID($value['username'], 'username',$ord='ASC',$limit=1,'pict')[0]['pict'];
                        ?>
                        <div class="col-md-3">
                            <div class="posts">
                                <div class="profile">
                                    <a><img src="<?=$post_pict?>" alt="Profile Pic"></a>
                                    <h4><?=$value['username']?></h4>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="posts-settings" data-toggle="dropdown">
                                             <i class="fa fa-caret-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="posts-settings">
                                            <li><a onclick="removeFromFav(<?=$value['fav_id']?>)" ><?=lang('unlink')?></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clear-fix"></div>
                                <hr>
                                <div class="post-content">
                                    <p><?=$value['body']?></p>
                                </div>
                                <hr>
                                <button type="button" class="btn btn-success write-comment" title="comment"
                                        onclick="showComments(<?=$i?>,<?=$k?>,<?=$value["id"]?>,<?=count($fav_posts)?>,false)"><?=lang('comments')?></button>
                                <div class="comments">
                                    <div id="newcomm<?=$i?>l<?=$k?>"></div>
                                </div>
                            </div>
                       </div>
                        <?php
                        if ($cols==4)
                           {
                            echo '</div> <!-- End Row -->';
                            $cols=0;
                            }
                        $i++;
                    }
                    else echo '<div class="clear-fix"></div>';
                    echo '</section> <!-- End section Courses Contents -->
                          </div> <!-- End Div Item -->';
                                            }    
                                            ?>
		</div> <!-- End Wrapper for slides -->
				</div>
                                <?php } ?>
			</div> <!-- End container -->
		</section> <!-- Start Section Favourite -->
                <?php // 170 ?>