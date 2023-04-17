<?php
  session_start();
  include_once('config.php');
  $outgoing_id = $_SESSION['unique_id'];
  $users = $pdo->query("SELECT * FROM users  WHERE NOT email = ");
  $row_cnt = $users->rowCount();
  $users = $users->fetchAll(PDO::FETCH_ASSOC);

  $output = '';


  if ($row_cnt == 1){
    $output .= 'No users available to chat';
  }elseif($row_cnt > 0){
    include_once('data.php');
  }
  
    echo $output;
?>