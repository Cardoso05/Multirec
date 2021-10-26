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

                <i class="fa fa-dashboard"></i> Dashboard / View Manufactures

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

                    <i class="fa fa-tags"></i> View Manufactures

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

                                <th> Manufactures ID: </th>
                                <th> Manufactures Title: </th>
                                <th> Manufactures Image: </th>
                                <th> Manufactures Top: </th>
                                <th> Product Delete: </th>
                                <th> Product Edit: </th>

                            </tr><!-- tr Begin-->

                        </thead><!-- thead Begin-->

                        <tbody>
                            <!-- tbody Begin-->

                            <?php

                                $i = 0;

                                $get_manu = "select * from manufacturers";

                                $run_manu = mysqli_query($con, $get_manu);

                                while ($row_manu = mysqli_fetch_array($run_manu)) {

                                    $manu_id = $row_manu['manufacturer_id'];

                                    $manu_title = $row_manu['manufacturer_title'];

                                    $manu_top = $row_manu['manufacturer_top'];

                                    $manu_image = $row_manu['manufacturer_image'];

                                    $i++;


                                ?>

                            <tr>
                                <!-- tr Begin -->
                                <td><?php echo $i; ?></td>
                                <td><?php echo $manu_title; ?></td>
                                <td> <img src="manufacturer_images/<?php echo $manu_image; ?>" width="60" height="60"
                                        alt="">
                                </td>
                                <td><?php echo $manu_top; ?></td>
                                <td>
                                    <a href="index.php?delete_manufacturer=<?php echo $manu_id; ?>">

                                        <i class="fa fa-trash-o"></i> Delete

                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?edit_manufacturer=<?php echo $manu_id; ?>">

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