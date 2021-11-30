<?php
if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
?>

<body class="container">

    <div class="row">
        <!-- row Begin -->

        <div class="col-lg-12">
            <!-- col-lg-12 Begin -->


            <ol class="breadcrumb">
                <!-- breadcrumb Begin -->

                <li class="active">
                    <!-- active Begin -->

                    <i class="fa fa-dashboard"></i> Dashboard / Inserir Admin

                </li><!-- active Finish -->

            </ol><!-- breadcrumb Finish -->

        </div><!-- col-lg-12 Finish -->

    </div><!-- row Finish -->

    <div class="row">
        <!-- row Begin -->

        <div class="col-lg-12">
            <!-- col-lg-12 Begin -->

            <div class="panel panel-default">
                <!-- panel panel-default Begin -->

                <div class="panel-heading">
                    <!-- panel-heading Begin -->

                    <h3 class="panel-title">
                        <!-- panel-title Begin -->

                        <i class="fa fa-money fa-fw"></i> Inserir Admin

                    </h3><!-- panel-title Finish -->

                </div><!-- panel-heading Finish -->

            </div><!-- panel panel-default Finish -->

            <div class="panel-body">
                <!-- panel-body Begin-->

                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <!-- form-horizontal Begin-->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Username </label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="text" name="admin_name" class="form-control" required>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <!-- form-horizontal Begin-->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">E-mail</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="text" name="admin_email" class="form-control" required>


                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <!-- form-horizontal Begin-->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Senha </label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="password" name="admin_pass" class="form-control" required>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label"> País </label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="text" name="admin_country" class="form-control" required>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Contato </label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="text" name="admin_contact" class="form-control" required>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Cargo </label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="text" name="admin_job" class="form-control" required>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">Imagem </label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="file" name="admin_image" class="form-control" required>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Sobre </label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <textarea name="admin_about" class="form-control" rows="3"></textarea>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="submit" name="submit" value="Insert User" class="btn btn-primary form-control">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->


                </form><!-- form-horizontal Finish-->

            </div><!-- panel-body Finish-->

        </div><!-- col-lg-12 Finish -->

    </div><!-- row Finish -->


    <?php

    if (isset($_POST['submit'])) {

        $user_name = $_POST['admin_name'];
        $user_email = $_POST['admin_email'];
        $user_pass = $_POST['admin_pass'];
        $user_country = $_POST['admin_country'];
        $user_contact = $_POST['admin_contact'];
        $user_job = $_POST['admin_job'];
        $user_about = $_POST['admin_about'];

        $user_image = $_FILES['admin_image']['name'];
        $temp_admin_image = $_FILES['admin_image']['tmp_name'];

        move_uploaded_file($temp_admin_image, "admin_images/$user_image");

        $insert_user = "insert into admins (admin_name,admin_email,admin_pass,admin_image,admin_country,admin_contact,admin_job,admin_about) values ('$user_name','$user_email','$user_pass','$user_image','$user_country','$user_contact','$user_job','$user_about')";

        $run_user = mysqli_query($con, $insert_user);

        if ($run_user) {

            echo "<script>alert('Um novo admin foi inserido');</script>";

            echo "<script>window.open('index.php?view_users','_self');</script>";
        }
    }
}
    ?>