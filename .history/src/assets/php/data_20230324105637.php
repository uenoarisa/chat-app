<?php
  foreach ($users as $user) {
    $sql2 = $pdo->query("SELECT * FROM messages WHERE (incoming_msg_id = {$user['unique_id']} or outgoing_msg_id = {$user['unique_id']}) AND (incoming_msg_id = {$outgoing_id} or outgoing_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1");

    $
    $output .= '<a href="chat.php?user_id='.$user['unique_id'].'">
        <div class="content">
        <img src="assets/php/img/'. $user['img']. '" alt="">
        <div class="details">
          <span>'.$user['fname'].' '.$user['lname']. '</span>
          <p>This is test message</p>
        </div>
        <div class="status-dot">
          <i class="fa-solid fa-circle"></i>
        </div>
        </div>
      </a> ';
  }
?>