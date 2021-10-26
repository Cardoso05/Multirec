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

                <i class="fa fa-dashboard"></i> Dashboard / View Category

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

                    <i class="fa fa-tags fa-fw"></i> View Categories

                </h3><!-- panel-title Finish -->

            </div>
            <!-- panel-heading Finish -->

            <div class="panel-body">
                <!-- panel-body begin -->

                <div class="table-responsive">
                    <!-- table-responsive begin -->

                    <table class="table table-hover table-triped table-bordered">
                        <!-- table table-hover table-triped table-borderedbegin -->

                        <thead>
                            <!-- thead begin -->

                            <tr>
                                <!-- tr begin -->

                                <th> Category Id</th>
                                <th> Category Title</th>
                                <th> Category Top</th>
                                <th> Edit Category </th>
                                <th> Delete Category </th>

                            </tr><!-- tr Finish -->

                        </thead><!-- thead Finish -->

                        <tbody>
                            <!-- tbody Begin -->

                            <?php

                                $i = 0;

                                $get_cats = "select * from categories";

                                $run_cats = mysqli_query($con, $get_cats);

                                while ($row_cats = mysqli_fetch_array($run_cats)) {

                                    $cat_id = $row_cats['cat_id'];

                                    $cat_title = $row_cats['cat_title'];

                                    $cat_top = $row_cats['cat_top'];

                                    $i++;


                                ?>

                            <tr>
                                <!-- tr Begin -->
                                <td><?php echo $i; ?></td>
                                <td><?php echo $cat_title; ?></td>
                                <td><?php echo $cat_top; ?></td>
                                <td>
                                    <a href="index.php?delete_cat=<?php echo $cat_id; ?>">

                                        <i class="fa fa-trash-o"></i> Delete

                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?edit_cat=<?php echo $cat_id; ?>">

                                        <i class="fa fa-pencil"></i> Edit

                                    </a>
                                </td>

                            </tr><!-- tr Finish -->
                            <?php } ?>

                        </tbody><!-- tbody Finish -->

                    </table><!-- table Finish -->

                </div><!-- table-responsive Finish -->

            </div><!-- panel-body Finish -->

        </div><!-- panel panel-default Finish -->

    </div><!-- col-lg-12 Finish-->

</div><!-- row 2 Finish -->

<?php
}
?>