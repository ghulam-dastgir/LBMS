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
            <h1 class="text-primary">User Login</h1>
            <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Email ID</label>
                        <input type="email" name="umail" id="email" class="form-control" required
                            placeholder="Enter Your Email ID">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="upassword" id="password" class="form-control" required
                            placeholder="Enter a Strong Password">
                    </div>
                    <input type="submit" name="login" value="Login Now" class="btn mb-2 btn-primary"> | 
                    <a href="index.php"> Not Register Yet?</a>
            </form>
          <?php
          session_start();
          if(isset($_POST['login'])){
          $sql ="SELECT * FROM users WHERE uemail = '{$_POST['umail']}'";
          $result = mysqli_query($conn,$sql) or die("Query Failed");
          while($row=mysqli_fetch_assoc($result)) {
              if($row['uemail'] == $_POST['umail']){
                        if($row['upassword'] == $_POST['upassword']) {
                            $_SESSION['user_name']=$row['uname'];
                            $_SESSION['user_email']=$row['uemail'];
                            header("Location: http://localhost/LBMS/u_panal.php");
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