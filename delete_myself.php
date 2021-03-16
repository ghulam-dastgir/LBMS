<?php
include("config.php");
session_start();
$sql="DELETE FROM users WHERE uemail = '{$_SESSION['user_email']}'";
$result = mysqli_query($conn,$sql) or die("Query Failed");
header("Location: http://localhost/LBMS/index.php");

?>