		<!-- start div Top_Header That Contain Logo And Ask Area-->
        	<div class="header_Top">
                <div class="container">
                    <div class="row">
               <div class="col-lg-5 col-md-5 col-xs-12">
                        	<!-- Start div Ask Form-->
							<div class="Ask">
                                                            <div class="msg"><?=$msg?></div>
                                                            <form class="form-group" method="post" >
									<textarea  name="que" class="form-control input-lg" placeholder="Ask Your Question?"><?=$que?></textarea>
					<div class="clear-fix"></div>			
                                <input type="submit" value="Ask" style="margin-top: 10px;" class="btn btn-success Ask_Button" name="sub" >
                                </form>	
								<div class="clear-fix"></div>
							</div>
							<!-- Start div Ask Form-->
						</div>
                         <div class="col-lg-3 col-md-3 col-xs-6">
                             <form >
                                 <input type="text" placeholder="Search for questions" oninput="queSearch(this.value)"  style="margin: 10% 35% 10% 30%; width: 200%; height: 50px; border-radius: 5px;padding-left: 10px;font-size: 18px;">
                                 
                             </form>
                             <div id="res3" class="res" >
                                 <ul style="list-style: none;" id="ulRes">
                                 
                                 </ul>    
                             </div>
                        </div>
                    </div>
                </div>
            </div>
			<!-- end div Top_Header That Contain Logo And Ask Area-->
            <!--Start div Question title that (Main_Question)-->
            <div class="Question_Title">
            	<div class="container">
        			<div class="row">
                    	<hr>
            			<div class="col-lg-12">
                            <div class="jumbotron" style="display: <?php if ($queDisplay=='T') echo 'block'; else echo 'none';?>;">
                            	<h2>Question ?</h2>
                                <div class="Questions">
                                    <div class="Question_Person">
                                        <a><img style="margin:10px;width: 10%;height: 120px;" src="<?=$que_data['pict']?>" alt="Profile Pic"></a>
                                        <h4 ><?=$que_data['username']?></h4>
                                    </div>
                                    <div class="clear-fix"></div>

                                    <div class="Question-content">
                                        <p><?=$que_data['que']?></p>
                                        </div>
												
                                    <div class="clear-fix"></div>
                                 </div>
                            </div>
                    	</div>
                     </div>
                 </div>
             </div>
            <!--End div Question title that (Main_Question)-->
            <!--Start div Answer_Head_Line (Contain Answer Word And Two line)-->
             <div class="container" style="display: <?php if ($queDisplay=='T') echo 'block'; else echo 'none';?>;"> 
                 <div class="row">
                 	 <hr>
                     <div class="Answer_Head_line">
                         <div class="col-xs-1">
                            <h2>Answer</h2>
                        </div>
                        <div class="col-xs-11">
                            <span class="badge"><?php if (isset($ans_data) && $ans_data!=FALSE) echo count($ans_data);?></span>
                        </div>
                    </div>
                    <div class="clear-fix"></div>
                    <hr>
                </div>
            </div>
            <!--End div Answer_Head_Line (Contain Answer Word And Two line)-->
            <!--All Answer And Question (Today & Recent <Question>)-->
             <div class="Question_And_Answers_cont">
                 <div class="container">
                    <div class="row">
                    	<!--div For All Answer and Answer replie Only-->
                    	<div class="All_Answer">
                            <div class="col-lg-8 col-md-6" style="display: <?php if ($queDisplay=='T') echo 'block'; else echo 'none';?>;">
                                <?php 
                                 //var_dump($ans_data);
                                if (count($ans_data)>0 && $ans_data!=FALSE)
                                    for ($i=0;$i<count ($ans_data);$i++)
                                    {
                                    ?>
                                <div class="Answer">
                                    <div class="Answer_Person">
                                        <a><img src="<?=$ans_data[$i]['pict']?>" alt="Profile Pic"></a>
                                        <h4><?=$ans_data[$i]['username']?></h4>
                                    </div>
                                    <div class="clear-fix"></div>
                                    <hr>
                                    <div class="Answer-content">
                                    <p><?=$ans_data[$i]['ans']?></p>
                                    </div>
                                </div>
                                <?php } ?>
                              
                                <div class="special_hr">
								<hr>
                                </div>
                                <!--Answer Text Area-->
                                <div class="Add_Answer">
                                    <div><?=$msg_ans?></div>
                                    <form class="form-group" method="post">
                                        <textarea name="ans" class="form-control input-lg" placeholder="Add Your Answer..."><?=$myans?></textarea>
                                        <input 	class="btn btn-success post" name="sub" value="Answer" type="submit">									
                                    
                                    </form>	
                                    <div class="clear-fix"></div>
                                </div>
                                <!--Answer Text Area-->
                            </div>
						</div>
                    	<!--div For All Answer and Answer replie Only-->
                    	<!--div For All Question (Today & Recent)---(Only) -->                        
							<div class="All_Question">
								<div class="col-lg-4 col-md-6">
                                <!--Start Today Question Div-->
                                <div class="Today_Questions">
                                    <h3>Recent Questions</h3>
                                    <hr>
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                      <!-- Wrapper for slides -->
                                      <div class="carousel-inner" role="listbox">
                                           <?php  
                                           $hashid = new Hash();
                                          if (isset($recent_ques) && count($recent_ques)>0)
                                              for ($i=0;$i<count($recent_ques);$i++)
                                              {
                                                  
                                                  $hashed = $hashid->encr('encrypt', $recent_ques[$i]['id']);
                                              ?>
                                              <div class="item <?php if ($i==0) { ?>active<?php } ?>">
                                            <div class="Questions">
                                                <div class="Question_Person">
                                                    <a><img src="<?=$recent_ques[$i]['pict']?>" alt="Profile Pic"></a>
                                                    <h4><?=$recent_ques[$i]['username']?></h4>
                                                </div>
                                                <div class="clear-fix"></div>
                                                <hr>
                                                <div class="Question-content">
                                                    <p><?=$recent_ques[$i]['que']?></p>
                                                    </div>
                                                    <hr>												
                                                    <a href ="?id=<?=$hashed?>"><button class="btn btn-success post" title="Post">go to question</button></a>
                                                <div class="clear-fix"></div>
                                             </div>
                                        </div>
                                              <?php } ?>
                                      
                                      </div>
                                    
                                      <!-- Controls -->
                                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                                </div>
                                <!--End Today Question Div-->
                                <!--Start Recent Question Div-->
                                <div class="Recent_Questions">
                                    <h3>Recent Answers</h3>
                                    <hr>
                                    <div id="carousel-example-generic_1" class="carousel slide" data-ride="carousel">
                                      <!-- Wrapper for slides -->
                                      <div class="carousel-inner" role="listbox">
                                          <?php 
                                          if (isset($recent_ans) && count($recent_ans)>0)
                                              for ($i=0;$i<count($recent_ans);$i++)
                                              {
                                                   $hashed = $hashid->encr('encrypt', $recent_ans[$i]['queId']);
                                              ?>
                                              <div class="item <?php if ($i==0) { ?>active<?php } ?>">
                                            <div class="Questions">
                                                <div class="Question_Person">
                                                    <a><img src="<?=$recent_ans[$i]['pict']?>" alt="Profile Pic"></a>
                                                    <h4><?=$recent_ans[$i]['username']?></h4>
                                                </div>
                                                <div class="clear-fix"></div>
                                                <hr>
                                                <div class="Question-content">
                                                    <p><?=$recent_ans[$i]['ans']?></p>
                                                    </div>
                                                    <hr>												
                                                    <a href ="?id=<?=$hashed?>"><button class="btn btn-success post" title="Post">go to question</button></a>
                                                
                                                <div class="clear-fix"></div>
                                             </div>
                                        </div>
                                              <?php } ?>
                                     </div>
                                    
                                      <!-- Controls -->
                                      <a class="left carousel-control" href="#carousel-example-generic_1" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="right carousel-control" href="#carousel-example-generic_1" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                                </div>
                                <!--End Recent Question Div-->
                            </div>
						</div>
                    	<!--div For All Question (Today & Recent)---(Only) -->
					</div>
				</div>
			</div>
            <!--All Answer And Question (Today & Recent <Question>)-->
        <!-- 392 -->