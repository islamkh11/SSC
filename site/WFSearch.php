<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//die;
session_start();
if ( (isset ( $_GET['stat']) && $_GET['stat'] == 'logout') || !isset($_SESSION['user']) ||  $_SESSION['user']=='' )
{ 
// not login or logout 
session_destroy ();
header('Location:index.php');
}

include './PHP_Binding_0_1/wa_wrapper/WolframAlphaEngine.php';
//include './PHP_Binding_0_1/';

$page='search';
$user_lang = 'en';
$searchKey ='';
if (isset($_POST['searchKey']) && $_POST['searchKey']!='')
{
    
    // product id
    $appID = 'V6PJ9J-HTVQ4X766J';

    $qArgs = array();
    $searchKey  = $_POST['searchKey'];

  // instantiate an engine object with your app id
  $engine = new WolframAlphaEngine( $appID );

  // we will construct a basic query to the api with the input 'pi'
  // only the bare minimum will be used
  $response = $engine->getResults( $_POST['searchKey'], $qArgs);

  // getResults will send back a WAResponse object
  // this object has a parsed version of the wolfram alpha response
  // as well as the raw xml ($response->rawXML) 
  
  // we can check if there was an error from the response object
  if ( $response->isError() ) {
      //echo $response->error.'yyy';
      echo $response->error->msg;
//      var_dump($response->error);
    
}

}

include './views/headerInner.php';

include './WFSearch/main.php';

include './views/footerInner.php';
 ?>