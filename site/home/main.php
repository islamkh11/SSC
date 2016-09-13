<!-- Start Section Global -->
<section class="global text-center">
    <div class="container-fluid">
        <i class="fa fa-globe fa-3x"></i>
        <h2><?=lang('mainH2')?></h2>
	<div id="main-carousel" class="carousel slide courses" data-ride="carousel">
            <div id ="addfav"><?=$message?></div>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <section class="courses-contents">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="status">
                                        <form class="form-group" method="post">
                                            <textarea name="post" class="form-control input-lg" style="margin-bottom:10px;" placeholder="what do you want to post ...."></textarea>
                                            <input type="submit" name="sub_post" value ="Submit" class="btn btn-success post" title="Post">
                                        </form>
                                        <div class="clear-fix"></div>
                                    </div>
                                </div>
                             </div>
                            <?php if (isset($global_post)) {  $j=0;
                                        for ($i=0;$i<count($global_post);$i++)  {   
                                            $dbobj->setTable('member');
                                            $post_pict = $dbobj->getAllDataByID($global_post[$i]["username"], 'username','ASC',1,'pict');
                                            if ($j==0) { ?> 
                        <div class="row"> 
                            <?php } ?>
                           <div class="col-md-4">
                              <div class="posts">
                                      <div class="profile">
                                            <a><img src="<?=$post_pict[0]['pict']?>" alt="Profile Pic"></a>
                                            <h4><?= $global_post[$i]["username"]?></h4>
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="posts-settings" data-toggle="dropdown">
                                                    <i class="fa fa-caret-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="posts-settings">
                                                    <li><a onclick="report(<?= $global_post[$i]['id']?>)"><?=lang('report')?></a></li>
                                                    <li><a onclick="getnotif(<?=$global_post[$i]['id']?>)"><?=lang('getNotify')?></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="posts-settings" data-toggle="dropdown">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="posts-settings">
                                                    <li><a onclick="addfav(<?=$global_post[$i]['id']?>)" ><?=lang('addToFav')?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear-fix"></div>
                                        <hr>
                                        <div class="post-content">
                                            <p><?=$global_post[$i]['body']?></p>
                                        </div>
                                
                                <br> 
                                <button type="button" class="btn btn-success write-comment" onclick="showComments(<?=$i?>,0,<?=$global_post[$i]["id"]?>,<?=count($global_post)?>,true)" title="comment"><?=lang('comments')?></button>
                                <br> 
                                <br>
                                <div class="comments">
                                     <div id="newcomm<?=$i?>l0"></div>
				</div>
                            </div> 
                          </div>
                                                     <?php      $j++;
                                                                if ($j==3)
                                                                {   ?></div><?php
                                                                    $j=0;
                                                                }
                                                                
                                                                                }
                                                            } ?>
                     </section> <!-- End section Courses Contents -->
                </div> <!-- End Div Item -->
            </div> <!-- End Wrapper for slides -->
        </div>
    </div> <!-- End container -->
</section> <!-- 133 End Section Our Courses -->