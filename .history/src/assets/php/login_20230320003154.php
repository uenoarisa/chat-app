<?php
    session_start();
    include_once("config.php");
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

    if (!empty($email) && !empty($password)){
      $stmt3 = $pdo->prepare(
              VALUES(:random_id, :fname, :lname, :email, :password, :new_img_name, :status)');
              // 値をバインド
              $stmt2->bindValue(':random_id', $random_id, PDO::PARAM_INT);
              $stmt2->bindValue(':fname', $fname);

    }else{
      echo 'ALL input field are required';
    }


?>