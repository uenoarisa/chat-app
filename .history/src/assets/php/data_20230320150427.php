<?php
  foreach ($users as $user) {
    $output .= '<a href="chat.php?user_id='.'$users[i]'.">
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