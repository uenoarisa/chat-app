<?php
  session_start();
  if (isset($_SESSION['unique_id'])){
    include_once('config.php');
    $outgoing_id = $_POST['outgoing_id']
  }else{
    header("../../login.php");
  }


?>