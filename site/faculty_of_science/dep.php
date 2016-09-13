		
		
		<!-- Start Section Departments -->
		<section class="departments text-center">
			<!-- Start Carousel -->
			<div id="dep_slider" class="carousel slide " data-ride="carousel">
				<ol class="carousel-indicators">
                                    <?php
                                    for ($i=0;$i<count($site['site-dep-banner']);$i++)
                                    {
                                       
                                    echo '<li data-target="#dep_slider" data-slide-to="'.$i.'"' ;
                                       if ($i==0)
                                        echo'class="active"';
                                    echo'></li>';
                                    }
                                    ?>
					
				</ol>
			  
				<div class="carousel-inner">
                                 <?php
                                    for ($i=0;$i<count($site['site-dep-banner']);$i++)
                                    {  
                                        echo '<div class="item';
                                        if ($i==0) echo ' active';
                                        echo '"> <img src="'.$site['site-dep-banner'][$i]['banner'].'" alt="Pic 1">
						<div class="carousel-caption">
							<h2 class="h1">'.$site['site-dep-banner'][$i]['title'].'</h2>
						    <p class="lead">'.$site['site-dep-banner'][$i]['desq'].'</p>
						</div>';
                                        
                                         echo '</div>';
                                    }
                                    
                                ?>
                                
                                </div>
			  
				<a class="left carousel-control" href="#dep_slider" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#dep_slider" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
				
			</div> <!-- End Carousel -->
		</section> <!-- End Section Departments -->
