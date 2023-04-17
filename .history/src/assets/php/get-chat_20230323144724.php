<?php
  session_start();
  if (isset($_SESSION['unique_id'])){
    include_once('config.php');
    $outgoing_id = $_POST['outgoing_id'];
    $incoming_id = $_POST['incoming_id'];
    $output='';

    $users = $pdo->query("SELECT * FROM users WHERE unique_id = {$user_id}");
          $row_cnt = $users->rowCount();

    $users = $users->fetch(PDO::FETCH_ASSOC);


    


  }

?>