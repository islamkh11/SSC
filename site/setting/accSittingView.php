<div role="tabpanel" class="tab-pane active" id="Account">
                    <section class="Acount_Setting_Collaps"><!--To Padding The Total Collaps To Down-->
                        <div class="container-fluid"><!--Start The Container Fluid-->
                            <div class="row"><!--Start The Row-->
                            <!--Start The Left Div-->
                                <div class="col-xs-4">
                                     <div class="Lift_Div">
                                        <header>
                                            <h3>Account Settings</h3>
                                        </header>
                                        <div class="divider-solid"></div>
                                        <div class="tour"><!--Welcome Tour Div (Welcome tour)-->
                                            <div class="row">
                                                <div  class="col-md-3">
                                                    <span class="select_icon glyphicon glyphicon glyphicon-send" aria-hidden="true"></span>
                                                </div>
                                                <div class="col-md-9">
                                                    <h4>Welcome Tour</h4>
                                                        <p>Don't know where to start? </p>
                                                        <p>Take our handy <a onclick="tour()">tour</a></p>
                                                </div>
                                            </div>
                                        </div><!--End Welcome Tour Div-->
                                        <div class="divider-solid"></div>
                                         <div class="tour"><!--Welcome Tour Div (need Help)-->
                                            <div class="row">
                                                <div  class="col-md-3">
                                                    <i class="fa fa-question"></i>
                                                </div>
                                                <div class="col-md-9">
                                                    <h4>Need Help?</h4>
                                                        <p>Visit our <a onclick="tour()">Help</a> section to find the answers you are looking for. </p>
                                                </div>
                                            </div>
                                         </div><!--End Welcome Tour Div-->
                                        </div>
                                    </div><!--End Left Div-->
                                <!--Start The Right Div The Collaps (The Selection Nav Par)-->
                                <div class="col-xs-8">
                                    <div class="Right_Div">
                                    <!--Start The Account Settings (All Content)-->
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <!--Start The Basic Information Collaps-->    
                                        <div id="message"><?=$mess?></div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                            Basic Information
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <form  method='post'>
                                                            <div class="col-xs-12">
                                                                
                                                                    <label>
                                                                        Full Name
                                                                        <span data-toggle="tooltip" data-placement="top" title="Your full name can be any alpha numeric character between 1-50 characters.">?</span>
                                                                    </label>
                                                                    <input class="" type="text" name="fname" placeholder="First Name" value=<?=$data_member['fname']?> >
                                                                    <input class="" type="text" name="sname" placeholder="Second Name" value=<?=$data_member['sname']?> >
                                                                    <label>
                                                                        DATE OF BIRTH 
                                                                        <span data-toggle="tooltip" data-placement="top" title="Please tell us your date of birth so we can ensure that you are the appropriate age to access all of the content on Myspace.">?</span>
                                                                    </label>
                                                                    <input class="" type="text" name="day" placeholder="Day" value="<?=$datee['0']?>" >
                                                                    <input class="" type="text" name="month" placeholder="Month"  value="<?=$datee['1']?>">
                                                                    <input class="" type="text" name="year" placeholder="Year"  value="<?=$datee['2']?> "> 
                                                            
                                                               <label>
                                                                User Name
                                                                <span data-toggle="tooltip" data-placement="top" title="Please enter only letters, numbers, underscores and/or non-consecutive dots & hyphens. (Max 25 characters)">?</span>
                                                            </label>
                                                            <input type="text" name="username" placeholder="Please Enter Your User Name" value=<?=$data_member['username']?>>
                                                                <label>
                                                                    SELECT GENDER 
                                                                    <span data-toggle="tooltip" data-placement="top" title="We ask for gender to help keep people and musicians searchable on Myspace.">?</span>
                                                                </label>
                                                                <select type="text" name="gender" placeholder="Please Select Gender">
                                                                    <option>Male</option>
                                                                    <option>Female</option>
                                                                </select>
                                                                <div class="Buttons">
                                                                    <button type="reset" class="reset">Cancel</button>
                                                                    <button type="submit" name='sub'  class="btn btn-primary" >Save Changes</button> 
                                                                        <!-- Modal -->
                                                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-body">
                                                                                    <p class="lead">Your settings successfully saved</p>
                                                                                    <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--End The Basic Information Collaps-->
                                            <!--Start The Email Collaps-->
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            Email
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        <form role="form">
                                                            <label>Current Email(<a href="#" data-toggle="modal" data-target="#myModal_1">unverified </a>)
                                                            <!-- Modal -->
                                                                <div class="modal fade" id="myModal_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_1">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <p class="lead">Would you like to send a verfication email?</p>
                                                                                <button type="button" class="btn btn-primary">No thanks</button>
                                                                                <button type="button" class="btn btn-primary">Yes please</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                            <input type="text" name="Email" required="required" value="Example@yahoo.com" placeholder="Please Enter Your Email">
                                                                <label>
                                                                    CONFIRM PASSWORD 
                                                                    <span data-toggle="tooltip" data-placement="top" title="You must confirm your password in order to change your email.">?</span>
                                                                </label>
                                                            <input type="text" name="FullName" placeholder="Please Enter Your User Name">
                                                        </form>
                                                        <div class="Buttons">
                                                            <button type="reset" class="reset">Cancel</button>
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_2">Save Changes</button> 
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="myModal_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_2">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <p class="lead">Your settings successfully saved</p><span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div><!--Start The Email Collaps-->
                                                    <!--Start The Email Collaps-->        
                                                    <form role="form" method="post">
                                                        <div class="panel panel-default"  hidden="">
                                                            <div class="panel-heading" role="tab" id="headingThree">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                        Email
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                <div class="panel-body">
                                                                    <!--<label>Current Email(<a href="#" data-toggle="modal" data-target="#myModal_1">unverified </a>)
                                                                    <!-- Modal -->
                                                                       <!-- <div class="modal fade" id="myModal_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_1">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-body">
                                                                                        <p class="lead">Would you like to send a verfication email?</p>
                                                                                            <button type="button" class="btn btn-primary">No thanks</button>
                                                                                            <button type="button" class="btn btn-primary">Yes please</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </label>-->
                                                                    <input type="text" name="email" required="required" value=<?=$data_member['email']?> placeholder="Please Enter Your Email">
                                                                    <label>
                                                                        CONFIRM PASSWORD 
                                                                        <span data-toggle="tooltip" data-placement="top" title="You must confirm your password in order to change your email.">?</span>
                                                                    </label>
                                                                    <input type="text" name="password" placeholder="Please Enter Your Password">
                                                                    <div class="Buttons">
                                                                        <button type="reset" class="reset">Cancel</button>
                                                                        <button type="submit" name="sub_email" class="btn btn-primary" >Save Changes</button> 
                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="myModal_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_2">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-body">
                                                                                        <p class="lead">Your settings successfully saved</p><span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--Start The Email Collaps-->
                                                    </form>
                                                    <!--Start The passwordl Collaps-->
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingFour">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                    Password
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <form role="form" method="post">
                                                                    <div class="col-xs-6">
                                                                        
                                                                            <label>CURRENT PASSWORD</label>
                                                                            <input type="password" name="oldpassword">
                                                                            <label>NEW PASSWORD</label>
                                                                            <input type="password" class="" name="password">
                                                                            <label>VERIFY NEW PASSWORD</label>
                                                                            <input type="password" name="repassword">
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <div class="Buttons_3">
                                                                            <button type="reset" class="reset">Cancel</button>
                                                                            <button type="submit" name="sub_pass" class="btn btn-primary" >Save Changes</button> 
                                                                            
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="myModal_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_3"></div>
                                                                        </div>
                                                                    </div>
                                                                        </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--Start The Email Collaps-->
                                                    <!--Start The interests Collaps-->
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingFour">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseF" aria-expanded="false" aria-controls="collapseFour">
                                                                    Picture
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseF" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingF">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <form role="form" method="post" enctype="multipart/form-data">
                                                                    <div class="col-xs-6">
                                                                        <img width="200px" height="200px" src=<?=$data_member['pict']?> >
                                                                        <label>Uploud Picture</label>
                                                                        <input type="file" name="image">
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <div class="Buttons_3">
                                                                            <button type="reset" class="reset">Cancel</button>
                                                                            <button type="submit" name="sub_pict" class="btn btn-primary" >Save Changes</button> 
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="myModal_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_3">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                        </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--Start The Email Collaps-->
                                                    <!--Start The interests Collaps-->
						 <!--Start The Change The Site Color Collaps-->
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingsix">
                                                          <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                                              Change The Site Color
                                                            </a>
                                                          </h4>
                                                        </div>
                                                   <form role="form" method="post">
                                                        <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                          <div class="panel-body">
                                                              <!-- Start Section Tool Box -->
                                                                <div class="colors">
                                                                    <select name="color"  style="background-color: #FFF" id="myselectopen" class="myselect">
                                                                        <option class="liColor" value="default" style="background-color: red;"  >RED</option>
                                                                        <option class="liColor" value="blue" style="background-color: blue;">BLUE</option>
                                                                        <option class="liColor" value="yellow" class="choose" style="background-color: yellow;">YELLOW</option>
                                                                        <option class="liColor" value="green" style="background-color: green;">GREEN</option>
                                                                        <option class="liColor" value="brown" style="background-color: brown;">BROWN</option>
                                                                        <!-- purple , pink , dark_yellow , dark_green , sky_blue , -->
                                                                        <option class="liColor" value="purple" style="background-color: purple;">PURPLE</option>
                                                                        <option class="liColor" value="pink" style="background-color: pink;">PINK</option>
                                                                        <option class="liColor" value="dark_yellow" style="background-color: darkorange;">DARK YELLOW</option>
                                                                        <option class="liColor" value="dark_green" style="background-color: darkgreen;">DARK GREEN</option>
                                                                        <option class="liColor" value="sky_blue" style="background-color: skyblue;">SKY BLUE</option>
                                                                    </select>
                                                                </div>
                                                          </div>
                                                          <!-- Start Section Color Box -->
                                                            <button type="reset" class="reset">Cancel</button>
                                                            <button type="submit" name="sub_color" class="btn btn-primary" >Save Changes</button> 
                                                        </div>
                                                    </form>
                                                        </div>
                                                 <!--Start The Change The Site Color Collaps-->
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingsix">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesixy" aria-expanded="false" aria-controls="collapsesixy">
                                                                    Change The Site language
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <form role="form" method="post">
                                                        <div id="collapsesixy" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                          <div class="panel-body">
                                                              <!-- Start Section Tool Box -->
                                                            <div class="colors">
                                                                    <select name="lang" style="width: 380px;height: 40px;text-align: center;border-radius: 4px 4px 4px 4px;margin: 10px;padding: 8px;">
                                                                        <option value="en">English</option>
                                                                        <option value="ar">عربى</option>
                                                                    </select>
                                                            </div>
                                                          </div>
                                                          <!-- Start Section Color Box -->
                                                            <button type="reset" class="reset">Cancel</button>
                                                            <button type="submit" name="sub_lang" class="btn btn-primary" >Save Changes</button> 
                                                         </div>
                                                        </form>
                                                        </div>
  						</div><!--Start The Change The Site Color Collaps-->							
                                    </div>
                                </div><!--End The Right Div The Collaps (The Selection Nav Par)-->
                            </div><!--End The Row-->
                          </div><!--End The Container Fluid-->
                        </section><!-- End Collaps Section-->
                    </div>