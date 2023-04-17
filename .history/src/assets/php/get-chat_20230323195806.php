<?php
  session_start();
  if (isset($_SESSION['unique_id'])){
    include_once('config.php');
    $outgoing_id = $_POST['outgoing_id'];
    $incoming_id = $_POST['incoming_id'];
    $output='';

    $msgs = $pdo->query("SELECT FROM messages WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id}) OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC");
    // DESC・・・降順（大きいもの順）
    $row_cnt = $msgs->rowCount();
    if ($row_cnt>0){
      $msgs = $msgs->fetch(PDO::FETCH_ASSOC);
      foreach ($msgs as $msg){
        if ($msgs['outgoing_msg_id'] === $outgoing_id){
          $output .= '<div class="chat outgoing">
          <div class="details">
            <p>'</p>
          </div>
        </div>';
        }else{
          // he is a msg receiver
          $output .= '<div class="chat incoming">
          <div class="details">
            <p>Lorem iseeeeeeeeee</p>
          </div>
        </div>';
        }
        
      }
    }
  }
?>