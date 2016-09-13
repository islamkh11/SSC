<script src="../resources/js2/ajax.js"></script>
<script>

   
</script>

<!-- Start Section Registration-->
        <section class="register text-center">
			<div class="dark-cover">
				<div class="container">
                                   
					<i class="fa fa-sign-in fa-5x"></i>
                                        <h2 class="h1"> <?=getLang('joinUs')?> </h2>
					<div class="row">
					
						<!-- Start Registration Form -->
                                                <form role="form" method="post" name='formregist'>
							
							<div class="col-md-6 col-xs-12 registration wow bounceInLeft" data-wow-duration="1s" data-wow-offset="200">
								<h3> <?=getLang('Registration')?> </h3>
                                                                <!-- here the div where check regist show message -->
                                                                 <div id='rigistmessages'></div>
								<div class="left"> 
									<input type="text" id="fname" class="form-control input-lg" name='fname' placeholder="<?=getLang('fname')?>">
								</div>							
								<div class="right">
									<input type="text" id="sname" class="form-control input-lg" name='sname' placeholder="<?=getLang('sname')?>">
								</div>
								<div class="clear-fix"></div>
								<div class="form-group">
									<input type="text" id="uname" class="form-control input-lg" name='username' placeholder="<?=getLang('uname')?>">
								</div>
								<div class="form-group">
									<input type="email" id="email" class="form-control input-lg" name='email' placeholder="<?=getLang('emai')?>">
								</div>
								<div class="left"> 
                                                                    
									<input type="password" id="password" class="form-control input-lg" name='password' placeholder="<?=getLang('passw')?>">
								</div>
								<div class="right">
									<input type="password" id="repassword" class="form-control input-lg" name='repassword' placeholder="<?=getLang('repassw')?>">
								</div>
								<div class="clear-fix"></div>
								<div class="form-group">
                                                                    <input  class="form-control input-lg" id="id" name="id" placeholder="<?=getLang('iid')?>">
								</div>
								<div class="form-group">
                                                                    <select class="<?=getLang('bran')?> js-example-placeholder-single" id="branch" name='branch' value="<?=getLang('bran')?>" title="<?=getLang('bran')?>" style="width: 100%">
										<option value=""></option>
										<option value="Natural Science"> Natural Science </option>
										<option value="Biological Science"> Biological Science </option>
										<option value="Geology Science"> Geology Science </option>
									</select>
								</div>
                                                               <div class="form-group">
									<div class="left">
                                                                            <select class="<?=getLang('majo')?> js-example-placeholder-single" id='major' title="<?=getLang('majo')?>"  style="width: 100%">
										<option value=""></option>
                                                                                
                                                                                <?php include './profile/department.php';
                                                                                  foreach ($department as $key => $value) { ?><option value="<?=$key?>" > <?=$value[0]?> </option><?php } ?>
                                                                                 </select>
									</div>
                                                                    
									<div class="right">
                                                                            <select class="<?=getLang('mino')?> js-example-placeholder-single" id='minor' title="<?=getLang('mino')?>" style="width: 100%">
											<option value=""></option>
                                                                 <?php  foreach ($department as $key => $value) { ?><option value="<?=$key?>" > <?=$value[0]?> </option><?php } ?>
										</select>
									</div>
								</div>
								<div class="clear-fix"></div>
								<div class="form-group">
                                                                    <select class="<?=getLang('da')?> js-example-placeholder-single" id='day' title="<?=getLang('da')?>">
										<option value=""></option>
                                                                                <?php 
                                                                                for ($i=1;$i<32;$i++)
                                                                                echo '<option value="'.$i.'">'.$i.'</option>';
                                                                                ?>
										
									</select>
									
                                                                    <select class="<?=getLang('mon')?> js-example-placeholder-single" id='month' title="<?=getLang('mon')?>">
										<option value=""></option>
										<option value="1">Jan</option>
										<option value="2">Feb</option>
										<option value="3">Mar</option>
										<option value="4">Apr</option>
										<option value="5">May</option>
										<option value="6">Jun</option>
										<option value="7">Jul</option>
										<option value="8">Aug</option>
										<option value="9">Sep</option>
										<option value="10">Oct</option>
										<option value="11">Nov</option>
										<option value="12">Dec</option>
									</select>
								
                                                                    <select class="<?=getLang('yea')?> js-example-placeholder-single" id='year' title="<?=getLang('yea')?>">
										<option value=""></option>
                                                                                <?php 
                                                                                for ($i=2015;$i>1959;$i--)
                                                                                echo '<option value="'.$i.'">'.$i.'</option>';
                                                                                ?>
										
									</select>
		
									<select class="<?=getLang('gend')?> js-example-placeholder-single" id='gen' title="<?=getLang('gend')?>">
										<option value=""></option>
                                                                                <option value="male" title="<?=$mal?>"> Male   </option>
                                                                                <option vale="female" title="<?=$fem?>"> Female </option>
									</select>
								</div>
								
								<div class="form-group">
                                                                    
                                                                    <button type="button" onclick="checkRegist()" class="btn btn-primary btn-lg btn-block"><?=getLang('signup')?></button>
								</div>
							</div>
                                                </form>
                                                <!--188-->