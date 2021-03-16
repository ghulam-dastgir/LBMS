<?php
include("hader.php");
?>
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
                <h1 class="text-center mb-4 text-primary">User Registration Form</h1>
                <form action="register.php" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" name="uname" id="name" class="form-control" required
                            placeholder="Enter Your name">

                    </div>
                    <div class="form-group">
                        <label for="email">Email ID</label>
                        <input type="email" name="umail" id="email" class="form-control" required
                            placeholder="Enter Your Email ID">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="uphone" id="phone" class="form-control" required
                            placeholder="Enter Your Email ID">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="upassword" id="password" class="form-control" required
                            placeholder="Enter a Strong Password">
                    </div>
                    <input type="submit" value="Register" class="btn mb-2 btn-primary">
                </form>
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