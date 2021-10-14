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

                <i class="fa fa-dashboard"></i> Dashboard / View Payments

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

                    <i class="fa fa-tags"></i> View Payments

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

                                <th> No: </th>
                                <th> Invoice No: </th>
                                <th> Amount Paid: </th>
                                <th> Method: </th>
                                <th> Reference No: </th>
                                <th> Payment Code: </th>
                                <th> Payment Date: </th>
                                <th> Delete Payment: </th>

                            </tr><!-- tr Begin-->

                        </thead><!-- thead Begin-->

                        <tbody>
                            <!-- tbody Begin-->

                            <?php

                                $i = 0;

                                $get_payments = "select * from payments";

                                $run_payments = mysqli_query($con, $get_payments);

                                while ($row_payments = mysqli_fetch_array($run_payments)) {

                                    $payment_id = $row_payments['payment_id'];

                                    $invoice_no = $row_payments['invoice_no'];

                                    $amount = $row_payments['amount'];

                                    $payment_mode = $row_payments['payment_mode'];

                                    $ref_no = $row_payments['ref_no'];

                                    $code = $row_payments['code'];

                                    $payment_date = $row_payments['payment_date'];



                                    $i++;


                                ?>

                            <tr>
                                <!-- tr Begin -->
                                <td><?php echo $i; ?></td>
                                <td><?php echo $invoice_no; ?></td>
                                <td><?php echo $amount; ?></td>
                                <td><?php echo $payment_mode; ?></td>
                                <td><?php echo $ref_no; ?></td>
                                <td><?php echo $code; ?></td>
                                <td><?php echo $payment_date ?></td>

                                <td>
                                    <a href="index.php?delete_payment=<?php echo $payment_id; ?>">

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