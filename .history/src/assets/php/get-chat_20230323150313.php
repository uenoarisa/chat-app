<?php
  session_start();
  if (isset($_SESSION['unique_id'])){
    include_once('config.php');
    $outgoing_id = $_POST['outgoing_id'];
    $incoming_id = $_POST['incoming_id'];
    $output='';

    $users = $pdo->query("SELECT FROM messages WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id}) OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC");
    // DESC・・・降順（大きいもの順）
    $row_cnt = $users->rowCount();
    if ()
    $users = $users->fetch(PDO::FETCH_ASSOC);


    


  }

?>