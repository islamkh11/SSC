<!DOCTYPE html>
<Html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- IE Compatibility Meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" >
		<!-- First Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Science Society</title>
		<link rel="shortcut icon" href="./resources/images/00.png">
        <!-- css files -->    
        <link rel="stylesheet" href="<?=$cssDir?>mystyle.css" />
        <link rel="stylesheet" href="<?=$cssDir?>bootstrap.css" />
        <link rel="stylesheet" href="<?=$cssDir?>select2.css" />
        <link rel="stylesheet" href="<?=$cssDir?>font-awesome.min.css" />
        <link rel="stylesheet" href="<?=$cssDir?>media.css" />
         <?php  if ($page=='profile') { ?><link rel="stylesheet" href="<?=$cssDir?>profile.css" /><?php }
                if ($page=='courses' || $page=='patton' || $page=='election' || $page=='home' ) { ?>
                <link rel="stylesheet" href="<?=$cssDir?>courses.css" /> <?php }
                if ($page=='home') {?><link rel="stylesheet" href="<?=$cssDir?>home.css" /><?php }
                if ($page=='search') {?><link rel="stylesheet" href="<?=$cssDir?>search.css" /><?php }
                if ($page=='questions') {?><link rel="stylesheet" href="<?=$cssDir?>questions.css" /><?php }
                if ($page=='help') {?><link rel="stylesheet" href="<?=$cssDir?>help.css" /><?php }
                if ($page=='setting') {?>
                    <link rel="stylesheet" href="<?=$cssDir?>advsetting.css" />
                    <link rel="stylesheet" href="<?=$cssDir?>inverse-navbar.css" />
                    <link rel="stylesheet" href="<?=$cssDir?>advfooter.css" /><?php }
         ?>
        <link rel="stylesheet" href="<?=$cssDir?><?=getColor()?>_theme.css" />
        <link rel="stylesheet" href="<?=$cssDir?>hover.css" />
        <link rel='stylesheet' href='<?=$cssDir?>animate.css' />
        <link rel='stylesheet' href='<?=$cssDir?>footer.css' />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700">
        
       
       <!-- -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        		
				
		<!-- Start Section Header -->			
		<section class="interface">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournav" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand wow lightSpeedIn" data-wow-duration="2s" data-wow-offset="100"  href="./index.php">Science <span> Society</span> </a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="ournav">
						
						<ul class="nav navbar-nav">
                                                        <li <?php if ($page=='help') { ?>class="active"<?php } ?> ><a href="help.php"><?=lang('helpHL')?></a></li>
                                                        <li <?php if ($page=='questions') { ?>class="active"<?php } ?> ><a href="question.php"><?=lang('questionHL')?></a></li>
                                                        <li <?php if ($page=='patton') { ?>class="active"<?php } ?> ><a href="patton.php"><?=lang('pattonHL')?></a></li>
                           <?php if (getElection() == 'T') { ?><li <?php if ($page=='election') { ?>class="active"<?php } ?> ><a href="canadiat.php"><?=lang('electionHL')?></a></li><?php } ?>
                                                        <li <?php if ($page=='home') { ?>class="active"<?php } ?> ><a href="home.php"><?=lang('homeHL')?></a></li>
							<li <?php if ($page=='courses') { ?>class="active"<?php } ?> ><a href="courses.php"><?=lang('coursesHL')?></a></li>
                                                        <li <?php if ($page=='profile') { ?>class="active"<?php } ?> ><a href="profile.php"><?=lang('profileHL')?></a></li>
							
						</ul>
					</div><!-- End navbar-collapse -->
				</div><!-- End container fluid -->
			</nav> <!--End Navbar -->
 		</section> <!-- End Section Header 74 --> 