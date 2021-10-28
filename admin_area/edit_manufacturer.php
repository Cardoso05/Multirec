<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>
<?php
    if (isset($_GET['edit_manufacturer'])) {


        $edit_manufacturer = $_GET['edit_manufacturer'];
        $get_manufacturer = "select * from manufacturers where manufacturer_id='$edit_manufacturer'";
        $run_manufacturer = mysqli_query($con, $get_manufacturer);
        $row_manufacturer = mysqli_fetch_array($run_manufacturer);


        $m_id = $row_manufacturer['manufacturer_id'];
        $m_title = $row_manufacturer['manufacturer_title'];
        $m_top = $row_manufacturer['manufacturer_top'];
        $m_image = $row_manufacturer['manufacturer_image'];
    }



    ?>
<div class="row">
    <!-- row 1 begin-->

    <div class="col-lg-12">
        <!-- col-lg-12 begin-->

        <ol class="breadcrumb">
            <!-- breadcrumb begin-->

            <li>

                <i class="fa fa-dashboard"></i> Dashboard / Update Manufacturer

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

                    <i class="fa fa-money fa-fw"></i> Update Manufacturer

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

                            Manufacturer Title

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <input type="text" name="manufacturer_title" class="form-control"
                                value="<?php echo $m_title ?>">

                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->

                            Chosse As Top Manufacturer

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->
                            <?php if ($m_top == "yes") {
                                    echo "
                                <input checked type='radio' name='manufacturer_top' value='yes'>
                                <label for=''>Yes</label>
    
                                <input type='radio' name='manufacturer_top' value='no'>
                                <label for=''>No</label> ";
                                } else {
                                    echo "
                                    <input type='radio' name='manufacturer_top' value='yes'>
                                    <label for=''>Yes</label>
        
                                    <input checked type='radio' name='manufacturer_top' value='no'>
                                    <label for=''>No</label> ";
                                } ?>



                        </div><!-- col-md-6 Finish-->

                    </div><!-- form-group Finish -->


                    <div class="form-group">
                        <!-- form-group begin -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 Begin-->
                            Manufacturer Image

                        </label><!-- control-label col-md-3 Finish-->

                        <div class="col-md-6">
                            <!-- col-md-6 Begin-->

                            <input type="file" name="manufacturer_image" class="form-control">

                            <br>

                            <img src="manufacturer_images/<?php echo $m_image; ?>" width="70px" height="70px" alt="">

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

        $manufacturer_title = $_POST['manufacturer_title'];

        $manufacturer_top = $_POST['manufacturer_top'];

        if (is_uploaded_file($_FILES['manufacturer_image']['tmp_name'])) {

            $manufacturer_image = $_FILES['manufacturer_image']['name'];

            $tmp_name = $_FILES['manufacturer_image']['tmp_name'];

            move_uploaded_file($tmp_name, "manufacturer_images/$manufacturer_image");

            $update_manufacturer = "update manufacturers set manufacturer_title='$manufacturer_title',manufacturer_top='$manufacturer_top',manufacturer_image='$manufacturer_image' where manufacturer_id ='$m_id' ";

            $run_manufacturer = mysqli_query($con, $update_manufacturer);

            if ($run_manufacturer) {
                echo "<script>alert('Your new Manufacturer has been edited')</script>";
                echo "<script>window.open('index.php?view_manufacturers','_self')</script>";
            }
        } else {
            $update_manufacturer = "update manufacturers set manufacturer_title='$manufacturer_title',manufacturer_top='$manufacturer_top' where manufacturer_id ='$m_id' ";

            $run_manufacturer = mysqli_query($con, $update_manufacturer);

            if ($run_manufacturer) {

                echo "<script>alert('Your new Manufacturer has been edited')</script>";
                echo "<script>window.open('index.php?view_manufacturers','_self')</script>";
            }
        }
    }


    ?>


<?php
}
?>