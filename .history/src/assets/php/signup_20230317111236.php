<?php
  include_once("config.php");
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email']);
  $password = $_POST['password']);

  if(!empty($fname) && !empty($lname) && !empty($email) &&!empty($password)){

  }else{
    echo "ALL input field are required";
  }


?>