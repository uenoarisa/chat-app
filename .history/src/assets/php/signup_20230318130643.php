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
      $stmt->bindValue(1, $email); // ②
      // executeでクエリを実行
      $stmt->execute();
      if (count($stmt)>0){
        echo "$email - this email already exist";
      }else{
        // Let's check user upload file or not
        if(isset($_FILES['image'])){
          $img_name = $_FILES['image']['name'];
          $tmp_name = $_FILES['image']['tmp_name'];

          // explodeは文字列の分割
          $img_explode = explode('.',$img_name);
          $img_ext = end($img_explode);
          $exti
          if(in_array($img_ext,$exte))

        }else{
          echo 
        }
      }




    }else{
      echo "$email - This is not valid email";
    }

  }else{
    echo "ALL input field are required";
  }


?>