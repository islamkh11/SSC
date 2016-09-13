<!-- Start Section InfoGraph -->
        <section class="infograph text-center">
            <div class="container">
                <div class="row">
                    <?php 
                    foreach ($infograph as $key => $value) {
                        ?>
                    <div class="col-md-2 <?php if ($key==0) { ?> col-md-offset-1 <?php } ?>">
                        <div class="level">
                            <div id="tab<?=$key?>" class="<?=$value['class']?>">
                    <?php
                        if (isset($_GET['arabic']))
                        { ?><h3><?=$value['Atitle']?></h3><?php }
                        else { ?><h3><?=$value['title']?></h3><?php }
                        ?>
                                </div>
                        </div>
                    </div> 
                   <?php } ?>
                   <!-- <div class="col-md-2 col-md-offset-1">
                        <div class="level">
                            <div id="tab1" class="faculty">
                                <h3>FACULTY OF SCIENCE</h3>
                            </div>
                        </div>
                    </div>       
                    <div class="col-md-2">
                        <div class="level">
                            <div id="tab2" class="first-level">
                                <h3>FIRST LEVEL</h3>
                            </div>
                        </div>
                    </div>       
                    <div class="col-md-2">
                        <div class="level">
                            <div id="tab3" class="second-level">
                                <h3>SECOND LEVEL</h3>
                            </div>
                        </div>
                    </div>                  
                    <div class="col-md-2">
                        <div class="level">
                            <div id="tab4" class="third-level">
                                <h3>THIRD LEVEL</h3>
                            </div>
                        </div>
                    </div>                  
                    <div class="col-md-2">
                        <div class="level">
                            <div id="tab5" class="fourth-level">
                                <h3>FOURTH LEVEL</h3>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="contents">
                    <?php 
                   foreach ($infograph as $key => $value) {
                      ?>
                          <div id="tab<?=$key?>-content">
                              <h3><?php if (isset($_GET['arabic'])) echo $value['Acontent']; else echo $value['content']; ?></h3>
                          </div>
                          <?php } ?>
                    
                  <!--  <div id="tab2-content"><h3>this content is not avilable now</h3></div>
                    <div id="tab3-content"><h3>this content is not avilable now</h3></div>
                    <div id="tab4-content"><h3>this content is not avilable now</h3></div>
                    <div id="tab5-content"><h3>this content is not avilable now</h3></div>-->
                </div>
            </div> <!-- End Container -->
        </section> <!-- End Section InfoGraph -->
        