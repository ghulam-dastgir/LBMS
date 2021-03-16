<?php
include("config.php");
include("functions.php");
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
                        <a href="admin_logout.php" class="dropdown-item">Logout</a>
                    </div>
                </li>

                </li>
                <li class="nav-item"><a href="admin_logout.php" class="nav-link">Logout</a></li>

            </ul>
        </div>
    </nav>
    <!-- Navbar Ends -->
    <!-- Sub-Navbar Starts-->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary px-5">
        <a href="index.php" class="navbar-brand">Dashboard</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="nav1">
            <ul class="navbar-nav mr-5">
                <!-- Book Dropdown Starts -->
                <li class="nav-item dropdown ml-3"><a href="" class="nav-link dropdown-toggle"
                        data-toggle="dropdown">Book</a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Add New Book</a>
                        <a href="" class="dropdown-item">Manage Books</a>
                    </div>
                </li>
                <!-- Book Dropdown Ends -->

                <!-- Category Starts -->
                <li class="nav-item dropdown ml-3"><a href="" class="nav-link dropdown-toggle"
                        data-toggle="dropdown">Category</a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Add New Category</a>
                        <a href="" class="dropdown-item">Manage Category</a>
                    </div>
                </li>
                <!-- Category Ends -->

                <!-- Authors Starts -->
                <li class="nav-item dropdown ml-3"><a href="" class="nav-link dropdown-toggle"
                        data-toggle="dropdown">Authors</a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Add New Author</a>
                        <a href="" class="dropdown-item">Manage Author</a>
                    </div>
                </li>
                <!-- Authors Ends -->
                <li class="nav-item"><a href="" class="nav-link">Issue Book</a></li>
            </ul>
        </div>
    </nav>
    <!-- Sub-navbar Ends -->

    <!-- Wrapper Starts -->
    <div id="wrapper" class="container mt-5">
        <h1 class="text-primary mb-4">All Users</h1>
        <?php
        $sql="SELECT * FROM users ORDER BY uid ASC";
        $result=mysqli_query($conn,$sql) or die("Query Failed");
        if(mysqli_num_rows($result) > 0) {
        ?>
        <table class="table">
               <thead>
                   <tr>
                       <th>Id</th>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Phone</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                   <?php while($row=mysqli_fetch_assoc($result)) { ?>
                   <tr>
                       <th scope="col"><?php echo $row['uid']; ?></th>
                       <td><?php echo $row['uname']; ?></td>
                       <td><?php echo $row['uemail']; ?></td>
                       <td><?php echo $row['uphone']; ?></td>
                       <td><a href="delete_r.php" class="btn btn-danger btn-sm">DELETE</a></td>
                   </tr>
                   <?php  } ?>
               </tbody>
        </table>
        <?php  } ?>
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