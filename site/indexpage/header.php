<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- IE Compatibility Meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" >
		<!-- First Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Science Society</title>
		<link rel="shortcut icon" href="./resources/images/00.png">
        <!-- css files -->
        <link rel="stylesheet" href="./resources/css/bootstrap.css" />
        <link rel="stylesheet" href="./resources/css/font-awesome.min.css" />
        <link rel="stylesheet" href="./resources/css/index.css" />
        <link rel="stylesheet" href="./resources/css/media.css" />
        <link rel="stylesheet" href="./resources/css/default_theme.css" />
        <link rel="stylesheet" href="./resources/css/hover.css" />
        <link rel='stylesheet' href='./resources/css/animate.css' />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" />
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Start Section Header -->			
		<section class="interface">
			<div class="overlay">
				<nav class="navbar navbar-default">
				    <div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournav" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand wow lightSpeedIn" data-wow-duration="2s" data-wow-offset="100" data-wow-delay="3s" href="index.php">Science <span> Society</span> </a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-right" id="ournav">
							
							<ul class="nav navbar-nav">
                                                        <li><a href="faculty_of_science.php"><?=getLang("FAOFSCI")?><span class="sr-only"></span></a></li>
                                                        <li><?php if (!isset($_GET['arabic'])) { ?>
                                                            <a  href="?arabic">عربى<span class="sr-only"></span></a></li>
                                                            <?php }  else { ?>
                                                            <a  href="?">English<span class="sr-only"></span></a></li>
                                                            <?php } ?>
							</ul>
						</div> <!-- End navbar-collapse -->
					</div> <!-- End container-fluid -->
				</nav> <!-- End Navbar -->
				
				
				<div class="intro text-center">
					<div class="container">
						<div class="logo wow zoomInDown" data-wow-duration="2.5s" data-wow-offset="100" data-wow-delay="3s">
							<div class="front">
								<a href="index.php"><img src="./resources/images/01.png" alt="logo" /></a>
							</div>
							<div class="back">
								<a href="index.php"><img src="./resources/images/02.png" alt="logo" /></a>
							</div>
						</div>
						<p class="lead"> <?=getLang("lead")?></p>
						<div class="sign">
							<a href="registration.php"><button class="btn btn-danger btn-lg"> <?=getLang("SL")?> </button></a>
						</div>
					</div>
				</div>
			</div> <!-- End Overlay -->
		</section> <!-- End Section Header -->