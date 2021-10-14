<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>
<div class="row">
    <!-- row 1 begin-->

    <div class="col-lg-12">
        <!-- col-lg-12 begin-->

        <ol class="breadcrumb">
            <!-- breadcrumb begin-->

            <li>

                <i class="fa fa-dashboard"></i> Dashboard / Insert Box

            </li>

        </ol><!-- breadcrumb finish-->

    </div><!-- col-lg-12 finish-->

</div><!-- row 1 finish-->

<div class="row">
    <!-- row 2 begin -->

    <div class="col-lg-12">
        <!-- col-lg-12 begin -->

        <div class="panel panel-default">
            <!-- panel panel-default begin -->

            <div class="panel-heading">
                <!-- panel-heading begin -->

                <h3 class="panel-title">
                    <!-- panel-title begin -->

                    <i class="fa fa-money fa-fw"></i> Insert Box

                </h3><!-- panel-title Finish -->

            </div>
            <!-- panel-heading Finish -->

            <div class="panel-body">
                <!-- panel-body begin -->

                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <!-- form-horizontal begin -->

                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->

                            Box Title

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <input type="text" name="box_title" class="form-control">

                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->

                            Box Url

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <input type="text" name="box_url" class="form-control">

                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group Finish -->


                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->
                            Box Desc

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <input type="text" name="box_desc" class="form-control">

                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <input type="submit" value="submit" name="submit" class="form-control btn btn-primary">

                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group begin -->

                </form><!-- form-horizontal Finish -->

            </div><!-- panel-body Finish -->

        </div><!-- panel panel-default Finish -->

    </div><!-- col-lg-12 Finish-->

</div><!-- row 2 Finish -->

<?php

    if (isset($_POST['submit'])) {

        $box_title = $_POST['box_title'];

        $box_url = $_POST['box_url'];

        $box_desc = $_POST['box_desc'];

        $insert_box = "insert into boxes_section (box_title,box_url,box_desc) values ('$box_title','$box_url','$box_desc')";

        $select_box = "select * from boxes_section";

        $run_select = mysqli_query($con, $select_box);

        $row_select = mysqli_num_rows($run_select);

        if ($row_select < 3) {

            $run_insert = mysqli_query($con, $insert_box);

            if ($run_insert) {
                echo "<script>alert('Your new box image has been inserted')</script>";
                echo "<script>window.open('index.php?view_box','_self')</script>";
            }
        } else {
            echo "<script>alert('Your have already 3 boxes')</script>";
        }
    }

    ?>


<?php
}
?>