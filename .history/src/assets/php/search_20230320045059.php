<?php
  session_start();
  include_once "config.php";

  $outgoing_id = $_SESSION['unique_id'];
  $searchTerm = $_POST['searchTerm'];

  $sql = " ";

  $stmt3 = $pdo->query("SELECT * FROM users WHERE email = '$email'");
  $result3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
  $output = "";
  if(mysqli_num_rows($query) > 0){
      include_once "data.php";
  }else{
      $output .= 'No user found related to your search term';
  }
  echo $output;

?>
