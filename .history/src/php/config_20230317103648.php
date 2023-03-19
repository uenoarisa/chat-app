<?php 
  $pdo = new PDO('mysql:host=db;dbname=posse', 'root', 'root');
  // mysqli_connect ( ホスト名, ユーザー名, パスワード, データベース名 )
  if ($pdo){
    echo "Database connected";
  }else{
    echo "Error";
  }
?>