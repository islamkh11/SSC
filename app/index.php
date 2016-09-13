<?php
session_start();
if(!isset($_SESSION['admin']))
    header ( 'Location:./controllers/Login.php');
include '../includes/autoloader.php';
$host           = "localhost";
$user           = "root";
$password       = "";
$database_name  = "scc";
$dbobj  = new DBObj($host , $user , $password , $database_name);
$pages = array('site team','Contact','site Banner','site Opinion','site Prof','news','course','posts','comments','post Reported');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SCCApp</title>
        <link rel="shortcut icon" href="resources/images/00.png">

        <link rel="stylesheet" href="resources/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="resources/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="resources/css/style.css" type="text/css">

        <script src="resources/js/bootstrap.min.js"></script>
        <script src="resources/js/bootstrap.js"></script>

    </head>
    <body>
        <div class="container">
            <header>
                <img src="resources/images/logo.png" alt="logo">
                <h2> Welcome <?=$_SESSION['admin']?> <a href='?page=logout'>Logout</a> </h2>
            </header>
            <div class="clear"></div>
            <div class="contents">
                <aside>
                    <nav>
                        <a class="btn-danger active" href="index.php">Home Page</a>
                <!-- -about -contact -edu -exp -headline -main -opinion portfolio_video -site skill -->      
                        <a class="btn-danger" href="?page=Site">Site</a>
                        <a class="btn-danger" href="?page=patton">PATTON</a>
                        <?php
                        if ( isset($pages))
                            for ( $i=0;$i<count ($pages);$i++)
                            echo '<a class="btn-danger" href="?page='.$pages[$i].'">'.$pages[$i].'</a>';
                        ?>
                       
                        <a class="btn-danger" href="?page=Library">Library</a>
                    </nav>
                </aside>
                <section id="page" >
                    <?php
                    if (@$_GET['page']) {
                       $url = "controllers/main.php";
                       if ( $_GET['page'] == 'logout')
                           include './controllers/logout.php';
                      else if ( $_GET['page'] == 'Site')
                           include './controllers/Site.php';
                      else if ( $_GET['page'] == 'Library')
                      {     
                          echo '<style>#page{height:auto;</style>';
                          include './controllers/Library.php';
                      }
                      else if ( $_GET['page'] == 'patton')
                           include './controllers/patton.php';
                      else  if (is_file($url)) 
                                include $url; 
                      else { echo 'requested file is not found !'; }
                    } else { include './main.php'; }
                    ?>
                </section>
            </div>
            <div class="clear"></div>
            <footer>
                <p>Copyright Reserved - Islam Khamis</p>
            </footer>
        </div>
    </body>
</html>
<!--99-->