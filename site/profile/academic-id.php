<!-- Start Section Id -->
<section class="academic-id text-center">
			<div class="container">
				<div class="row">
					<div class="academic-card col-md-6">
                                            <h2><?=lang('hscon')?></h2>
						<div class="col-md-4"> 
                                                    
							<img src="<?=$data_member['pict']?>" alt="05"/>
						</div>
						<div class="info col-md-8">
							<label<?php  if ($data_member['lang']=='ar') echo ' style ="float:right; margin-right:40px"'; ?>><?=lang('name')?></label>  <p class="lead"><?=$data_member['fname'].' '.$data_member['sname']?></p> 
						<?php if (!empty($data_member['major']))
                                                    {   
                                                    if (getUserLang()=='ar') { ?>
                                                        <p class="lead"><?=$department[$data_member['major']][1]?>
                                                            <label style ="float:right; margin-right:40px" ><?=lang('major')?></label>
                                                        </p>
                                                    <?php }
                                                    else { ?>
                                                        <p class="lead"><?=$department[$data_member['major']][0]?>
                                                            <label><?=lang('major')?></label>
                                                        </p>
                                                    <?php }
                                                    }
                                                    if (!empty($data_member['minor']))
                                                        { 
                                                        if ($data_member['lang']=='ar') {
                                                        ?>
                                                            <label style ="float:right; margin-right:40px"><?=lang('minor')?></label>
                                                            <p class="lead"><?=$department[$data_member['minor']][1]?></p>
                                                 
                                                                                    <?php } else { ?> 
                                                        <label ><?=lang('minor')?></label>
                                                            <p class="lead"><?=$department[$data_member['minor']][0]?></p>
                                                                                    <?php }
                                                        }
                                                 ?>
							<label <?php  if ($data_member['lang']=='ar') echo ' style ="float:right; margin-right:40px"'; ?>><?=lang('acadimic_id')?></label><p class="lead"><?=$data_member['id']?></p>
						</div>
					</div>
					<div class="time-table col-md-6">
						<div id="myslide" class="carousel slide" data-ride="carousel">
							<!-- Wrapper for slides -->
							<div class="col-xs-11">
								<div class="carousel-inner" role="listbox">
                                                                    <?php for ($i=0;$i<count($data_news);$i++) { ?>
                                                                        <div class="item <?php if ($i==0)  echo  ' active'; ?> ">
										<p class="lead"><?=$data_news[$i]['news']?></p>
									</div>
                                                                    <?php } ?>
                                                               </div>
							</div>
							<!-- Indicators -->
							<div class="col-xs-1">
								<ol class="carousel-indicators">
                                                                    <?php for ($i=0;$i<count($data_news);$i++) { ?>
                                                                    <li data-target="#myslide" data-slide-to="<?=$i?>" <?php if ($i==0) echo ' class="active"'; ?> ></li>
                                                                   <?php  } ?>
                                                               </ol>
						    </div>
						</div>	
					</div>
				</div> <!-- End Row -->
			</div> <!-- End container -->
		</section> <!-- End Section Id -->
		
		