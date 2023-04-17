<?php
  session_start();
  include_once('config.php');
  $users = $pdo->query("SELECT * FROM usersWHERE NOT unique_id = {$outgoing_id}");
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