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

                <i class="fa fa-dashboard"></i> Dashboard / View Orders

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

                    <i class="fa fa-tags"></i> View Orders

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

                                <th> Order No: </th>
                                <th> Customer Email: </th>
                                <th> Invoice No: </th>
                                <th> Product Name: </th>
                                <th> Product Qty: </th>
                                <th> Product Size: </th>
                                <th> Order Date: </th>
                                <th> Status: </th>
                                <th> Delete: </th>

                            </tr><!-- tr Begin-->

                        </thead><!-- thead Begin-->

                        <tbody>
                            <!-- tbody Begin-->

                            <?php

                                $i = 0;

                                $get_orders = "select * from pending_orders";

                                $run_orders = mysqli_query($con, $get_orders);

                                while ($row_orders = mysqli_fetch_array($run_orders)) {

                                    $order_id = $row_c['order_id'];

                                    $order_name = $row_c['customer_id'];

                                    $c_email = $row_c['invoice_no'];

                                    $c_country = $row_c['product_id'];

                                    $c_city = $row_c['qty'];

                                    $c_address = $row_c['size'];

                                    $c_image = $row_c['order_status'];

                                    $i++;


                                ?>

                            <tr>
                                <!-- tr Begin -->
                                <td><?php echo $i; ?></td>
                                <td><?php echo $c_name; ?></td>
                                <td> <img src="../customer/customer_images/<?php echo $c_image; ?>" width="60"
                                        height="60" alt="">
                                </td>
                                <td><?php echo $c_email; ?></td>
                                <td><?php echo $c_country; ?></td>
                                <td><?php echo $c_city; ?></td>
                                <td><?php echo $c_address; ?></td>
                                <td><?php echo $c_contact; ?></td>
                                <td>
                                    <a href="index.php?delete_customer=<?php echo $c_id; ?>">

                                        <i class="fa fa-trash-o"></i> Delete

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