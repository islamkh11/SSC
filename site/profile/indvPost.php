<script>
    
    //function gooo($postid,$ord){
    //	createRequestObject('newcomm0l0');
      //  sendReq('./courses/newcomm.php','i^postid^ord^k','0^'+$postid+'^'+$ord+'^0');
	//handleResponse();
    //}
    </script>
<section class="our-courses text-center">
			<div class="container-fluid">
				<div id="main-carousel" class="carousel slide courses" data-ride="carousel">
                                <div class="item active">
                                <section class="courses-contents">
								<div class="row">
                                                                    <div class="col-md-4"></div>
									<div class="col-md-4">
										<div class="posts">
											<div class="profile">
												<a><img src="<?=$pict['pict']?>" alt="Profile Pic"></a>
												<h4><?=$post['username']?></h4>

												<div class="dropdown">
													<button class="btn btn-default dropdown-toggle" type="button" id="posts-settings" data-toggle="dropdown">
														<i class="fa fa-caret-down"></i>
													</button>
													<ul class="dropdown-menu" aria-labelledby="posts-settings">
														
														<li><a onclick="report(<?=$post['id']?>)">Report</a></li>
														<li><a onclick="getnotif(<?=$post['id']?>)">Get Notifications</a></li>
													</ul>
												</div>
												<div class="dropdown">
													<button class="btn btn-default dropdown-toggle" type="button" id="posts-settings" data-toggle="dropdown">
														<i class="fa fa-plus"></i>
													</button>
													<ul class="dropdown-menu" aria-labelledby="posts-settings">
														<li><a onclick="addfav(<?=$post['id']?>)">Add To Favourite</a></li>
														
													</ul>
												</div>
											</div>
											<div class="clear-fix"></div>
											<hr>
											<div class="post-content">
												<p><?=$post['body']?></p>
											</div>
											<hr>
											<button type="button" class="btn btn-success write-comment" 
                                                                                          onclick="showComments(0,0,<?=$post['id']?>,0,true)" title="comment">Comment</button>
											<div class="comments">
											 <div id="newcomm0l0"></div>	
                                                                                           
											</div>
										</div>
									</div>
                                                                </div></section></div></div></div></section>
    <!-- 88 -->