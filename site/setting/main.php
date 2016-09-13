	    <!-- Start Section Main -->
		<section class="main">
			<div class="container-fluid">
				<div class="row">
					<div class="sidebar col-md-3">
						<div class="info text-center">
							<img class="img-circle" src="<?=$data_member['pict']?>" alt="Profile Pic" />
						</div>
						<div class="content text-center">
                                                    <h4><?=$data_member['username']?></h4>
							<ul>
								<li class="active"><?=lang('Basic Info')?><i class="fa fa-angle-right"></i></li>
								<li><?=lang('Email Info')?><i class="fa fa-angle-right"></i></li>
								<li><?=lang('Password Info')?><i class="fa fa-angle-right"></i></li>
								<li><?=lang('Image & Color Info')?><i class="fa fa-angle-right"></i></li>
								<br><br><br><br>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-9">
						<!-- Start Section Site -->
						<section class="site text-center">
							<div class="container-fluid">
                                                            <?=$mess?>
                                <div class="basic-info">
                                    <h3><?=lang('Basic Info')?></h3>
                                    <form rol="form" method="post" class="form-group">
                                       <!-- <label>USER NAME</label>
                                        <input type="text" class="form-control" name="basic"/>-->
                                        <label><?=lang('fullName')?></label>
                                        <input type="text" name="fname" style="width:38%" class="form-control" value="<?=$data_member['fname']?>" placeholder="<?=getlang('fname')?>" name="basic"/>
                                        <input type="text" name="sname"  style="width:38%" class="form-control" value="<?=$data_member['sname']?>" placeholder="<?=getlang('sname')?>" name="basic"/>
                                        <label><?=lang('dateOfBirth')?></label>
                                        <input type="text" name="day"  class="form-control" name="basic" value="<?=$datee[0]?>"  placeholder="<?=getlang('da')?>"/>
                                        <input type="text" name="month"  class="form-control" name="basic" value="<?=$datee[1]?>" placeholder="<?=getlang('mon')?>"/>
                                        <input type="text" name="year"  class="form-control" name="basic" value="<?=$datee[2]?>" placeholder="<?=getlang('yea')?>"/>
                                        <label><?=lang('gen')?></label>
                                        <select class="form-control" name="gender">
                                            <option value="M" <?php if ($data_member['gender']=='M') echo 'Selected'; ?>><?=getlang('mal')?></option>
                                            <option value="F" <?php if ($data_member['gender']=='F') echo 'Selected'; ?>><?=getlang('fem')?></option>
                                        </select>
                                        <button type="submit" name="subBasic" class="btn btn-primary btn-lg"><?=lang('update')?></button>
                                    </form>
                                </div>
                                <div class="email-info">
                                    <h3><?=lang('Email Info')?></h3>
                                    <form rol="form" class="form-group" method="post">
                                        <label><?=getLang('uname')?></label>
                                        <input type="text" class="form-control" value="<?=$data_member['username']?>" name="username"/>
                                        <label><?=getLang('emai')?></label>
                                        <input type="email" class="form-control" value="<?=$data_member['email']?>" name="email"/>
                                        <label><?=getLang('iid')?></label>
                                        <input type="text" class="form-control" value="<?=$data_member['id']?>" name="id"/>
                                        <label><?=getLang('passw')?></label>
                                        <input type="password" class="form-control" name="password" />
                                        <button type="submit" name="subInfo" class="btn btn-primary btn-lg"><?=lang('update')?></button>
                                    </form>
                                </div>                     
                                <div class="password-info">
                                    <h3><?=lang('Password Info')?></h3>
                                    <form rol="form" method="post" class="form-group">
                                        <label><?=lang('oldpass')?></label>
                                        <input type="password" class="form-control" name="oldpassword"/>
                                        <label><?=lang('newpass')?></label>
                                        <input type="password" class="form-control" name="password"/>
                                        <label><?=lang('renewpass')?></label>
                                        <input type="password" class="form-control" name="repassword"/>
                                        <button name="subPass" type="submit" class="btn btn-primary btn-lg"><?=lang('update')?></button>
                                    </form>
                                </div>   
                                <div class="display-info">
                                    <h3><?=lang('Image & Color Info')?></h3>
                                    <form rol="form" method="post" enctype="multipart/form-data" class="form-group">
                                        <label><?=lang('uploadPic')?></label>
                                        <input type="file" class="form-control file-inp" name="image"/>
                                        <!--<label>Current Color</label>
                                        <ul class="list-unstyled">
                                            <li class="clicked" data-value="css/default_theme.css"></li>
                                        </ul>-->
                                        <div class="col-md-5">
                                        <label style="width: 20%;"><?=lang('chooseColor')?></label>
                                        <table class="tblColor" CELLSPACING="10" cellspadding="15" id="colortbl">
                                            <tr>
                                                <td style="background-color:skyblue "   onclick="choosecolor(this.id)" id="skyblue">
                                                    <input type="radio" name="choosecolor" class="colorcheck" value="sky_blue" 
                                                           <?php if ($data_member['color'] == 'sky_blue') echo 'checked' ?>>
                                                </td>
                                                <td style="background-color:red "       onclick="choosecolor(this.id)" id="red">
                                                    <input type="radio" name="choosecolor" class="colorcheck" value="default" 
                                                           <?php if ($data_member['color'] == 'red' || $data_member['color'] == 'default') echo 'checked' ?>>
                                                </td>
                                                <td style="background-color:pink "      onclick="choosecolor(this.id)" id="pink">
                                                    <input type="radio" name="choosecolor" class="colorcheck" value="pink" 
                                                           <?php if ($data_member['color'] == 'pink') echo 'checked' ?>>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:purple "    onclick="choosecolor(this.id)" id="purple">
                                                    <input type="radio" name="choosecolor" class="colorcheck" value="purple" 
                                                           <?php if ($data_member['color'] == 'purple') echo 'checked' ?>>
                                                </td>
                                                <td style="background-color:yellow "    onclick="choosecolor(this.id)" id="yellow">
                                                    <input type="radio" name="choosecolor" class="colorcheck" value="yellow" 
                                                           <?php if ($data_member['color'] == 'yellow') echo 'checked' ?>>
                                                </td>
                                                <td style="background-color:green "     onclick="choosecolor(this.id)" id="green">
                                                    <input type="radio" name="choosecolor" class="colorcheck" value="green" 
                                                           <?php if ($data_member['color'] == 'green') echo 'checked' ?>>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:darkgreen " onclick="choosecolor(this.id)" id="darkgreen">
                                                    <input type="radio" name="choosecolor" class="colorcheck" value="dark_green" 
                                                           <?php if ($data_member['color'] == 'dark_green') echo 'checked' ?>>
                                                </td>
                                                <td style="background-color:brown "     onclick="choosecolor(this.id)" id="brown">
                                                    <input type="radio" name="choosecolor" class="colorcheck" value="brown" 
                                                           <?php if ($data_member['color'] == 'brown') echo 'checked' ?>>
                                                </td>
                                                <td style="background-color:blue " onclick="choosecolor(this.id)" id="blue">
                                                    <input type="radio" name="choosecolor" class="colorcheck" value="blue"
                                                           <?php if ($data_member['color'] == 'blue') echo 'checked' ?>>
                                                </td>
                                            </tr>
                                        </table>
                                        </div>
                                        <div class="col-md-3">
                                            <label style="width: 20%;"><?=lang('chooseLang')?></label>
                                            <p>
                                            <div class="langchoose">English <input type="radio" value="en" name="chooselang" <?php if ($data_member['lang'] == 'en') { ?>checked<?php } ?> class="chooselang"></div> 
                                            <div class="langchoose">العربية <input type="radio" value="ar" name="chooselang" <?php if ($data_member['lang'] == 'ar') { ?>checked<?php } ?> class="chooselang"></div>
                                            </p>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label style="width: 20%;"><?=lang('chooseLang')?></label>
                                            <p>
                                            <div class="langchoose">Academic Card   <input type="checkbox"  name="AC" <?php if (array_search("AC", $privacy) !== FALSE) { ?>checked<?php } ?> class="chooselang priv"></div> 
                                            <div class="langchoose">Time Table      <input type="checkbox"  name="TT" <?php if (array_search("TT", $privacy) !== FALSE) { ?>checked<?php } ?> class="chooselang priv"></div>
                                            <div class="langchoose">Fav Posts       <input type="checkbox"  name="FP" <?php if (array_search("FP", $privacy) !== FALSE) { ?>checked<?php } ?> class="chooselang priv"></div>
                                            </p>
                                            
                                        </div>
                                        <div class="col-md-9">
                                            <button type="submit" name="subColor" class="btn btn-primary btn-lg"><?=lang('update')?></button>
                                        </div>
                                    </form>
                                </div>
                                                        </div>
						</section> <!-- End Section Site -->
					</div>
				</div> <!-- End Row -->
			</div> <!-- End Container Fluid -->
		</section> <!-- 144 End Section Main -->