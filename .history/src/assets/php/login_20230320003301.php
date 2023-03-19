<?php
    session_start();
    include_once("config.php");
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

    if (!empty($email) && !empty($password)){
      $stmt3 = $pdo->prepare('select email from users where email = :email and password = :password');
              // 値をバインド
              $stmt2->bindValue(':email', );
              $stmt2->bindValue(':fname', $fname);

    }else{
      echo 'ALL input field are required';
    }


?>