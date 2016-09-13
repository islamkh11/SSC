		<!-- Start Section Our Courses -->
		<section class="our-courses text-center">
			<div class="container-fluid">
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
                                                                    $i=0;
                                                                    foreach ($content as $key => $value) {
                                                                      ?>
                                                                    <li data-target="#main-carousel" data-slide-to="<?=$i?>" 
                                                                        <?php if ($i==0) echo  " class='active'";?> >
                                                                        <p><?=$content[$key]['title']?></p>
                                                                    </li>
                                                                    <?php
                                                                    $i++;
                                                                    }
                                                                    ?>
								
								</ul>
                                                                <?php if (isset($errorMsg)) echo $errorMsg; ?>
							</div>
							<div class="col-xs-1">
								<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</a>
							</div>
						</div>
					</div>
					<!-- Wrapper for slides -->
                                        <div id ="alertMessage"></div>
					<div class="carousel-inner" role="listbox">
                                            <?php
                                            $isactive=0; $courseCount=0;$courseOrder=-1;
                                            foreach ($content as $key => $value) {
                                                                     $courseOrder++;                                               
                                                                                                              
                                            ?>
						<div class="item
                                                <?php if ($isactive==0) echo ' active"' ?> "    >
							<section class="courses-contents">
								<div class="row">
									<div class="col-md-4">
                                                                            <?php
                                                                            if ( isset($structure['addNew']) )
                                                                            {   
                                                                                if (isset($_GET['stat']) && $_GET['stat']=='multimedia' && isset($_GET['id'])) $key = $value['id'] ;             
                                                                            ?>
										<div class="status">
                                                                                    <form class="form-group" method="post" name="formlec" enctype="multipart/form-data">
                                                                                      <?php 
                                                                                      if (isset ($structure['form']['title']))
                                                                                      { ?><input type="text" name="title" placeholder="<?=$structure['form']['title']?>" class="form-control input-lg" ><br><?php }
                                                                                      if (isset ($structure['form']['h3']))
                                                                                      { ?><h3><?=$structure['form']['h3']?></h3><br><?php }
                                                                                      if (isset($structure['form']['desq']))
                                                                                      { ?><textarea name="desq" class="form-control input-lg" style="margin-bottom:10px;" placeholder="<?=$structure['form']['desq']?>"></textarea><?php }
                                                                                      if (isset ($structure['form']['file']))
                                                                                      { ?><input name="<?=$structure['form']['file']?>" style="display: block; height: 30px; margin: 10px 0px -30px; " type="file"><?php }
                                                                                      if (isset ($structure['form']['hidden']))
                                                                                      { ?><input type="hidden" name="<?=$structure['form']['hidden']?>" value="<?=$key?>"><?php }
                                                                                      if (isset ($structure['form']['submit']))
                                                                                      { ?><input type="submit" name="<?=$structure['form']['submit']?>" value ="Submit" class="btn btn-success post" title="Post"><?php }
                                                                                      ?>
                                                                                    
                                                                                    </form>
                                                                                    <div class="clear-fix"></div>
										</div>
                                                                            <?php 
                                                                            }
                                                                            ?>
									</div>
                                                                    <?php if (!isset($noMode)) include './courses/mode.php'; ?>    
                                                                </div>
                                                            <?php
                                                            if (isset($value['elements']) && $value['elements']!=FALSE)
                                                            {
                                                                ?><div class="row"><?php
                                                                $j=0;
                                                               for($i=0;$i<count ($value['elements']);$i++)
                                                                { 
                                                                    ?>
                                                                        <div class="col-md-4">
										<div class="posts">
											<div class="profile"> 
                                                                                            <a href="host.php?user=<?=$value['elements'][$i]['usernameHashed']?>"><img src="<?=$value['elements'][$i]['pict']?>" alt="Profile Pic">
												<h4><?=$value['elements'][$i]['username']?></h4></a>
                                                                                                <?php if ($value['elements'][$i]['perm'] != 'hidden' ) { ?>
												<div class="dropdown">
													<button class="btn btn-default dropdown-toggle" type="button" id="posts-settings" data-toggle="dropdown">
														<i class="fa fa-caret-down"></i>
													</button>
                                                                                                   
													<ul class="dropdown-menu" aria-labelledby="posts-settings">
                                                                                                           
                                                                                                            <?php if (isset($structure['unlink']) ) { ?><li><a onclick="unlink(<?=$value['elements'][$i]['id']?>,'<?=$structure['table']?>')"><?=$structure['unlink']?></a></li><?php }?>
                                                                                                            <?php if (isset($structure['report']) ) { ?><li><a onclick="report(<?=$value['elements'][$i]['id']?>)"><?=$structure['report']?></a></li><?php }?>
														
													<?php if (isset($structure['getNotify'])  ) { ?><li><a onclick="getnotif(<?=$value['elements'][$i]['id']?>)"><?=$structure['getNotify']?></a></li><?php }?>
                                                                                                           
                                                                                                        </ul>
												</div>
                                                                                            <?php if (isset($structure['addToFav'])  ) { ?>
												<div class="dropdown">
													<button class="btn btn-default dropdown-toggle" type="button" id="posts-settings" data-toggle="dropdown">
														<i class="fa fa-plus"></i>
													</button>
													<ul class="dropdown-menu" aria-labelledby="posts-settings">
														
														<li><a onclick="addfav(<?=$value["elements"][$i]["id"]?>,<?php echo chr(39).$key.chr(39);?>)"><?=$structure['addToFav']?></a></li>
													</ul>
												</div>
                                                                                                <?php } } ?>
											</div>
											<div class="clear-fix"></div>
											<hr>
											<div class="post-content">
												<p><?php 
                                                                                                if ($value['elements'][$i]['perm'] == 'hidden' ) { echo $structure['hidden']; }
                                                                                                else if ($structure['mode']=='resource') { ?> <h2><?=$value['elements'][$i]['title']?></h2> <?php }
                                                                                                else if ($structure['mode']=='book' || $structure['mode']=='lecture' || $structure['mode']=='multimedia' )
                                                                                                        { ?>
                                                                                                        <h2><?=$value['elements'][$i]['title']?></h2>
                                                                                                        <div class="post-content">
                                                                                                            <p><?=$value['elements'][$i]['desq']?></p>
                                                                                                        </div>
                                                                                                      <?php  }
                                                                                               else echo $value['elements'][$i]['body'];
                                                                                                        ?></p>
											</div>
                                                                                        <?php
                                                                                        if ( ( $structure['mode']=='book'  || $structure['mode']=='lecture' ) && $value['elements'][$i]['perm'] != 'hidden' ) 
                                                                                        {
                                                                                        $on = 'add_downloud('.$value['elements'][$i]["id"].','.$value['elements'][$i]["downloud"].',"'.$value['elements'][$i]["src"].'")';
                                                                                        ?>
											<div id="new_downloud<?=$value['elements'][$i]['id']?>">
                                                                                     <button type="button" onclick=<?=$on?> class="btn btn-success write-comment" title="comment">
                                                                                        <?=$structure['downloude']?>(<?=$value['elements'][$i]["downloud"]?>)</button></div>
											
										
                                                                                        <?php  }
                                                                                        else if ($structure['mode']=='multimedia' && $value['elements'][$i]['perm'] != 'hidden' ){ 
                                                                                            ?>
                                                                                           <a href="?stat=resource&id=<?=$value['elements'][$i]["id"]?>">
                                                                                               <button type="button" style="width:100px"  class="btn btn-success write-comment" title="comment">
                                                                                                    <div class="text-center"><?=$structure['more']?></div>
                                                                                               </button>
                                                                                           </a>
											
										
									
                                                                                        <?php
                                                                                        }
                                                                                        else if ($structure['mode']=='resource') { ?>
                                                                                            <div id="viewvideo<?=$i?>"><?=$content[0]['elements'][$i]["link"]?></div>
											<hr>
                                                                                        <button type="button" onclick="<?="viewvideo( '".$content[0]['elements'][$i]["link"]."',$i,".count($content[0]['elements']) .")"?>" class="btn btn-success write-comment" title="comment"> 
                                                                                            &ensp;&ensp;View&ensp;&ensp;
                                                                                        </button>
											
										
                                                                                            <?php }
                                                                                         else if ($value['elements'][$i]['perm'] != 'hidden' ) { ?>
											<hr>
											<button type="button" class="btn btn-success write-comment" onclick="showComments(<?=$i?>,<?=$courseCount?>,<?=$value['elements'][$i]["id"]?>,
                                                                                        <?=count($value['elements'])?>,true)" title="comment"><?=lang('comment')?></button>
                                                                                         <?php } ?>
											<div class="comments">
												<div id="newcomm<?=$i?>l<?=$courseCount?>"></div>
											</div>
                                                                                       
										</div>
									</div>
                                                                        <?php
                                                                    if ($j%3==2)
                                                                    { $j=-1;
                                                                        ?></div><div class="row"><?php
                                                                    }
                                                                    $j++;
                                                                    
                                                                }
                                                                ?></div><?php
                                                                
                                                            }
                                                            else {
                                                                ?>
                                                            <br><br><br><br>
                                                            <?php
                                                            }
                                                            ?>
                                                               
							</section> <!-- End section Courses Contents -->
						</div> <!-- End Div Item -->
						<?php
                                                $isactive=1; $courseCount++;
                                                  }
                                                ?>
                                               </div> <!-- End Wrapper for slides -->
				</div>
			</div> <!-- End container -->
		</section> <!-- End Section Our Courses --> <!-- 253 -->