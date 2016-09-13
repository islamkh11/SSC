<?php
if ( isset($newdata['branch']) && !empty($newdata['branch']) )
    $section = (getUserLang() == 'ar') ? $sec[$newdata['branch']] : $newdata['branch'] ;
?>
<!--Start Section Materials -->
<section class="term-data text-center">
      <div class="container wow zoomIn" data-wow-duration="1s" data-wow-offset="250" >
	    <section class="materials text-center">
		<div class="container">
                     <h2> <?=lang('choo')?> </h2>
                     <form method="post" >
                         <div class="choose wow bounceInDown" data-wow-duration="1s" data-wow-offset="200">
                              <?php if ( isset($newdata['branch']) && !empty($newdata['branch']) ) { ?>
                                    <h3 class="h2"> <?=lang('firl')?> </h3>
                                    <div class="choose wow bounceInDown" data-wow-duration="1s" data-wow-offset="200">
                                         <h4> <?=$section?> </h4>
                                         <select name="flevel[]" class="js-example-basic-multiple" multiple="multiple" style="width: 100%">
                                         <?php foreach ($first_matirial[$newdata['branch']] as $key => $value) {
                                                        $matval = ( getUserLang() == 'ar') ? $value[1] : $value[0] ;
                                                        ?><option value="<?=$key?>"> <?=$matval?> </option><?php } ?>
                                        </select>
                                    </div>
                                    <?php } ?>
                                    <div class="row">
                                    <?php
                                   // select every matiral in same department
                                      // set the dep of choosen major
                                     foreach ($department as $key => $value) {
                                                  if ($newdata['major'] == $key)
                                                      $maj_dep = (getUserLang () == 'ar') ? $value['1'] : $value['2'] ; 
                                               }
                                         if (isset($maj_dep) ) { ?>
                                        <div class="col-md-6 wow bounceInLeft" data-wow-duration="1s" data-wow-offset="200">
						<h3 class="h2"> <?=lang('majo')?> </h3> 
						<div class="major-register">
						     <h3> <?=$maj_dep?> <div style="display: inline-block;"><?=lang('depar')?></div>  </h3>
                                                     <div class="choose">
                                                        <h4> <?=$newdata['major']?> </h4>
                                                        <select name = "<?=$newdata['major']?>[]" class="js-example-basic-multiple" multiple="multiple" style="width: 100%">
                                                    <?php foreach ($matirial_major[$newdata['major']] as $key => $value) { ?>
                                                            <option value="<?=$value[0]?>"><?=$value[1]?></option>
                                                    <?php }
                                                        } ?>
                                                        </select>
                                                     </div>
                                                </div>
                                        </div>
                                 <?php foreach ($department as $key => $value) {
                                                 if ($newdata['minor'] == $key)
                                                     $min_dep = (getUserLang () == 'ar') ? $value['1'] : $value['2'] ; 
                                                 }
                                   if (isset($min_dep))
                                   {
                                       ?>
                                        	<div class="col-md-6 wow bounceInRight" data-wow-duration="1s" data-wow-offset="200">
                                                    <h3 class="h2"> <?=lang('mino')?> </h3>
                                                    <div class="minor-register">
                                                        <h3> <?=$min_dep.'<div style="display: inline-block;"> '.lang('depar').' </div>'?></h3>
                                                        <div class="choose">
                                                            <h4> <?=$newdata['minor']?> </h4>
                                                            <select name="<?=$newdata['minor']?>[]" class="js-example-basic-multiple" multiple="multiple" style="width: 100%">
                                                        <?php foreach ($matirial_minor[$newdata['minor']] as $key => $value) {
                                                            ?><option value="<?=$value[0]?>"><?=$value[1]?></option><?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                           <?php   }    ?>
				</div> <!-- End Row -->
				<input value="Submit" type="submit" name="sub_mat" class="btn btn-success btn-lg">
                           </div> <!-- End container -->
                     </form>
            </section> <!-- 93 Start Section Materials -->			
      </div>              
</section>              