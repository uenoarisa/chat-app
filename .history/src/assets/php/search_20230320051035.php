<?php
  session_start();
  include_once "config.php";

  $outgoing_id = $_SESSION['unique_id'];
  $searchTerm = $_POST['searchTerm'];


  $users = $pdo->query("SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%')");
  $row_cnt = $users->rowCount();
  $result3 = $users->fetchAll(PDO::FETCH_ASSOC);
  $output = "";
  
  if( $row_cnt > 0){
      include_once('data.php');
  }else{
      $output .= 'No user found related to your search term';
  }

  echo $output;

?>
