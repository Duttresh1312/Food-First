<?php
   include_once 'dbconnect.php';
   session_start();
	$_SESSION['loggedin'] = false;
   $name = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);

   $sql = "INSERT INTO `user` (`name`, `email`, `password`, `role`) VALUES ('$name', '$email', '$password', 'user')";
   $result = mysqli_query($conn, $sql);
   if($result){
      $_SESSION['loggedin'] = true;
   }
   header("Location: ../../Front-end/index.php");
?>