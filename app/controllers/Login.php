<?php
session_start();
if (isset($_SESSION['admin']) && !empty($_SESSION['admin']) )
    header('Location:../');
    // Login
   if (isset($_POST['submit']) AND $_POST['submit'] == "Login") {
       try {
            include '../../includes/autoloader.php';
            $host           = "localhost";
            $user           = "root";
            $password       = "";
            $database_name  = "scc";
            $dbobj  = new DBObj($host , $user , $password , $database_name);
            $valid  = new Validator();            
            $rules  = array("username"  =>  "checkStings",
                            "password"  =>  "checkNames");
            $valid->validate($_POST, $rules);
            $username   = $_POST['username'];
            $password   = md5($_POST['password']);
            $table      = 'admin';
            $sql        = "SELECT * FROM `$table` WHERE `admin` ='".$username."' && `password`='".$password."'";
            $login      = $dbobj->Data_fetch($sql);
            if ($login == NULL)
                throw new Exception ('Invalid Login Info <a href="../">Refresh</a>');
            $_SESSION['admin'] = $username;
            header('Location:../');
           } catch (Exception $exc) {
                    echo $exc->getMessage();
                    die();
         }
} else { include '../veiws/Login.php'; }
// 48
?>
