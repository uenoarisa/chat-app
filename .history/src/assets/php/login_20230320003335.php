<?php
    session_start();
    include_once("config.php");
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

    if (!empty($email) && !empty($password)){
      $stmt3 = $pdo->prepare('select email from users where email = :email and password = :password');
              stmt2->bindValue(':fname', $password);


    }else{
      echo 'ALL input field are required';
    }


?>