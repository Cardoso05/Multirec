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

                <i class="fa fa-dashboard"></i> Dashboard / Ver Slides

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

                    $get_slides = "select * from slider";

                    $run_slides = mysqli_query($con, $get_slides);

                    while ($row_slides = mysqli_fetch_array($run_slides)) {

                        $slide_id = $row_slides['slide_id'];

                        $slide_name = $row_slides['slide_name'];

                        $slide_image = $row_slides['slide_image'];


                    ?>

                <div class="col-lg-3 col-md-3">
                    <!-- col-lg-3 col-md-3 begin -->

                    <div class="panel panel-primary">
                        <!-- panel panel-primary begin -->

                        <div class="panel-heading">
                            <!-- panel-heading begin -->

                            <h3 class="panel-title" align="center">
                                <!-- panel-title begin -->

                                <?php echo $slide_name; ?>

                            </h3><!-- panel-title finish -->

                        </div><!-- panel-heading finish -->

                        <div class="panel-body">
                            <!-- panel-body begin -->

                            <img src="slides_images/<?php echo $slide_image; ?>" class="img-responsive">

                        </div><!-- panel-body Finish -->

                        <div class="panel-footer">
                            <!-- panel-footer Begin -->

                            <center>
                                <!-- Center Begin -->

                                <a href="index.php?delete_slider=<?php echo $slide_id; ?>" class="pull-right">
                                    <!-- pull-right Begin -->

                                    <i class="fa fa-trash"></i> Delete

                                </a><!-- pull-right Finish -->

                                <a href="index.php?edit_slider=<?php echo $slide_id; ?>" class="pull-left">
                                    <!-- pull-right Begin -->

                                    <i class="fa fa-trash"></i> Edit

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