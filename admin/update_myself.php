<?php
include("config.php");
session_start();
if(!isset($_SESSION['admin_name'])){
header("Location: http://localhost/LBMS/admin/index.php");
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
        <span class="text-white ml-5">Welcome: <?php echo $_SESSION['admin_name'];  ?></span>
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
<!-- COntainer -->
<div class="container mt-5 w-50 shadow-lg p-4">
    <h1 class="mb-3 text-primary">Update Your Record</h1>
    <?php
    $sql="SELECT * FROM admin WHERE aemail ='{$_SESSION['admin_email']}'";
    $result = mysqli_query($conn,$sql) or die("Query Failed");
    while($row=mysqli_fetch_assoc($result)) { ?>
<form action="" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="a_name" value="<?php echo $row['aname']; ?>" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email Id</label>
        <input type="email" disabled name="a_email" value="<?php echo $row['aemail']; ?>"  id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="a_password" id="password" class="form-control">
    </div>
    <input type="submit" value="Update" name="update" class="btn btn-outline-primary w-100">
</form>
<?php
    }

    if(isset($_POST['update'])){
        $query="UPDATE admin SET aname='{$_POST['a_name']}' , apassword='{$_POST['a_password']}' WHERE aemail='{$_SESSION['admin_email']}'";
        $result_query = mysqli_query($conn,$query) or die("Query Faield");
        header("Location: http://localhost/LBMS/admin/v_profile.php");
    }
?>
</div>

    <!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <!-- Javascript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="js/all.min.js"></script>
</body>
</html>