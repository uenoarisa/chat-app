<?php
  session_start();
  if (isset($_SESSION['unique_id'])){
    include_once('config.php');
    $outgoing_id = $_POST['outgoing_id'];
    $incoming_id = $_POST['incoming_id'];
    $message = $_POST['
    message'];
    if (!empty($message)) {
      $msgs = $pdo -> query("INSERT INTO message (incoming_msg_id,outgoing_msg_id,msg) values ('{$incoming_id}',)")

    }
  }else{
    header("../../login.php");
  }


?>