<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<?php

    if (isset($_GET['edit_term'])) {

        $edit_term_id = $_GET['edit_term'];

        $edit_term = "select * from terms where term_id='$edit_term_id'";

        $run_edit_term = mysqli_query($con, $edit_term);

        $row_edit_term = mysqli_fetch_array($run_edit_term);

        $term_id = $row_edit_term['term_id'];

        $term_title = $row_edit_term['term_title'];

        $term_link = $row_edit_term['term_link'];

        $term_desc = $row_edit_term['term_desc'];
    }


    ?>
<div class="row">
    <!-- row 1 begin-->

    <div class="col-lg-12">
        <!-- col-lg-12 begin-->

        <ol class="breadcrumb">
            <!-- breadcrumb begin-->

            <li>

                <i class="fa fa-dashboard"></i> Dashboard / Edit Term

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

                    <i class="fa fa-money fa-fw"></i> Edit Term

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

                            Term title

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <input type="text" name="term_title" class="form-control"
                                value="<?php echo $term_title; ?>">

                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->

                            Term Link

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <input type="text" name="term_link" class="form-control" value="<?php echo $term_link; ?>">

                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->
                            Term Desc

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->


                            <textarea class="form-control" name="term_desc" cols="30"
                                rows="10"><?php echo $term_desc; ?></textarea>


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

        $term_title = $_POST['term_title'];

        $term_desc = $_POST['term_desc'];

        $term_link = $_POST['term_link'];

        $update_term = "update terms set term_title='$term_title', term_link ='$term_link', term_desc ='$term_desc' where term_id = '$term_id'";

        $run_update_term = mysqli_query($con, $update_term);

        if ($run_update_term) {

            echo "<script> alert('Your Term has been updated successfully');</script>";
            echo "<script> window.open('index.php?view_terms','_self')</script>";
        }
    }


    ?>


<?php
}
?>