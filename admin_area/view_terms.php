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

                <i class="fa fa-dashboard"></i> Dashboard / Ver termos

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

                    <i class="fa fa-tags fa-fw"></i> Ver Slides

                </h3><!-- panel-title Finish -->

            </div>
            <!-- panel-heading Finish -->

            <div class="panel-body">
                <!-- panel-body begin -->

                <?php

                    $get_terms = "select * from terms";

                    $run_terms = mysqli_query($con, $get_terms);

                    while ($row_terms = mysqli_fetch_array($run_terms)) {

                        $term_id = $row_terms['term_id'];

                        $term_title = $row_terms['term_title'];

                        $term_link = $row_terms['term_link'];

                        $term_desc = $row_terms['term_desc'];


                    ?>

                <div class="col-lg-4 col-md-4">
                    <!-- col-lg-3 col-md-3 begin -->

                    <div class="panel panel-primary">
                        <!-- panel panel-primary begin -->

                        <div class="panel-heading">
                            <!-- panel-heading begin -->

                            <h3 class="panel-title" align="center">
                                <!-- panel-title begin -->

                                <?php echo $term_title; ?>

                            </h3><!-- panel-title finish -->

                        </div><!-- panel-heading finish -->

                        <div class="panel-body">
                            <!-- panel-body begin -->

                            <p align="center"><?php echo $term_desc; ?></p>

                        </div><!-- panel-body Finish -->

                        <div class="panel-footer">
                            <!-- panel-footer Begin -->

                            <center>
                                <!-- Center Begin -->

                                <a href="index.php?delete_term=<?php echo $term_id; ?>" class="pull-right">
                                    <!-- pull-right Begin -->

                                    <i class="fa fa-trash"></i> Delete

                                </a><!-- pull-right Finish -->

                                <a href="index.php?edit_term=<?php echo $term_id; ?>" class="pull-left">
                                    <!-- pull-right Begin -->

                                    <i class="fa fa-pencil"></i> Edit

                                </a><!-- pull-right Finish -->

                                <div class="clearfix"></div>

                            </center><!-- Center Finish -->


                        </div>
                        <!--panel-footer Finish -->

                    </div><!-- panel panel-primary finish -->

                </div><!-- col-lg-3 col-md-3 finish -->

                <?php  } ?>

            </div><!-- panel-body Finish -->

        </div><!-- panel panel-default Finish -->

    </div><!-- col-lg-12 Finish-->

</div><!-- row 2 Finish -->

<?php
}
?>