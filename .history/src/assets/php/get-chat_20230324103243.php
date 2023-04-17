<?php
  session_start();
  if (isset($_SESSION['unique_id'])){
    include_once('config.php');
    $outgoing_id = $_SESSION['unique_id'];
    $incoming_id = $_POST['incoming_id'];
    $output='';

    $msgs = $pdo->query("SELECT * FROM messages as m
    LEFT JOIN users as u ON u.unique_id = m.incoming_id
    WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id}) OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id");
    // DESC・・・降順（大きいもの順)
    $row_cnt = $msgs->rowCount();
    if ($row_cnt>0){
      $msgs = $msgs->fetchAll(PDO::FETCH_ASSOC);
      foreach ($msgs as $msg){
        if ($msg['outgoing_msg_id'] == $outgoing_id){
          $output .= '<div class="chat outgoing">
          <div class="details">
            <p>'.$msg['msg'].'</p>
          </div>
        </div>';
        }else{
          // he is a msg receiver
          $output .= '<div class="chat incoming">
          <img src="assets/php/img/'.
          .'">
          <div class="details">
            <p>'.$msg['msg'].'</p>
          </div>
        </div>';
        }
      }
    }
    echo $output;
  }
?>