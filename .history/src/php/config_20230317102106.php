<?php 
  $conn = mysqli_connect("localhost", "root", "", "posse");
  // mysqli_connect ( ホスト名, ユーザー名, パスワード, データベース名 )
  if ($conn){
    echo "Database connected";
  }else{
    echo "Error";
  }
?>