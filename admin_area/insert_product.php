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

                    <i class="fa fa-dashboard"></i> Dashboard / Inserir Produto

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

                        <i class="fa fa-money fa-fw"></i> Inserir Produto

                    </h3><!-- panel-title Finish -->

                </div><!-- panel-heading Finish -->

            </div><!-- panel panel-default Finish -->

            <div class="panel-body">
                <!-- panel-body Begin-->

                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <!-- form-horizontal Begin-->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">Produto Titulo</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="text" name="product_title" class="form-control" required>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->


                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">Fabricante</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <select name="manufacturer" class="form-control">
                                <!-- form-control Begin -->

                                <option selected disabled>Selecione Fabricante</option>

                                <?php

                                    $get_manufacturer = "select * from manufacturers";
                                    $run_manufacturer = mysqli_query($con, $get_manufacturer);

                                    while ($row_manufacturer = mysqli_fetch_array($run_manufacturer)) {

                                        $manufacturer_id = $row_manufacturer['manufacturer_id'];
                                        $manufacturer_title = $row_manufacturer['manufacturer_title'];

                                        echo "

                                    <option value='$manufacturer_id'>$manufacturer_title</option>

                                    ";
                                    }

                                    ?>

                            </select><!-- form-control Finish -->

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <!-- form-horizontal Begin-->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">Categoria do Produto</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <select name="product_cat" class="form-control">
                                <!-- form-control Begin -->

                                <option selected disabled> Selecione a categoria do produto</option>

                                <?php

                                    $get_p_cats = "select * from product_categories";
                                    $run_p_cats = mysqli_query($con, $get_p_cats);

                                    while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

                                        $p_cat_id = $row_p_cats['p_cat_id'];
                                        $p_cat_title = $row_p_cats['p_cat_title'];

                                        echo "

                                    <option value='$p_cat_id'>$p_cat_title</option>

                                    ";
                                    }

                                    ?>

                            </select><!-- form-control Finish -->

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <!-- form-horizontal Begin-->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Categoria</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <select name="cat" class="form-control">
                                <!-- form-control Begin -->

                                <option selected disabled>Selecione a Categoria  </option>

                                <?php

                                    $get_cat = "select * from categories";
                                    $run_cat = mysqli_query($con, $get_cat);

                                    while ($row_cat = mysqli_fetch_array($run_cat)) {

                                        $cat_id = $row_cat['cat_id'];
                                        $cat_title = $row_cat['cat_title'];

                                        echo "

                                        <option value='$cat_id'>$cat_title</option>

                                    ";
                                    }

                                    ?>

                            </select><!-- form-control Finish -->

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">Imagem do Produto 1</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="file" name="product_img1" class="form-control" required>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">Imagem do Produto 2</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="file" name="product_img2" class="form-control" required>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">Imagem do Produto 3</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="file" name="product_img3" class="form-control" required>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">Preço Produto</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="text" name="product_price" class="form-control" required>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">Desconto</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="text" name="product_sale" class="form-control">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">Palavras Chave do Produto</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="text" name="product_keywords" class="form-control" required>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">Descrição Produto</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label">Produto Label</label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="text" name="product_label" class="form-control">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->


                    <div class="form-group">
                        <!-- form-group Begin -->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">
                            <!-- col-md-6 Begin -->

                            <input type="submit" name="submit" value="Insert Product"
                                class="btn btn-primary form-control">

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

<?php

    if (isset($_POST['submit'])) {

        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $cat = $_POST['cat'];
        $manufacturer_id = $_POST['manufacturer'];
        $product_price = $_POST['product_price'];
        $product_keywords = $_POST['product_keywords'];
        $product_desc = $_POST['product_desc'];
        $product_sale = $_POST['product_sale'];
        $product_label = $_POST['product_label'];

        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];

        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];

        move_uploaded_file($temp_name1, "product_images/$product_img1");
        move_uploaded_file($temp_name2, "product_images/$product_img2");
        move_uploaded_file($temp_name3, "product_images/$product_img3");

        $insert_product = "insert into products (p_cat_id,cat_id,manufacturer_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keywords,product_label,product_sale) values ('$product_cat','$cat','$manufacturer_id',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keywords','$product_label','$product_sale')";

        $run_product = mysqli_query($con, $insert_product);

        if ($run_product) {

            echo "<script>alert('Seu produto foi inserido');</script>";

            echo "<script>window.open('index.php?view_products','_self');</script>";
        }
    }
}
?>