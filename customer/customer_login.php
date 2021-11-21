<div class="box box-login">
    <!-- box Begin -->

    <div class="row container">

        <form name="formLogin" action="checkout.php" method="post" onsubmit=" return validaLogin(this)"
            class="col-md-6 form-login">
            <!-- form Begin -->

            <h1 class="title-login">Entre na sua conta!</h1>

            <div class="form-group">
                <!-- form-group Begin -->

                <input type="text" id="c_email" name="c_email" type="text" class="form-control login-input"
                    placeholder="Email" required>


            </div><!-- form-group Finish -->

            <div class="form-group">
                <!-- form-group Begin -->

                <input type="text" id="c_pass" name="c_pass" type="password" class="form-control login-input"
                    placeholder="Password" required>


            </div><!-- form-group Finish -->

            <button name="login" value="login" class="btn btn-primary btn-login">

                <i class="fa fa-sing-in"></i>ENTRAR

            </button>



        </form><!-- form Finish -->
        <div class="col-md-6 hidden-sm">


            <img src="images/ilustration-login.png" alt="" class="img-responsive">

        </div>



    </div>

    <center>
        <!-- center Begin -->

        <a href="customer_register.php">

            <h3 class="register"> Registre-se Aqui !</h3>

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

    $run_cart = mysqli_query($con, $select_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if ($check_customer == 0) {

        echo "<script>alert('Your email or password is wrong')</script>";

        exit();
    }

    if ($check_customer == 1 and $check_cart == 0) {

        $_SESSION['customer_email'] = $customer_email;

        echo "<script>alert('You are Logged in')</script>";

        echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
    } else {

        $_SESSION['customer_email'] = $customer_email;

        echo "<script>alert('You are Logged in')</script>";

        echo "<script>window.open('checkout.php','_self')</script>";
    }
}


?>