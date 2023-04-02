<?php 
session_start();
$_SESSION['loggedin'] = false;
    include_once "dbconnect.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(empty($email) or empty($password)){
      echo "enter login credential";
    }

    if($email && $password){
        $sql = mysqli_query($conn, "SELECT * FROM user WHERE email = '" .$email. "' and password = '".($password). "'");
        echo $sql;
        if(mysqli_num_rows($sql) > 0){
          
            $_SESSION['loggedin'] = true;
            echo "success";     
        }else{
            echo "$email - This email not Exist!";
        }
      }


?>
