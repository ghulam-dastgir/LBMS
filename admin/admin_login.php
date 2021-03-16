<?php
include("config.php");
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
    <div id="User_login">
        <div class="container shadow-lg p-4">
            <h1 class="text-primary">Admin Login</h1>
            <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Email ID</label>
                        <input type="email" name="aemail" id="email" class="form-control" required
                            placeholder="Enter Your Email ID">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="apassword" id="password" class="form-control" required
                            placeholder="Enter a Strong Password">
                    </div>
                    <input type="submit" name="login" value="Login Now" class="btn mb-2 btn-primary"> 
            </form>
          <?php
          session_start();
          if(isset($_POST['login'])){
          $sql ="SELECT * FROM admin WHERE aemail = '{$_POST['aemail']}'";
          $result = mysqli_query($conn,$sql) or die("Query Failed");
          while($row=mysqli_fetch_assoc($result)) {
              if($row['aemail'] == $_POST['aemail']){
                        if($row['apassword'] == $_POST['apassword']) {
                            $_SESSION['admin_name']=$row['aname'];
                            $_SESSION['admin_email']=$row['aemail'];
                            header("Location: http://localhost/LBMS/admin/index.php");
                        } else{
                            echo "<div class='text-danger'>Wrong Passowrd</div>";
                        }
              } else{
                  echo "Wrong Email Id";
              }

          }
          }

            ?>
        </div>
    </div>
</body>
</html>