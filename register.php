<?php
include("config.php");
$user_name = $_POST['uname'];
$user_mail = $_POST['umail'];
$user_phone = $_POST['uphone'];
$user_password = $_POST['upassword'];
$sql="INSERT INTO users(uname,uemail,uphone,upassword) VALUES ('{$user_name}','{$user_mail}','{$user_phone}','{$user_password}')";
$result = mysqli_query($conn,$sql) or die('Query Failed');
header("Location: http://localhost/LBMS/user_login.php");
?>
