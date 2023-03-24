<?php
 include 'dbconnect.php';
 if($_SERVER["REQUEST_METHOD"] == "POST"){
   $email = $_POST['logemail'];
   $password = $_POST['logpass'];
   
  $sql = "SELECT * FROM `user` WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  if ($result){
	   session_start();
	   $_SESSION['loggedin'] = true;
  }
   header("Location: ../../Front-end/index.php");
 }
?>