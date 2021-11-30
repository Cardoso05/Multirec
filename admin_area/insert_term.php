<?php
if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Insert Products </title>

</head>

<body class="container">

    <div class="row">
        <!-- row Begin -->

        <div class="col-lg-12">
            <!-- col-lg-12 Begin -->


            <ol class="breadcrumb">
                <!-- breadcrumb Begin -->

                <li class="active">
                    <!-- active Begin -->

                    <i class="fa fa-dashboard"></i> Dashboard / Inserir Termo

                </li><!-- active Finish -->

            </ol><!-- breadcrumb Finish -->

        </div><!-- col-lg-12 Finish -->

    </div><!-- row Finish -->

    <div class="row">
        <!-- row Begin -->

        <div class="col-lg-12">
            <!-- col-lg-12 Begin -->

            <div class="panel panel-default">
                <!-- panel panel-default Begin -->

                <div class="panel-heading">
                    <!-- panel-heading Begin -->

                    <h3 class="panel-title">
                        <!-- panel-title Begin -->

                        <i class="fa fa-money fa-fw"></i> Inserir Termo

                    </h3><!-- panel-title Finish -->

                </div><!-- panel-heading Finish -->

            </div><!-- panel panel-default Finish -->

            <div class="panel-body">
                <!-- panel-body Begin-->

                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <!-- form-horizontal Begin-->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">Titulo Termo</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="text" name="term_title" class="form-control" required>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">Termo Link</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="text" name="term_link" class="form-control" required>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <!-- form-horizontal Begin-->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">Termo Descrição</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <textarea name="term_desc" cols="19" rows="6" class="form-control"></textarea>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="submit" name="submit" value="Create Term" class="btn btn-primary form-control">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->


                </form><!-- form-horizontal Finish-->

            </div><!-- panel-body Finish-->

        </div><!-- col-lg-12 Finish -->

    </div><!-- row Finish -->

    <script src="js/tinymce/tinymce.min.js"></script>
    <script>
    tinymce.init({
        selector: 'textarea'
    });
    </script>
</body>

</html>
<?php }


if (isset($_POST['submit'])) {

    $term_title = $_POST['term_title'];
    $term_link = $_POST['term_link'];
    $term_desc = $_POST['term_desc'];

    $insert_term = "insert into terms (term_title, term_link, term_desc) values ('$term_title','$term_link','$term_desc')";

    $run_term = mysqli_query($con, $insert_term);

    if ($run_term) {

        echo "<script>alert('Seu termo foi inserido')</script>";

        echo "<script>window.open('index.php?view_terms','_self')</script>";
    }
}


?>