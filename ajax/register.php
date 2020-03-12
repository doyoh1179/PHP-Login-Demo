<?php
  //Allow the config
  define('__CONFIG__',true);
  //Require the config
  require_once "../inc/config.php";

  if($_SERVER['REQUEST_METHOD']=='POST'){
    //return JSON format
    header('Content-Type: application/json');

    $return=[];
    //Make sure the user does not exist

    //Make sure the user ca be added and is added

    //Return the proper information back to JavaScript to redirect us
    $return['redirect'] = '/demo_login/PHP-Login-Demo/dashboard.php;
    echo json_encode($return, JSON_PRETTY_PRINT); exit;
  }else{
    exit('test');
  }

?>
