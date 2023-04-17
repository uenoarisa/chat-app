<?php
  session_start();
  include_once "config.php";

  $outgoing_id = $_SESSION['unique_id'];
  $searchTerm = $_POST['searchTerm'];


  $stmt3 = $pdo->query("SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%')");
  $row_cnt = $stmt3->rowCount();
  $result3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
  $output = "";
  if( > 0){
      include_once "data.php";
  }else{
      $output .= 'No user found related to your search term';
  }
  echo $output;

?>
