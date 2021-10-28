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

                <i class="fa fa-dashboard"></i> Dashboard / View Product Category

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

                    <i class="fa fa-tags fa-fw"></i> View Product Categories

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

                                <th> Product Id</th>
                                <th> Product Category Title</th>
                                <th> Product Category Image</th>
                                <th> Product Category Top</th>
                                <th> Edit Product Category </th>
                                <th> Delete Product Category </th>

                            </tr><!-- tr Finish -->

                        </thead><!-- thead Finish -->

                        <tbody>
                            <!-- tbody Begin -->

                            <?php

                                $i = 0;

                                $get_p_cats = "select * from product_categories";

                                $run_p_cats = mysqli_query($con, $get_p_cats);

                                while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

                                    $p_cat_id = $row_p_cats['p_cat_id'];

                                    $p_cat_title = $row_p_cats['p_cat_title'];

                                    $p_cat_top = $row_p_cats['p_cat_top'];

                                    $p_cat_image = $row_p_cats['p_cat_image'];

                                    $i++;


                                ?>

                            <tr>
                                <!-- tr Begin -->
                                <td><?php echo $i; ?></td>
                                <td><?php echo $p_cat_title; ?></td>
                                <td><img src="p_cat_image/<?php echo $p_cat_image; ?>" width="70px" height="70px"
                                        alt=""></td>
                                <td><?php echo $p_cat_top; ?></td>
                                <td>
                                    <a href="index.php?delete_p_cat=<?php echo $p_cat_id; ?>">

                                        <i class="fa fa-trash-o"></i> Delete

                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?edit_p_cat=<?php echo $p_cat_id; ?>">

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