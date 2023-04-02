<?php
session_start();
$_SESSION['loggedin'] = false;
   include_once 'dbconnect.php';
   $name = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);

   if(empty($name) or  empty($email) or empty($password)){
      echo "enter valid credential signup";
   
   }
   if($name && $email && $password){
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
         $sql = "INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
         $result = mysqli_query($conn, $sql);
         if($result){
            $_SESSION['loggedin'] = true;
            echo "success";
         }
         header("Location: ../../Front-end/index.php");
      }
      else{
         echo "email not valid";
      }
      
   }
?>