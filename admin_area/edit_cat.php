<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>
<?php
    if (isset($_GET['edit_cat'])) {


        $edit_cat = $_GET['edit_cat'];
        $get_cat = "select * from categories where cat_id='$edit_cat'";
        $run_cat = mysqli_query($con, $get_cat);
        $row_cat = mysqli_fetch_array($run_cat);


        $c_id = $row_cat['cat_id'];
        $c_title = $row_cat['cat_title'];
        $c_top = $row_cat['cat_top'];
        $c_image = $row_cat['cat_image'];
    }



    ?>
<div class="row">
    <!-- row 1 begin-->

    <div class="col-lg-12">
        <!-- col-lg-12 begin-->

        <ol class="breadcrumb">
            <!-- breadcrumb begin-->

            <li>

                <i class="fa fa-dashboard"></i> Dashboard / Update Categoria

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

                    <i class="fa fa-money fa-fw"></i> Update Categoria

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

                            Categoria Titulo

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <input type="text" name="cat_title" class="form-control" value="<?php echo $c_title; ?>">

                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->

                            Escolha se a Categoria vai ficar no topo

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->
                            <?php if ($c_top == "yes") {
                                    echo "
                                <input checked type='radio' name='cat_top' value='yes'>
                                <label for=''>Yes</label>
    
                                <input type='radio' name='cat_top' value='no'>
                                <label for=''>No</label> ";
                                } else {
                                    echo "
                                    <input type='radio' name='cat_top' value='yes'>
                                    <label for=''>Yes</label>
        
                                    <input checked type='radio' name='cat_top' value='no'>
                                    <label for=''>No</label> ";
                                } ?>



                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group Finish -->


                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->
                            Categoria Imagem

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <input type="file" name="cat_image" class="form-control">

                            <br>

                            <img src="other_images/<?php echo $c_image; ?>" width="70px" height="70px" alt="">

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

        $cat_title = $_POST['cat_title'];

        $cat_top = $_POST['cat_top'];

        if (is_uploaded_file($_FILES['cat_image']['tmp_name'])) {

            $cat_image = $_FILES['cat_image']['name'];

            $tmp_name = $_FILES['cat_image']['tmp_name'];

            move_uploaded_file($tmp_name, "cat_image/$cat_image");

            $update_cat = "update categories set cat_title='$cat_title',cat_top='$cat_top',cat_image='$cat_image' where cat_id ='$c_id' ";

            $run_cat = mysqli_query($con, $update_cat);

            if ($run_cat) {
                echo "<script>alert('Sua categoria foi editada')</script>";
                echo "<script>window.open('index.php?view_cats','_self')</script>";
            }
        } else {
            $update_cat = "update categories set cat_title='$cat_title',cat_top='$cat_top' where cat_id ='$c_id' ";


            $run_cat = mysqli_query($con, $update_cat);

            if ($run_cat) {

                echo "<script>alert('Sua categoria foi editada')</script>";
                echo "<script>window.open('index.php?view_cats','_self')</script>";
            }
        }
    }


    ?>


<?php
}
?>