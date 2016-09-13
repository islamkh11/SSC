<!-- Start Section Statistics -->
        <section class="statistics text-center">
            <div class="overlay">
                <div class="container">
                    <h2 class="h1"> <?=getLang('StatH1')?> </h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats">
                                <i class="fa fa-users fa-5x"></i>
                                <p><?=$num_of_memebr?></p>
                                <span><?=getLang('SUsers')?></span>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="stats">
                                <i class="fa fa-comments fa-5x"></i>
                                <p><?=$num_of_comment?></p>
                                <span><?=getLang('PComm')?></span>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="stats">
                                <i class="fa fa-wifi fa-5x"></i>
                                <p><?=$num_of_login?></p>
                                <span><?=getLang('Online')?></span>
                            </div>
                        </div>
                    </div> <!-- End Row -->
                </div> <!-- End Container -->
            </div>
        </section> <!-- End Section Statistics -->