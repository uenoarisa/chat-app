<?php
    session_start();
    include_once("config.php");
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

    if (!empty($email) && !empty($password)){

    }else{
      echo 'ALL input field required'
    }


?>