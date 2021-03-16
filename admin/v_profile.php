<?php
include("config.php");
session_start();
if(!isset($_SESSION['admin_name'])){
    header("Location: http://localhost/LBMS/admin/admin_login.php");
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
        <span class="text-white ml-5"> <strong> <?php echo $_SESSION['admin_name']; ?> </strong> </span>
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
            
            </li>
                <li class="nav-item"><a href="admin_logout.php" class="nav-link">Logout</a></li>

            </ul>
        </div>
    </nav>
<!-- Navbar Ends -->
    <div class="my-2 lead text-muted">
        <marquee behavior="" direction="" class="">This is Library Management System. Libray opens at 8:00 AM and close at 5:00
            PM</marquee>
    </div>
    <!-- Wrapper Starts -->
    <div id="wrapper">
        <div class="row">
            <div class="col-md-2  pl-5" id="sidebar">
                <h5 class="library_timing">Library Timing</h5>
                <ul class="list-unstyled">
                    <li>Opening Time: 8:00 AM</li>
                    <li>Closing Time: 6:00 PM</li>
                    <li>(Sunday Off)</li>
                    <li></li>
                    <li></li>
                </ul>
                <h5 class="library_timing">What We Provide</h5>
                <ul class="list-unstyled">
                    <li>Full Furniture</li>
                    <li>Free wi-fi</li>
                    <li>News Paper</li>
                    <li>Peacefull Environment</li>
                    <li></li>
                </ul>
            </div>
            <div class="col-md-8 shadow-lg offset-md-1 px-5" id="main_content">
            <div class="container table-responsive mt-5 text-center">
        <?php
        $sql ="SELECT * FROM admin WHERE aemail='{$_SESSION['admin_email']}'";
        $result = mysqli_query($conn,$sql) or die("Query Failed");
        if(mysqli_num_rows($result) > 0) {
        ?>
    <table class="table table-bordered">
        <thead class="bg-dark text-white">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL ID</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=mysqli_fetch_assoc($result)) { ?>
            <tr>
                <th role="col"><?php echo $row['aid']; ?></th>
                <td><?php echo $row['aname']; ?></td>
                <td><?php echo $row['aemail']; ?></td>
                <td><a href="delete_myself.php" class="btn btn-danger btn-sm">Delete</a> <a href="update_myself.php" class="btn btn-primary ml-2 btn-sm">Update</a></td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>
        <?php } ?>
</div>
            </div>
        </div>
    </div>

    <!-- Wrapper Ends -->
    <!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <!-- Javascript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="js/all.min.js"></script>
</body>

</html>