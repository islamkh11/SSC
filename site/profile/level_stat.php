<!-- Start Section Student  Data -->
		<section class="term-data text-center" >
                    <div class="container wow zoomIn" data-wow-duration="1s" data-wow-offset="250"  >
				<i class="fa fa-thumb-tack fa-3x"></i>
                <h2> <?=Lang('regi')?> </h2>
                <?=$mess?>
                <div class="row">
                    <form method="post" >
					<div class="student-info">
						<div class="item col-md-12">
							<h4> <?=Lang('depar')?> </h3>
							<select name='branch'  placeholder ="Branch" class="js-example-placeholder-single" style="width: 100%">
                                                                <option value=""></option>
								<option value="Natural Science" > <?=Lang('natu')?> </option>
								<option value="Biological Science"> <?=Lang('biol')?> </option>
								<option value="Geology Science"> <?=Lang('geol')?> </option>
							</select>
						</div>
                                            
						<div class="item col-md-6">
							<h4> <?=Lang('majo')?> </h3>
							<select name="major" class="js-example-placeholder-single" style="width: 100%">
								<option value=""></option>
								<?php 
                                                                foreach ($department as $key => $value) {
                                                                  $depTitle =  (getUserLang()=='ar') ? $value[1] : $value[0] ; 
                                                                  echo '<option value="'.$key.'"> '.$depTitle.' </option>';
                                                                  }
                                                                ?>
                                                               
							</select>
						</div>
						<div class="item  col-md-6">
							<h4> <?=Lang('mino')?> </h3>
							<select name="minor" class="js-example-placeholder-single" style="width: 100%">
								<option value=""></option>
                                                                <?php 
                                                                foreach ($department as $key => $value) {
                                                                   $depTitle =  (getUserLang()=='ar') ? $value[1] : $value[0] ; 
                                                                   echo '<option value="'.$key.'"> '.$depTitle.' </option>';
                                                                  }
                                                                ?>
                                                           
							</select>
						</div>
						<input value="Submit" type="submit" name="subLevel" class="btn btn-danger btn-lg">
                    </form>
					</div>
                </div> <!-- End row -->
            </div> <!-- End Container -->
        </section> <!-- End Section Student Data -->
		