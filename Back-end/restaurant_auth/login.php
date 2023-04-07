<?php 
session_start();
$_SESSION['signined'] = false;
    include_once "dbconnect.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(empty($email) or empty($password)){
      echo "enter login credential";
    }

    if($email && $password){
        $sql = mysqli_query($conn, "SELECT * FROM hotel WHERE email = " .$email. " AND password = ".$password. "");
        if(mysqli_num_rows($sql) == 1){
            $_SESSION['signined'] = true;
            echo "success";     
        }else{
            echo "$email - This email not Exist!";
        }
      }


?>
