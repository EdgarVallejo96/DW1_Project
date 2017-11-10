<?php
    session_start();
    
    require_once 'controlador/config.php';
     
    // If session variable is not set it will redirect to login page
    if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
      header("location: logout.php");
      exit;
    }
?>