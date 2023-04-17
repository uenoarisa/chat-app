<?php
  session_start();
  include_once('config.php');
  $users = $pdo->query("SELECT * FROM users");
  $row_cnt = $users->rowCount();
  $users = $users->fetchAll(PDO::FETCH_ASSOC);

  $output = '';


  if ($row_cnt == 1){
    $output .= 'No users available to chat';
  }elseif($row_cnt > 0){
    in

  }
  
    echo $output;
?>