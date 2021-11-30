<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<?php

    if (isset($_GET['edit_p_cat'])) {

        $edit_p_cat_id = $_GET['edit_p_cat'];

        $edit_p_cat_query = "select * from product_categories where p_cat_id='$edit_p_cat_id'";

        $run_edit = mysqli_query($con, $edit_p_cat_query);

        $row_edit = mysqli_fetch_array($run_edit);

        $p_cat_id = $row_edit['p_cat_id'];

        $p_cat_title = $row_edit['p_cat_title'];

        $p_cat_top = $row_edit['p_cat_top'];

        $p_cat_image = $row_edit['p_cat_image'];
    }
    ?>
<div class="row">
    <!-- row 1 begin-->

    <div class="col-lg-12">
        <!-- col-lg-12 begin-->

        <ol class="breadcrumb">
            <!-- breadcrumb begin-->

            <li>

                <i class="fa fa-dashboard"></i> Dashboard / Update Categoria do Produto

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

                    <i class="fa fa-money fa-fw"></i> Update Categoria do Produto

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

                            Titulo da Categoria do Produto

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <input type="text" name="p_cat_title" class="form-control"
                                value="<?php echo $p_cat_title ?>">

                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->

                            Escolha se o Produto da Categoria vai ficar no topo

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->
                            <?php if ($p_cat_top == "yes") {
                                    echo "
                                <input checked type='radio' name='p_cat_top' value='yes'>
                                <label for=''>Yes</label>
    
                                <input type='radio' name='p_cat_top' value='no'>
                                <label for=''>No</label> ";
                                } else {
                                    echo "
                                    <input type='radio' name='p_cat_top' value='yes'>
                                    <label for=''>Yes</label>
        
                                    <input checked type='radio' name='p_cat_top' value='no'>
                                    <label for=''>No</label> ";
                                } ?>



                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group Finish -->


                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->
                            Categoria do Produto Imagem

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <input type="file" name="p_cat_image" class="form-control">

                            <br>

                            <img src="p_cat_image/<?php echo $p_cat_image; ?>" width="70px" height="70px" alt="">

                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <input type="submit" value="Update" name="submit" class="form-control btn btn-primary">

                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group begin -->

                </form><!-- form-horizontal Finish -->

            </div><!-- panel-body Finish -->

        </div><!-- panel panel-default Finish -->

    </div><!-- col-lg-12 Finish-->

</div><!-- row 2 Finish -->

<?php



    if (isset($_POST['submit'])) {

        $p_cat_title = $_POST['p_cat_title'];

        $p_cat_top = $_POST['p_cat_top'];

        if (is_uploaded_file($_FILES['p_cat_image']['tmp_name'])) {

            $p_cat_image = $_FILES['p_cat_image']['name'];

            $tmp_name = $_FILES['p_cat_image']['tmp_name'];

            move_uploaded_file($tmp_name, "p_cat_image/$p_cat_image");

            $update_p_cat = "update product_categories set p_cat_title='$p_cat_title',p_cat_top='$p_cat_top',p_cat_image='$p_cat_image' where p_cat_id ='$p_cat_id' ";

            $run_p_cat = mysqli_query($con, $update_p_cat);

            if ($run_p_cat) {
                echo "<script>alert('Sua categoria do produto foi editada')</script>";
                echo "<script>window.open('index.php?view_p_cats','_self')</script>";
            }
        } else {
            $update_p_cat = "update product_categories set p_cat_title='$p_cat_title',p_cat_top='$p_cat_top' where p_cat_id ='$p_cat_id' ";

            $run_p_cat = mysqli_query($con, $update_p_cat);

            if ($run_p_cat) {

                echo "<script>alert('Sua categoria do produto foi editada')</script>";
                echo "<script>window.open('index.php?view_p_cats','_self')</script>";
            }
        }
    }



    ?>


<?php
}
?>