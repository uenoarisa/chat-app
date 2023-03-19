<?php 
  $pdo = new PDO('mysql:host=db;dbname=posse', 'root', 'root');
  $pdo = mysqli_connect('localhost', 'root', 'root', 'posse');
  // mysqli_connect ( ホスト名, ユーザー名, パスワード, データベース名 )
  if (!$pdo){
    echo "Database connected";
  }
?>


<!-- $pdo->errorInfo(); -->