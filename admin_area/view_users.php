<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>
<div class="row">
    <!-- row 1 Begin-->

    <div class="col-lg-12">
        <!--col-lg-12 Begin -->

        <ol class="breadcrumb">
            <!-- breadcrumb Begin -->

            <lo class="active">
                <!-- active Begin -->

                <i class="fa fa-dashboard"></i> Dashboard / Ver Slides

            </lo><!-- active Finish -->

        </ol><!-- breadcrumb Finish -->

    </div><!-- col-lg-12 Finish -->

</div><!-- row 1 Finish -->

<div class="row">
    <!-- row 1 Begin-->

    <div class="col-lg-12">
        <!-- col-lg-12 Begin-->

        <div class="panel panel-default">
            <!-- panel panel-default Begin-->

            <div class="panel-heading">
                <!-- panel-heading Begin-->

                <h3 class="panel-title">
                    <!-- panel-title Begin-->

                    <i class="fa fa-tags"></i> Ver Slides

                </h3><!-- panel-title Begin-->

            </div><!-- panel-heading Finish-->

            <div class="panel-body">
                <!-- panel-heading Begin-->
                <div class="table-responsive">
                    <!-- table-responsive Begin-->
                    <table class="table table-striped table-bordered table-hover">
                        <!-- table table-striped table-bordered table-hover Begin-->

                        <thead>
                            <!-- thead Begin-->
                            <tr>
                                <!-- tr Begin-->

                                <th> Ordem: </th>
                                <th> Admin Nome: </th>
                                <th> Admin Imagem: </th>
                                <th> Admin E-mail: </th>
                                <th> Admin País: </th>
                                <th> Admin Cargo: </th>
                                <th> Admin Contato: </th>
                                <th> Edit: </th>
                                <th> Delete: </th>

                            </tr><!-- tr Begin-->

                        </thead><!-- thead Begin-->

                        <tbody>
                            <!-- tbody Begin-->

                            <?php

                                $i = 0;

                                $get_users = "select * from admins";

                                $run_users = mysqli_query($con, $get_users);

                                while ($row_users = mysqli_fetch_array($run_users)) {

                                    $user_id = $row_users['admin_id'];

                                    $user_name = $row_users['admin_name'];

                                    $user_img = $row_users['admin_image'];

                                    $user_email = $row_users['admin_email'];

                                    $user_country = $row_users['admin_country'];

                                    $user_job = $row_users['admin_job'];

                                    $user_about = $row_users['admin_about'];

                                    $user_contact = $row_users['admin_contact'];

                                    $i++;


                                ?>

                            <tr>
                                <!-- tr Begin -->
                                <td><?php echo $i; ?></td>
                                <td><?php echo $user_name; ?></td>
                                <td> <img src="../admin_area/admin_images/<?php echo $user_img; ?>" width="60"
                                        height="60" alt="">
                                </td>
                                <td><?php echo $user_email; ?></td>
                                <td><?php echo $user_country; ?></td>
                                <td><?php echo $user_job; ?></td>
                                <td><?php echo $user_contact; ?></td>
                                <td>
                                    <a href="index.php?delete_user=<?php echo $user_id; ?>">

                                        <i class="fa fa-trash-o"></i> Delete

                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?user_profile=<?php echo $user_id; ?>">

                                        <i class="fa fa-pencil"></i> Edit

                                    </a>
                                </td>
                            </tr><!-- tr Finish -->

                            <?php } ?>


                        </tbody><!-- tbody Finish-->

                    </table><!-- table table-striped table-bordered table-hover Finish-->

                </div><!-- table-responsive Finish-->

            </div><!-- panel-body Finish-->

        </div><!-- panel panel-default Finish-->

    </div><!-- col-lg-12 Finish-->

</div><!-- row 1 Finish-->

<?php
}
?>