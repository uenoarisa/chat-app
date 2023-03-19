<?php
  include_once("config.php");
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(!empty($fname) && !empty($lname) && !empty($email) &&!empty($password)){
    // user email がvalidか確認
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      // もしemailがvalidだったら
      $stmt = $pdo->prepare('select email from userｓ where email = ?');

      // 値をバインド
      $stmt->bindValue(1, $id, PDO::PARAM_INT);  // ①

    
      // executeでクエリを実行
      $stmt->execute();

    }else{
      echo "$email - This is not valid email";
    }

  }else{
    echo "ALL input field are required";
  }


?>