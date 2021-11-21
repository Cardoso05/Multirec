<?php
$active = 'Account';
include("includes/header.php")

?>

<div id="content">
    <!-- #content Begin -->
    <div class="container">
        <!-- container Begin -->
        <div class="col-md-12">
            <!-- col-md-12 Begin -->

            <div class="box box-login">
                <!-- box Begin -->

                <div class="row container">

                    <form name="formRegister" action="customer_register.php" method="post" enctype="multipart/form-data"
                        onsubmit=" return validaRegister(this)" class="col-md-6 form-login-2">
                        <!-- form Begin -->

                        <h1 class="title-login">Registre sua conta!</h1>

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <input type="text" class="form-control " name="c_name" placeholder="Nome" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <input type="text" class="form-control" name="c_email" placeholder="Email" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <input type="password" class="form-control" name="c_pass" placeholder="Senha" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <input type="text" class="form-control" name="c_country" placeholder="País" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->


                            <input type="text" class="form-control" name="c_city" placeholder="Cidade" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <input type="text" class="form-control" name="c_contact" placeholder="Contato" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <input type="text" class="form-control" name="c_address" placeholder="Endereço" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label> Foto de Perfil</label>

                            <input type="file" class="form-control form-height-custom" name="c_image" required>

                        </div><!-- form-group Finish -->

                        <div class="text-center">
                            <!-- text-center Begin -->

                            <button type="submit" name="register" class="btn btn-primary">

                                <i class="fa fa-user-md"></i> Register

                            </button>

                        </div><!-- text-center Finish -->

                    </form><!-- form Finish -->

                    <div class="col-md-6">

                        <img src="images/ilustration-login.png" alt="">
                    </div>



                </div><!-- box Finish -->

            </div><!-- col-md-12 Finish -->

        </div><!-- container Finish -->
    </div><!-- #content Finish -->

    <?php

    include("includes/footer.php");

    ?>





    </body>

    </html>

    <?php

    if (isset($_POST['register'])) {

        $c_name = $_POST['c_name'];

        $c_email = $_POST['c_email'];

        $c_pass = $_POST['c_pass'];

        $c_country = $_POST['c_country'];

        $c_city = $_POST['c_city'];

        $c_contact = $_POST['c_contact'];

        $c_address = $_POST['c_address'];

        if (is_uploaded_file($_FILES['c_image']['tmp_name'])) {

            $c_image = $_FILES['c_image']['name'];

            $c_image_tmp = $_FILES['c_image']['tmp_name'];

            $c_ip = getRealIpUser();

            move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");

            $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";

            $run_customer = mysqli_query($con, $insert_customer);

            $sel_cart = "select * from cart where ip_add='$c_ip'";

            $run_cart = mysqli_query($con, $sel_cart);

            $check_cart = mysqli_num_rows($run_cart);

            if ($check_cart > 0) {

                /// if register with item in cart

                $_SESSION['customer_email'] = $c_email;

                echo "<script>alert('You have been Registred Sucessfully')</script>";

                echo "<script>window.open('checkout.php','_self')</script>";
            } else {

                /// if register without item in cart

                $_SESSION['customer_email'] = $c_email;

                echo "<script>alert('You have been Registred Sucessfully')</script>";

                echo "<script>window.open('index.php','_self')</script>";
            }
        }
    }

    ?>