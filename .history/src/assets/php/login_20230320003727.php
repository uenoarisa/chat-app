<?php
    session_start();
    include_once("config.php");
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

    if (!empty($email) && !empty($password)){
      $stmt3 = $pdo->prepare('select * from users where email = :email and password = :password');
      // 値をバインド
      $stmt3->bindValue(':email', $email);
      $stmt3->bindValue(':password', $password);
      $stmt3->execute();
      $row_cnt = $stmt->rowCount();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      if($row_cnt>0){

      }
    }else{
      echo 'ALL input field are required';
    }


?>