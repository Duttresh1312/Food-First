<?php
session_start();
$_SESSION['signined'] = false;
   include_once 'dbconnect.php';
   $name = mysqli_real_escape_string($conn, $_POST['username']);
   $gst = mysqli_real_escape_string($conn, $_POST['gst']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);

   if(empty($name) or  empty($email) or empty($password)){
      echo "enter valid credential signup";
   
   }
   if($name && $email && $password){
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
         $sql = "INSERT INTO `hotel` (`name`, `gst`, `email`, `password`, `role`) VALUES ('$name', '$gst', '$email', '$password', 'hotel')";
         $result = mysqli_query($conn, $sql);
         if($result){
            $_SESSION['signined'] = true;
            echo "success";
         }
         header("Location: ../../Front-end/index.php");
      }
      else{
         echo "email not valid";
      }
      
   }
?>