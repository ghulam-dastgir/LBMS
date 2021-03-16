<?php
include("config.php");
session_start();
if(!isset($_SESSION['user_name'])){
header("Location: http://localhost/LBMS/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="all.min.css">
    <title>Online LBMS</title>
</head>
<body>
 <!-- Navbar -->
 <nav class="navbar navbar-expand-md navbar-dark bg-dark px-5">
        <h1 class="navbar-brand font-weight-bold">Library Management System</h1>
        <small class="navbar-text">Developed By SUNNY RAJPOOT</small>
        <span class="text-white ml-5">Welcome: <?php echo $_SESSION['user_name'];  ?></span>
        <button class="navbar navbar-toggler" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                My Profile
                </a>
                <div class="dropdown-menu">
                <a href="v_profile.php" class="dropdown-item">View Profile</a>
                <a href="logout.php" class="dropdown-item">Logout</a>
                </div>
                </li>
            </ul>
        </div>
    </nav>
<!-- Navbar Ends -->

    <!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <!-- Javascript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="js/all.min.js"></script>
</body>
</html>