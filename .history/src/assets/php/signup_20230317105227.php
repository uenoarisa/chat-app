<?php
  include_once("config.php");
  $fname = mysqli_real_escape_string($pdo, $_POST['fname']);
  $lname = mysqli_real_escape_string($pdo, $_POST['']);
  $email = mysqli_real_escape_string($pdo, $_POST['']);
  $password = mysqli_real_escape_string($pdo, $_POST['']);



?>