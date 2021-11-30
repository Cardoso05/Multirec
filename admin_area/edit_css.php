<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>
<?php

    $file = "../styles/style.css";
    if (file_exists($file)) {

        $data = file_get_contents($file);
    }

    ?>
<div class="row">
    <!-- row 1 Begin-->

    <div class="col-lg-12">
        <!--col-lg-12 Begin -->

        <ol class="breadcrumb">
            <!-- breadcrumb Begin -->

            <lo class="active">
                <!-- active Begin -->

                <i class="fa fa-dashboard"></i> Dashboard / CSS Editor

            </lo><!-- active Finish -->

        </ol><!-- breadcrumb Finish -->

    </div><!-- col-lg-12 Finish -->

</div><!-- row 1 Finish -->


<div class="row">
    <!-- row 1 Begin-->

    <div class="col-lg-12">
        <!-- col-lg-12 Begin-->

        <div class="panel panel-default">
            <!-- panel panel-default Begin-->

            <div class="panel-heading">
                <!-- panel-heading Begin-->

                <h3 class="panel-title">
                    <!-- panel-title Begin-->

                    <i class="fa fa-tags"></i> CSS Editor

                </h3><!-- panel-title Begin-->

            </div><!-- panel-heading Finish-->

            <div class="panel-body">
                <!-- panel-heading Begin-->

                <form action="" class="form-horizontal" method="POST">
                    <!-- form-hoziontal Begin-->

                    <div class="form-group">
                        <!-- form-group Begin-->

                        <div class="col-lg-12">
                            <!-- col-lg-12 Begin-->

                            <!-- form-control begin -->

                            <textarea name="newdata" id="" rows="15" class="form-control">
                                <?php echo $data; ?> 

                            </textarea><!-- form-control finish -->

                        </div><!-- col-lg-12 Finish-->

                        <div class="form-group">
                            <!-- form-group Begin-->

                            <label class="control-label col-md-3"></label>

                            <div class="col-md-6">
                                <!-- col-md-6 Begin-->

                                <input type="submit" name="update" value="Update CSS"
                                    class="form-control btn btn-primary">

                            </div><!-- col-md-6 Finish-->

                        </div><!-- form-group Finish-->

                    </div><!-- form-group Finish-->

                </form><!-- form-hoziontal finish-->

            </div><!-- panel-body Finish-->

        </div><!-- panel panel-default Finish-->

    </div><!-- col-lg-12 Finish-->

</div><!-- row 1 Finish-->
<?php


    if (isset($_POST['update'])) {


        $newdata = $_POST['newdata'];

        $handle = fopen($file, "w");
        fwrite($handle, $newdata);
        fclose($handle);

        echo "<script>alert('Seu CSS foi editado')</script>";
        echo "<script>window.open('index.php?edit_css','_self')</script>";
    }

    ?>
<?php
}
?>