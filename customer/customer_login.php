<div class="box">
    <!-- box Begin -->

    <div class="box-header">
        <!-- box-header Begin -->

        <center>
            <!-- center Begin -->

            <h1>Login</h1>

            <p class="lead">Already have our account..? </p>

            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, nihil a. Culpa a
                quos ad eligendi porro autem quibusdam, vitae qui quo dolore aut recusandae neque quas temporibus
                dolorum earum.
            </p>

        </center><!-- center Finish -->


    </div><!-- box-header Finish -->

    <form action="checkout.php" method="post">
        <!-- form Begin -->

        <div class="form-group">
            <!-- form-group Begin -->

            <label> Email </label>

            <input type="text" name="c_email" type="text" class="form-control" required>


        </div><!-- form-group Finish -->

        <div class="form-group">
            <!-- form-group Begin -->

            <label> Password </label>

            <input type="text" name="c_pass" type="password" class="form-control" required>


        </div><!-- form-group Finish -->

        <div class="text-center">
            <!-- text-cente Begin-->

            <button name="login" value="login" class="btn btn-primary">

                <i class="fa fa-sing-in"></i>Login

            </button>


        </div><!-- text-cente Finish-->


    </form><!-- form Finish -->

    <center>
        <!-- center Begin -->

        <a href="customer_register.php">

            <h3> Dont have account.. ? Register here </h3>

        </a>

    </center><!-- center Finish -->


</div><!-- box Finish -->

<?php

if (isset($_POST['login'])) {

    $customer_email = $_POST['c_email'];

    $customer_pass = $_POST['c_pass'];

    $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

    $run_customer = mysqli_query($con, $select_customer);

    $get_ip = getRealIpUser();

    $check_customer = mysqli_num_rows($run_customer);

    $select_cart = "select * from cart where ip_add='$get_ip'";

    $run_cart = mysqli_query($con, $select_customer);

    $check_cart = mysqli_num_rows($run_cart);

    if ($check_customer == 0) {

        echo "<script>alert('Your email or password is wrong');</script>";

        exit();
    }

    if ($check_customer == 1 and $check_cart == 0) {

        $_SESSION['customer_email'] = $customer_email;

        echo "<script>alert('You are logged in');</script>";

        echo "<script>window.open('customer/my_account.php?my_orders','_self');</script>";
    } else {

        $_SESSION['customer_email'] = $customer_email;

        echo "<script>alert('You are logged in');</script>";

        echo "<script>window.open('checkout.php','_self');</script>";
    }
}


?>