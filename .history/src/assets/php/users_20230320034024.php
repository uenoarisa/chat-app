<?php
  session_start();
  include_once('config.php');
  $users = $pdo->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);

  $output = '';

  $row_cnt = $->rowCount();

  if ($row_cnt == 1){
    $output .= 'No users available to chat';
  }elseif($row_cnt > 0){
    foreach ($users as $user) {
      $output .= '<a href="#">
      <div class="content">
        <img src="img/'. $user['img']. '" alt="">
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
    }

    echo $output;


  // <a href="#">
  //         <div class="content">
  //           <img src="./assets/img/main03.jpg" alt="">
  //           <div class="details">
  //             <span>Coding Nepal</span>
  //             <p>This is test message</p>
  //           </div>
  //           <div class="status-dot">
  //             <i class="fa-solid fa-circle"></i>
  //           </div>
  //         </div>
  //       </a>




?>