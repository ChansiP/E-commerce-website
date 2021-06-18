<?php
require 'common.php';
if(!isset($_SESSION['email'])){
header("location:index.php");
}
$oldpassword=$_POST['oldpassword'];
$oldPassword = mysqli_real_escape_string ($con , $oldPassword);
    $oldPassword = md5($oldPassword);

$newpassword=$_POST['newpassword'];
  $newPassword = mysqli_real_escape_string ($con , $newPassword);
    $newPassword=md5($newPassword);


  $retypepassword=$_POST['retypepassword'];
  $retypepassword = mysqli_real_escape_string ($conn , $retypepassword);
    $retypepassword = md5($retypepassword);

       $email = $_SESSION['email'];

$select_query="SELECT * FROM users WHERE password='$oldpassword' AND  email = '$email' ";
$result= mysqli_query($conn,$select_query) or die(mysqli_error($conn));
 $rows = mysqli_num_rows($result);

    if ($rows > 0 && $newPassword==$retypepassword){
        $success = "<span class='green'>Password Changed</span>";
        $update_query = "UPDATE users SET password = '$newPassword' WHERE email = '$email'";
        $update_query_result = mysqli_query($conn , $update_query) or die(mysqli_error($conn));
        header("location:settings.php?m1=".$success);
    }else{
        $error = "<span class='red'>Invalid Credentials</span>";
        header("location:settings.php?m1=".$error);
    }
?>
