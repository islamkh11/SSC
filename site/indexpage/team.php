			<!-- Start Section Our Team -->
        <section class="our_team text-center">
            <div class="team">
                <div class="container">
                    
                        <?php
                        echo '<h2 class="h1">'.getLang('team').'</h2>';
                        echo '<div class="row">';
                                for ($i=0;$i<$N;$i++)
                                {
                                    if ($i%3 == 0)
                                    echo '</div><div class="row">';
                                    
                                    
                                    if (($N-$i) > 2)
                                    {
                                        echo '<div class="col-md-4">'
                                    . '<div class="person wow ';
                                    if ($i%3==0) echo 'bounceInLeft';
                                    if ($i%3==1) echo 'bounceInDown';
                                    if ($i%3==2) echo 'bounceInRight';
                                    }
                                     else 
                                    {
                                         echo '<div class="col-md-6">'
                                    . '<div class="person wow ';
                                    if ($i%2==0) echo 'bounceInRight';
                                    if ($i%2==1) echo 'bounceInLeft';
                                    }
                                   echo  '" data-wow-duration="1s" data-wow-offset="200">';
                                   if (isset ($_GET['arabic']))
                                       echo '<img src="'.$table["site-team"][$i]["pict"].'" width="200" height="200" alt="'.$table["site-team"][$i]["Aname"].'" />
                                    <h3>'.$table["site-team"][$i]["Aname"].'</h3>
                                    <p>'.$table["site-team"][$i]["Awork"].'</p>';
                                       
                                    else    
                                    echo '<img src="'.$table["site-team"][$i]["pict"].'" width="200" height="200" alt="Mohamed Atef" />
                                    <h3>'.$table["site-team"][$i]["name"].'</h3>
                                    <p>'.$table["site-team"][$i]["work"].'</p>';
                                   echo '
                                <a href=//'.$table["site-team"][$i]["google"].'><i class="fa fa-google-plus fa-lg"></i></a>
				<a href=//'.$table["site-team"][$i]["facebook"].'><i class="fa fa-facebook fa-lg"></i></a>
                                <a href=//'.$table["site-team"][$i]["twitter"].'><i class="fa fa-twitter fa-lg"></i></a>
                                </div></div>';
                                    
                                    
                                }                        
                                echo '</div>';

                                ?>
              </div>
            </div>
        </section> <!-- End 114 Section Our Team -->