<?php
  session_start();
  if (isset($_SESSION['unique_id'])){
    include_once('config.php');
    $outgoing_id = $_POST['outgoing']
  }else{
    header("../../login.php");
  }


?>