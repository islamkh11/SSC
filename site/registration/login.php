<?php

if ( !isset($_GET['arabic']) )
{
    $h3 = 'Login';
    $log='ID or Username or Email';
    $pass='Password';
    $sub='Login';
}
else{
    $h3 = 'تسجيل الدخول';
    $log='الرقم الجامعى او اسم المستخدم او البريد الالكترونى';
    $pass='كلمة السر';
    $sub='تسجيل الدخول';
    
} 
    
?>

<div class="col-md-6 col-xs-12 login wow bounceInRight" data-wow-duration="1s" data-wow-offset="200">
								<h3><?=$h3?></h3>
                                                               
                                                                <div id='loginmessages'><?=$mess?></div>
                                                                <form name='formlogin' method="post" >
								<div class="form-group">
									<input  class="form-control input-lg" name='log' placeholder="<?=$log?>">
								</div>
								<div class="form-group">
									<input type="password" name='password' class="form-control input-lg" placeholder="<?=$pass?>">
								</div>
								<div class="clear-fix"></div>
								<!--<div class="mhn-ui-wrap">
									<div class="mhn-ui-page page-lock">
                                                                            
										<div class="mhn-lock-wrap">
                                                                                    <div class="mhn-lock-title" pattern="234"  data-title="Draw a patternw to unlock"></div>
                                                                                        <div class="mhn-lock" > </div>
										</div>
                                                                            
									</div>
								</div>-->
								<div class="clear-fix"></div>
                                                                <button type="submit" name="sub" value="sub"  class="btn btn-success btn-lg btn-block"><?=$sub?></button>
							</div>
						</form> <!-- End Registration Form -->
					</div> <!-- End row -->
				</div> <!-- End Container -->
			</div>
        </section> <!-- End Section Registration -->
		