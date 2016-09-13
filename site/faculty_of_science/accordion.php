  <!-- Start Section Accordion -->
        <section class="accordion text-center">
            <div class="container-fluid">
                <h2><?=  getLang('branchH2')?></h2>
                <div class="contents">
                    <?php 
                    foreach ($branches as $key => $value) {
                        if (isset($_GET['arabic']))
                        {
                           ?>
                    <div class="item"><h3><?=$value['Atitle']?></h3></div>
                    <div class="info">
                        <p class="lead"><?=$value['Adesq']?></p>
                        <iframe src="<?=$value['src']?>" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div> 
                        <?php 
                        }
                        else {
                        ?>
                    <div class="item"><?=$value['title']?></div>
                    <div class="info">
                        <p class="lead"><?=$value['desq']?></p>
                        <iframe src="<?=$value['src']?>" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div> 
                        <?php   }
                    
                        } ?>
                    <div class="clear-fix"></div>
                </div>
            </div> <!-- End Conainer -->
        </section> <!-- End Section Accordion -->
