        <!-- Start Section Rate -->
        <section class="rate text-center">
            <div class="container">
                <h2 class="h1"> <?=getLang('rate')?> </h2>
                <div class="row">
                    <div class="col-md-6">
			<div class="inner">
                            <div class="rating">
                                <span class="rating-num"><?=  $ratee = substr($avirage, 0, 4)?></span>
                                <div class="rating-stars">
                                <?php
                                for ($i=1;$i<6;$i++)
                                    {
                                    echo '<span><button onclick="add_rate('.$i.')"><i  class="fa ';
                                    if ($ratee < $i) echo ' active '; 
                                    echo  'fa-star"></button></i></span>';
                                    }
                                ?>
                                </div>
                                <div class="rating-users">
                                    <i class="fa fa-user fa-2x"></i> <?=count($rate)?> <?=getLang('total')?>
                                </div>
                                <div id='new_rate'></div>
                            </div>
			</div>
                    </div>
                    <div class="col-md-6">
                        <div id="carousel_rate" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                if (count($opinion)>0)
                                {
                                  for ($i=0;$i<count($opinion);$i++)
                                      {
                                        echo '<div class="item';
                                        if ($i==0)  echo ' active';
                                        echo '"><p class="lead">'.$opinion[$i]['desq'].'</p>
                                              <button>'.$opinion[$i]['name'].'</button></div>';
                                        }
                                 }
                                 ?>
                              </div>
                              <ol class="carousel-indicators">
                              <?php
                              if (count ($opinion)>0)
                                 {
                                  for ($i=0;$i<count($opinion);$i++)
                                     {
                                      echo '<li data-target="#carousel_rate" data-slide-to="'.$i.'" ';
                                      if ($i==0)  echo ' class="active"';
                                      echo '></li>';
                                     }
                                  }
                               ?>
                               </ol>
                          </div>           
                     </div>
                </div> <!-- End Row -->
            </div> <!-- End Container -->
        </section> <!-- End Section Rate 134 -->