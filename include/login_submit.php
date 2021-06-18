<?php
require 'common.php';
$email = $_POST['email'];
$email = mysqli_real_escape_string($conn, $email);
$id=$_POST['id'];


$password = $_POST['password'];
$password = mysqli_real_escape_string($conn, $password);
$password = md5($password);
$users_login_query = "SELECT id, email FROM users WHERE email = '$email' AND password = '$password'";
  $users_login_result = mysqli_query($conn, $users_login_query) or die(mysqli_error($con));;
 $total_rows_fetched = mysqli_num_rows($users_login_result);
  
 if($total_rows_fetched!=0){
        $row = mysqli_fetch_array($users_login_result);
        $_SESSION['email'] = $email;
        $_SESSION['id']=$row['id'];
        header("location:products.php");
    }
    else{
        $error = "<span class='red'>Invalid Credentials</span>";
        header("location:login.php?m1=".$error);
    }
?>