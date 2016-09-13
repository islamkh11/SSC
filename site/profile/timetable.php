<!-- Start Section Timetable -->
		<section class="timetable text-center">
			<div class="overlay">
				<div class="container">
					<i class="fa fa-clock-o fa-4x"></i>
                                        <h2 class="h1"><?=lang('time table')?></h2>
					<div class="times">
						<div class="row">
							<div class="col-xs-2">
								<h3>#</h3>
							</div>
							<div class="col-xs-2">
								<h3>8 - 10</h3>
							</div>
							<div class="col-xs-2">
								<h3>10 - 12</h3>
							</div>
							<div class="col-xs-2">
								<h3>12 - 2</h3>
							</div>
							<div class="col-xs-2">
								<h3>2 - 4</h3>
							</div>
							<div class="col-xs-2">
								<h3>4 - 6</h3>
							</div>
                                                    <div class="col-xs-2">
								<h3>6 - 8</h3>
							</div>
						</div> <!-- End Row -->
                                                <?php
                  $daysarr =['Sa'=>'Saturday','Su'=>'Sunday','Mo'=>'Monday',
                             'Tu'=>'Tuesday','We'=>'Wednesday','Th'=>'Thursday'];
                  foreach ($time_table as $key => $value) {
                           echo '<div class="row">';
                            if ($key != '') { ?>
                                            <div class="col-xs-2"><h3><?=Lang($key)?></h3></div>
                           <?php foreach ($value as $key0 => $value0) { ?>
                                            <div class="col-xs-2">
                                                <h4><?=$value0[0]?></h4> 
                                                <h4 class="place"><?=$value0[1]?></h4> 
                                            </div>        
                                                                <?php }
                                             }                             
                                                         echo '</div>';                                 
                                                           } ?>
                                        </div>
				</div> <!-- End container -->
			</div> <!-- End Overlay -->
		</section> <!-- 135 Start Section Timetable -->
		