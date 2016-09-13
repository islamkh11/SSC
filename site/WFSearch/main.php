   
        <div class="Logo_img_search">
        	<div class="container">
                <div class="row">
                	<div class="col-lg-9 col-lg-offset-3 col-xs-offset-2">
        	<img src="./resources/images/01.png" alt="..." class="img-responsive"> <h4>Science <span>Society</span></h4>
            		</div>
            	</div>
            </div>
        </div>
        <div class="Search">
        	<div class="container">
                <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                    <div class="input-group">
                        <form method="post" action="#">
                        <input type="text" name="searchKey" class="form-control" placeholder="Science Society Search" value="<?=$searchKey?>">
                        </form>
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 col-lg-offset-3-->
                </div><!-- /.row -->
            </div>
         </div>
         
         <div class="result">
        	<div class="container">
                <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                  	<div class="result_Box">
                            <h1 style="margin-left: 3%;">Results</h1>
<br>

<?php
if (isset($_POST['searchKey']) && $_POST['searchKey']!='')
{
  // if there are any assumptions, display them 
  if ( count($response->getAssumptions()) > 0 ) {
?>
    <h2>Assumptions:</h2>
    <ul>
<?php
      // assumptions come as a hash of type as key and array of assumptions as value
      foreach ( $response->getAssumptions() as $type => $assumptions ) {
?>
        <li><?php echo $type; ?>:<br>
          <ol>
<?php
          foreach ( $assumptions as $assumption ) {
?>
            <li><?php echo $assumption->name ." - ". $assumption->description;?>, to change search to this assumption <a href="simpleRequest.php?q=<?php echo urlencode($_REQUEST['q']);?>&assumption=<?php echo $assumption->input;?>">click here</a></li>
<?php
          }
?>
          </ol>
        </li>
<?php
      }
?>
      
    </ul>
<?php
  }
?>

<hr>

<?php
  // if there are any pods, display them
  if ( count($response->getPods()) > 0 ) {
?>
    <h2>Pods</h2>
    <table border=1 width="80%" align="center">
<?php
    foreach ( $response->getPods() as $pod ) {
?>
      <tr>
        <td>
          <h3><?php echo $pod->attributes['title']; ?></h3>
<?php
        // each pod can contain multiple sub pods but must have at least one
        foreach ( $pod->getSubpods() as $subpod ) {
          // if format is an image, the subpod will contain a WAImage object
?>
          <img src="<?php echo $subpod->image->attributes['src']; ?>">
          <hr>
<?php
        }
?>
          
        </td>
      </tr>
<?php
    }
?>
    </table>
<?php
  }
  
}
?>

                    	<!--<p>Input interpretation:</p>
                        <h5>World Wrestling Entertainment Inc  (WWE)</h5>
                        <hr>
                        <p>Latest trade:</p>
                        <h5>World Wrestling Entertainment Inc  (WWE)</h5>
                        <hr>
                        <p>Fundamentals and financials:</p>
                        <img src="images/help/MSP2751b88641af66igd8500003hb607cfb2hb2048.gif" class="img-responsive" alt="...">
                        <hr>
                        <p>Recent returns:</p>
                        <img src="images/help/MSP50222254a2ba3hbb02c100000fdg3c34a095eh16.gif" class="img-responsive" alt="...">
                        <hr>
                        <p>Price history:</p>
                        <img src="images/help/MSP38461dahb366bh6fb79600004b8ihi1hea6ab2cc.gif"  class="img-responsive" alt="...">
                        <hr>
                        <p>Performance comparisons:</p>
                        <img src="images/help/MSP1021b5165g8abib9hd600005c8afia6b2c9800a.gif"  class="img-responsive" alt="...">
                        <hr>
                        <p>Performance comparisons:</p>
                        <img src="images/help/MSP32331hc8hbgg0b3e950f000010fhed8g1age8f6b.gif"  class="img-responsive" alt="...">
                        <!--
                        <div class="container">
                        	<div class="row">
                                <div class="col-xs-4">
                                    <div class="Details_Box">
                                        <ul class="list-unstyled">
                                            <li>Market Up :</li>
                                            <hr>
                                            <li>Market Up :</li>
                                            <hr>
                                            <li>Market Up :</li>
                                            <hr>
                                            <li>Market Up :</li>
                                            <hr>
                                            <li>Market Up :</li>
                                            <hr>
                                            <li>Market Up :</li>
                                        </ul>
                                    </div>
                                    <div class="Details_Box_2">
                                        <ul class="list-unstyled">
                                            <li>9.198 billion</li>
                                            <hr>
                                            <li>9.198 billion</li>
                                            <hr>
                                            <li>9.198 billion</li>
                                            <hr>
                                            <li>9.198 billion</li>
                                            <hr>
                                            <li>9.198 billion</li>
                                            <hr>
                                            <li>9.198 billion</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                  </div><!-- /.col-lg-6 col-lg-offset-3 -->
                </div><!-- /.row -->
            </div>
         </div>