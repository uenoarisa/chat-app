<?php
  session_start();
  include_once('config.php');
  $stmt3 = $pdo->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);

  $output = '';

  $row_cnt = $stmt3->rowCount();

  if ($row_cnt){
    $output .= 
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