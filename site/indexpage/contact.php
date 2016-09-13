<!-- Start Section Contact Us-->
		<section class="contact-us text-center wow fadeIn" data-wow-duration="1s" data-wow-offset="200">
			<div class="overlay">
				<div class="container">
					<i class="fa fa-headphones fa-5x"></i>
                                        <h2 class="h1"><?=getLang('contactH1')?></h2>
					<div id="message_contact"></div>
					<!-- Start Contact Form -->
                                        <form role="form" method="post">
						<div class="form-group form-inline">
							<input type="text"  name='username' id ="username"
                                                       class="form-control input-lg wow bounceInLeft" data-wow-duration="1s" 
                                                       data-wow-offset="200" placeholder="<?=getLang('placeUser')?>">
							<input type="text" name='email' class="form-control input-lg wow bounceInRight"
                                                               id ="email"
                                                               data-wow-duration="1s" data-wow-offset="200" placeholder="<?=getLang('placeEmail')?>">
						</div>
						<div>
							<textarea name='message' id="content" class="form-control input-lg wow bounceInUp" data-wow-duration="1s" data-wow-offset="200"" placeholder="<?=getLang('message')?>"></textarea>
						</div>
                                            <input type="button" onclick="addContact ( username.value , email.value , content.value )" class="btn btn-danger btn-lg" value="<?=getLang('sub')?>" name="sub">
					</form> <!-- End Contact Form -->					
				</div> <!-- End Container -->
			</div>
		</section> <!-- End Section Contact Us -->
	