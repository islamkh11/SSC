<head><meta charset="utf-8"></head>
<!--Start Footer -->
		<span  class="show-footer text-center">
			<i id="arrow" class="fa fa-chevron-up fa-2x"></i>
		</span>
		<footer class="text-center">
			<div class="row" > 
                            <div class="col-xs-2" >
                                <form role="search" action="./WFSearch.php" method="post">
						<div class="form-group">
                                                    <input type="text" name="searchKey" id="searchKey" class="form-control search"  placeholder="QUICK SEARCH">
                                                 
                                                                
						</div>
					</form>
				</div>
				
				<div class="col-xs-4">
					<div class="events text-center">
                                            
						<div class="col-xs-4">
							<div class="dropdown envelope">
								<a id='tog' onclick="showmessage()" data-toggle="dropdown"><i class="fa fa-envelope-o fa-2x"></i></a>
                                                                <div class="dropdown-menu " style="bottom: 100%;top: inherit;min-width: 400%;max-height: 500px;
                                                                                                   left: -150%;background: #FFF none repeat scroll 0% 0%;overflow-y: scroll;
                                                                                                   overflow-x: hidden;" >
                                                                    <ul id="latest_message"    aria-labelledby="dLabel" >
									
                                                              
								</ul>
                                                                      <div id="for_msend"  >
            <form role="search" method="post" name="formsend1">
                <div class="form-group">
                    <div id="profile-info" class="profile-info">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="subbody" autocomplete=off onkeyup="showHint(this.value)" class="form-control search" placeholder="ENTER USERNAME">
                </div>
                
                <div class="form-group">
                    <textarea name=message  class="form-control" placeholder="YOUR MESSAGE"></textarea>
                </div>
                <div class="form-group" >
                    <input  id="tuu"   value="Submit" onclick=sendmessage1(document.formsend1.subbody.value,document.formsend1.message.value) type="button"  style="width: 50%; margin: 10px 5px 0px 25%; height: 30px;" name="sub">
                </div>
            </form>
        </div>
                                                                </div>
							</div>
						</div>
				
						<div id="chat"  class="col-xs-4">
							<div  class="dropdown">
                                                            <a data-toggle="dropdown" onclick="closechat()"><i class="fa fa-comments-o fa-2x"></i></a>
								<ul   class="dropdown-menu chat" role="menu" aria-labelledby="dLabel">
									
								</ul>
							</div>
						</div>
						
						<div class="col-xs-4">
							<div class="dropdown notifications">
								<a onclick="shownotify()" data-toggle="dropdown"><i class="fa fa-bell-o fa-2x"></i></a>
								<ul id="notify" class="dropdown-menu notification" role="menu" aria-labelledby="dLabel">
									 <div id="notify"></div>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-6">
					<div class="settings">
						<div class="col-xs-3">
							<div class="dropdown">
								<a data-toggle="dropdown"><i class="fa fa-pencil fa-2x"></i></a>
								<div class="dropdown-menu setting">
									<ol role="menu" aria-labelledby="dLabel">
										<li>
											<form role="note">
												<div class="form-group">
													<textarea type="text" class="form-control" placeholder="YOUR NOTE"></textarea>
												</div>
											</form>
										</li>
										<span class="add"><i class="fa fa-plus"></i></span>
									</ol>
                                                                    *this note will not be saved
								</div>
							</div>
						</div>

						<!--<div class="col-xs-3">
                            <a><i class="fa fa-stack-overflow fa-2x"></i></a>-->
                            <div class="col-xs-3">
							<div class="dropdown">
								<a data-toggle="dropdown"><i class="fa fa-stack-overflow fa-2x"></i></a>
                                                                <ul class="dropdown-menu settings" style="width: 200%" role="menu" aria-labelledby="dLabel">
									<li>
										<a href="?stat=post"><p>Posts</p></a>
									</li>
										
									<li>
										<a href="?stat=lecture"><p>Lectures</p></a>		
									</li>
										
									<li>
										<a href="?stat=book"><p>Books</p></a>		
									</li>
									
									<li>
										<a href="?stat=resource"><p>Multimedia</p></a></a>
									</li>
								</ul>
							</div>
						</div>
						<!--</div>-->
						
						<div class="col-xs-3">
				            <a href="./setting.php"><i class="fa fa-cog fa-2x"></i></a>
						</div>
					
						<div class="col-xs-3">
							<a href="./profile.php?stat=logout"><i class="fa fa-power-off fa-2x"></i></a>
						</div>
					</div>
				</div>
			</div>
		</footer> <!-- End Footer -->
		
		
		<!--Start Section Copyright -->
		<section class="copyright text-center">
			<div class="container">
				<p>Copyright &copy; 2016 Science <span> Society</span></p>
			</div> <!-- End container -->
		</section> <!-- Start Section Copyright -->
		
		
		<!-- Start Scroll To Top -->
		<div class="scroll-top">
			<p class="lead fade-scroll"> Scroll Top</p>
			<i class="fa fa-chevron-up fa-3x"></i>		
		</div> <!-- End Scroll To Top -->
			
        <script src="./resources/js/jquery-1.11.3.min.js"></script>    
        <script src="./resources/js/bootstrap.min.js"></script>    
        <script src="./resources/js/select2.full.min.js"></script>    
        <script src="./resources/js/select2.min.js"></script>    
        <script src="./resources/js/plugins.js"></script>    
       <!-- <script src="./resources/js/plugins.js" defer></script> -->
        <script src="./resources/js/wow.min.js"></script>
        <script>new WOW().init();</script>   
        <script src="./resources/js/jquery.nicescroll.min.js"></script>
        <script src="./resources/js/dynamicjs.js"></script>
         <script src="./resources/js/ajax.js"></script>
        <script src="./resources/js/ajaxTimer.js"></script>
        
    </body>
</Html>