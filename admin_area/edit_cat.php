<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<?php

    if (isset($_GET['edit_cat'])) {

        $edit_cat_id = $_GET['edit_cat'];

        $edit_cat_query = "select * from categories where cat_id='$edit_cat_id'";

        $run_edit = mysqli_query($con, $edit_cat_query);

        $row_edit = mysqli_fetch_array($run_edit);

        $cat_id = $row_edit['cat_id'];

        $cat_title = $row_edit['cat_title'];

        $cat_desc = $row_edit['cat_desc'];
    }
    ?>
<div class="row">
    <!-- row 1 begin-->

    <div class="col-lg-12">
        <!-- col-lg-12 begin-->

        <ol class="breadcrumb">
            <!-- breadcrumb begin-->

            <li>

                <i class="fa fa-dashboard"></i> Dashboard / Edit Category

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

                    <i class="fa fa-money fa-fw"></i> Edit Category

                </h3><!-- panel-title Finish -->

            </div>
            <!-- panel-heading Finish -->

            <div class="panel-body">
                <!-- panel-body begin -->

                <form action="" method="post" class="form-horizontal">
                    <!-- form-horizontal begin -->

                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->

                            Category Title

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <input value="<?php echo $cat_title ?>" type="text" name="cat_title" class="form-control">

                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->

                            Category Description

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <textarea type='text' name="cat_desc" id="" cols="30" rows="10"
                                class="form-control"><?php echo $cat_desc ?></textarea>

                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->



                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <input type="submit" value="update" name="update" class="form-control btn btn-primary">

                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group begin -->

                </form><!-- form-horizontal Finish -->

            </div><!-- panel-body Finish -->

        </div><!-- panel panel-default Finish -->

    </div><!-- col-lg-12 Finish-->

</div><!-- row 2 Finish -->

<?php

    if (isset($_POST['update'])) {

        $cat_title = $_POST['cat_title'];

        $cat_desc = $_POST['cat_desc'];

        $update_cat = " update categories set cat_id = '$cat_id',cat_title = '$cat_title', cat_desc='$cat_desc' where cat_id = '$cat_id'";

        $run_update = mysqli_query($con, $update_cat);

        if ($run_update) {

            echo "<script>alert('Your category has been updated succesfully')</script>";
            echo "<script>window.open('index.php?view_cats','_self')</script>";
        }
    }

    ?>


<?php
}
?>