<?php
  session_start();
  include_once('config.php');
  $stmt3 = $pdo->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);

  $output = '';

  $row_cnt = $stmt3->rowCount();

  if ($row_cnt == 1){
    $output .= 'No users available to chat';
  }elseif($row_cnt > 0){
    while($row = ){

    }

  }


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