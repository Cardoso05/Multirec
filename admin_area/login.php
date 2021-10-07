<?php
include("includes/header.php");
?>

<body>

    <div class="container">
        <!-- container begin-->

        <form action="" method="post" class="form-login">
            <!-- form-login begin-->

            <h2 class="form-login-heading"> Admin Login </h2>

            <input type="text" placeholder="Email Address" name="admin_email" class="form-control" required>

            <input type="password" placeholder="Your Password" name="admin_pass" class="form-control" required>

            <button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login">

                Login

            </button>

        </form><!-- form-login finish-->

    </div><!-- container finish-->


</body>

</html>