<?php
  include_once("config.php");
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

  if(!empty($fname) && !empty($lname) && !empty($email) &&!empty($password)){
    // user email がvalidか確認
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      // もしemailがvalidだったら
      $stmt = $pdo->prepare('select email from users where email = ?');
      // 値をバインド
      $stmt->bindValue(1, $email); // ②
      // executeでクエリを実行
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      if (count($result)>0){
        echo "$email - this email already exist";
      }else{
        // Let's check user upload file or not
        if(isset($_FILES['image'])){
          $img_name = $_FILES['image']['name'];
          $tmp_name = $_FILES['image']['tmp_name'];

          // explodeは文字列の分割
          $img_explode = explode('.',$img_name);
          $img_ext = end($img_explode);
          // endでimg_explode配列の最後の値を取ってくる
          $extention = ['png','jpeg','jpg'];
          if(in_array($img_ext,$extention) === true){
            // jpeg,jpg,pngにファイルの拡張子になってる
            $time = time();
            // 現在のタイムスタンプ

            $new_img_name = $time.$img_name;

            move_uploaded_file($tmp_name,"img/".$new_img_name);
            // tmp_nameはアップロードされたファイル。これをfolder_nameに移動させる

            if (move_uploaded_file($tmp_name,"img/".$new_img_name)){
              // if user upload img move to our folder successfully
              $status = "Active now"; //一度signed upされたらstatusをactiveにする
              $random_id = rand(time(),10000000);

              // let's insert all user data inside table
              $stmt2 = $pdo->prepare(`insert into users (unique_id,fname,lname,email,password,img,status
              )values(:random_id,':fname',':lname',':email',':password',':new_img_name',':status')`);
              // 値をバインド
              $stmt2->bindValue(':random_id', $random_id);
              $stmt2->bindValue(':fname', $fname);
              $stmt2->bindValue(':lname', $lname);
              $stmt2->bindValue(':email', $email);
              $stmt2->bindValue(':password', $password);
              $stmt2->bindValue(':new_img_name', $new_img_name);
              $stmt2->bindValue(':status', $status);
              // executeでクエリを実行
              $stmt2->execute();

              if($stmt2){
                

              }else{
                echo 'Something went wrong';
              }
            }


          }else{
            echo 'Please select an Image file - jpeg,jpg,png';
          }

        }else{
          echo '';
        }
      }




    }else{
      echo "$email - This is not valid email";
    }

  }else{
    echo "ALL input field are required";
  }


?>