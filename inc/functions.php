<?php
  function ForceLogin(){
    if(isset($_SESSION['user_id'])){
      //the user is allowed here
    }else{
      //the user is not allowed so redirect
      header("Location: /demo_login/PHP-Login-Demo/login.php");
      exit;
    }
  }

  function ForceDashboard(){
    if(isset($_SESSION['user_id'])){
      header("Location: /demo_login/PHP-Login-Demo/dashboard.php");
    }else{

      exit;
    }
  }

?>
