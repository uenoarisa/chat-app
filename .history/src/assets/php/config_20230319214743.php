<?php 
  $pdo = new PDO('mysql:host=db;dbname=posse', 'root', 'root','posse');
  // mysqli_connect ( ホスト名, ユーザー名, パスワード, データベース名 )
  if (!$pdo){
    echo "Database connected" . $pdo->errorInfo();
  }
?>