<?php
  include_once("config.php");
  $fname = $_POST['fname'];
  $lname = $_POST['lname']);
  $email = mysqli_real_escape_string($pdo, $_POST['email']);
  $password = mysqli_real_escape_string($pdo, $_POST['password']);

  if(!empty($fname) && !empty($lname) && !empty($email) &&!empty($password)){

  }else{
    echo "ALL input field are required";
  }


?>