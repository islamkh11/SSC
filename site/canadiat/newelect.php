<!-- Start Section Our Courses -->
<section class="our-courses text-center">
    <div class="container-fluid">
        <div id="main-carousel" class="carousel slide courses" data-ride="carousel">
            <div class="controls">
                <div class="row">
                    <div class="col-xs-1">
                        <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        </a>
                    </div>
                    <div class="col-xs-10">
                    <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#main-carousel" data-slide-to="0" class='active'>
                                <p><?=lang('headCanid')?></p>
                            </li>
                        </ul>
                        <?php if (isset($errorMsg)) echo $errorMsg; ?>
                    </div>
                    <div class="col-xs-1">
                        <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
<!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <section class="courses-contents">
                        <div class="row"><!-- add new post -->
                            <div class="col-md-4"></div> 
                            <div class="col-md-4">
                                <div class="status">  
                                    <h2 class="hsCanidat" ><?=  lang('h2con')?></h2> 
                                    <form class="form-group" method="post">
                                    <?php for ($i=0;$i<9;$i++) { ?> <textarea name="post<?=$i?>" class="form-control input-lg" style="margin-bottom:10px;" placeholder="<?=lang('postcon',$i)?>" ></textarea> <?php } ?>
                                        <input type="submit" name="sub_post" value = "Submit"  class="btn btn-success post" title="Post">
                                    </form>
                                    <div class="clear-fix"></div>
                                </div>
                            </div>                                                
                        </div>
                </div>
            </div> 
<!-- End Wrapper for slides -->
        </div>
    </div> <!-- End container -->
</section> <!-- End Section Our Courses 189 -->                