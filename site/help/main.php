<!--Start The Collapse Div-->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel-group-box"><!--start panel-group-box div-->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <?php
                if ($help_data != FALSE)
                    for ($i=0;$i<count ($help_data);$i++) { ?>
                        <div class="panel panel-default"><!-- Collapse one-->
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$i?>" aria-expanded="false" aria-controls="collapse<?=$i?>">
                                        <?=$help_data[$i]['que']?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse<?=$i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?=$i?>">
                                <div class="panel-body">
                                    <?=$help_data[$i]['ans']?>
                                </div>
                            </div>
                        </div>   <?php } ?>
                                            <!-- End Collapse one-->
                </div>
            </div> <!--End panel-group-box div-->
        </div>
    </div>
</div>
        <!--End The Collapse Div 35-->