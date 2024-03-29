<?php

session_start();

$active = 'Cart';

include("includes/db.php");
include("functions/functions.php");
?>

<?php

if (isset($_GET['pro_id'])) {

    $product_id = $_GET['pro_id'];

    $get_product = "select * from products where product_id = '$product_id'";

    $run_product = mysqli_query($con, $get_product);

    $row_product = mysqli_fetch_array($run_product);

    $p_cat_id = $row_product['p_cat_id'];

    $pro_title = $row_product['product_title'];

    $pro_price = $row_product['product_price'];

    $pro_desc = $row_product['product_desc'];

    $pro_img1 = $row_product['product_img1'];

    $pro_img2 = $row_product['product_img2'];

    $pro_img3 = $row_product['product_img3'];

    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

    $run_p_cat = mysqli_query($con, $get_p_cat);

    $row_p_cat = mysqli_fetch_array($run_p_cat);

    $p_cat_title = $row_p_cat['p_cat_title'];

    $pro_label = $row_product['product_label'];

    $pro_sale_price = $row_product['product_sale'];

    if ($pro_label == "sale") {

        $product_price = "<del> $$pro_price</del>";

        $product_sale_price = " | $ $pro_sale_price ";
    } else {

        $product_price = "$$pro_price ";

        $product_sale_price = " ";
    }

    if ($pro_label == "") {
    } else {

        $product_label = "
        
            <a href='#' class='label $pro_label'>
            
                <div class='theLabel'> $pro_label </div>
                <div class='labelBackground'>  </div>


            </a>
        
        
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="customer/js/checklogin.js"></script>
    <script src="js/checkregister.js"></script>

</head>

<body>


    <div id="navbar" class="navbar navbar-default">
        <!-- navbar navbar-default Begin -->

        <div class="container">
            <!-- container Begin -->

            <div class="navbar-header">
                <!-- navbar-header Begin -->

                <a href="index.php" class="navbar-brand home">
                    <!-- navbar-brand home Begin -->

                    <img src="images/logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                    <img src="images/mobile-logo.png" alt="M-dev-Store Logo Mobile" class="visible-xs">

                </a><!-- navbar-brand home Finish -->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                    <span class="sr-only">Toggle Navigation</span>

                    <i class="fa fa-align-justify"></i>

                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

                    <span class="sr-only">Toggle Search</span>

                    <i class="fa fa-search"></i>

                </button>

            </div><!-- navbar-header Finish -->

            <div class="navbar-collapse collapse" id="navigation">
                <!-- navbar-collapse collapse Begin -->

                <div class="padding-nav">
                    <!-- padding-nav Begin -->

                    <ul class="nav navbar-nav left">
                        <!-- nav navbar-nav left Begin -->

                        <li class="<?php if ($active == 'Home') {
                                        echo "active";
                                    } ?>">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="<?php if ($active == 'Shop') {
                                        echo "active";
                                    } ?>">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li class="<?php if ($active == 'Account') {
                                        echo "active";
                                    } ?>">

                            <?php
                            if (!isset($_SESSION['customer_email'])) {

                                echo "<a href='checkout.php'> My Account </a>";
                            } else {

                                echo "<a href='checkout.php?my_orders'> My Account </a>";
                            }
                            ?>
                        </li>
                        <li class="<?php if ($active == 'Cart') {
                                        echo "active";
                                    } ?>">
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li class="<?php if ($active == 'Contact') {
                                        echo "active";
                                    } ?>">
                            <a href="contact.php">Contact Us</a>
                        </li>

                    </ul><!-- nav navbar-nav left Finish -->

                </div><!-- padding-nav Finish -->

                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <!-- btn navbar-btn btn-primary Begin -->

                    <i class="fa fa-shopping-cart"></i>

                    <span><?php items(); ?> Items In Your Cart</span>

                </a><!-- btn navbar-btn btn-primary Finish -->

                <div class="navbar-collapse collapse right">
                    <!-- navbar-collapse collapse right Begin -->

                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse"
                        data-target="#search">
                        <!-- btn btn-primary navbar-btn Begin -->

                        <span class="sr-only">Toggle Search</span>

                        <i class="fa fa-search"></i>

                    </button><!-- btn btn-primary navbar-btn Finish -->

                </div><!-- navbar-collapse collapse right Finish -->

                <div class=" <?php if ($active != 'Shop') {
                                    echo 'collapse';
                                } ?> clearfix" id="search">
                    <!-- collapse clearfix Begin -->

                    <form method="get" action="shop.php" class="navbar-form">
                        <!-- navbar-form Begin -->

                        <div class="input-group">
                            <!-- input-group Begin -->

                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                            <span class="input-group-btn">
                                <!-- input-group-btn Begin -->

                                <button type="submit" name="search" value="Search" class="btn btn-primary">
                                    <!-- btn btn-primary Begin -->

                                    <i class="fa fa-search"></i>

                                </button><!-- btn btn-primary Finish -->

                            </span><!-- input-group-btn Finish -->

                        </div><!-- input-group Finish -->

                    </form><!-- navbar-form Finish -->

                </div><!-- collapse clearfix Finish -->

            </div><!-- navbar-collapse collapse Finish -->

        </div><!-- container Finish -->

    </div><!-- navbar navbar-default Finish -->

    <div id="content">
        <!-- #content Begin -->
        <div class="container">
            <!-- container Begin -->
            <div class="col-md-12">
                <!-- col-md-12 Begin -->

                <ul class="breadcrumb">
                    <!-- breadcrumb Begin -->
                    <li>
                        <a href="index.php" class="link-breadcrumb">Home</a>
                    </li>
                    <li>
                        <a href="#" class="link-breadcrumb">Shop</a>
                    </li>

                    <li>
                        <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>" class="link-breadcrumb"><?php echo $p_cat_title; ?></a>
                    </li>
                    <li> <a href="#" class="link-breadcrumb"><?php echo $pro_title; ?></a> </li>
                </ul><!-- breadcrumb Finish -->

            </div><!-- col-md-12 Finish -->

            <div class="col-md-12">
                <!-- col-md-12 Begin -->
                <div id="productMain" class="row">
                    <!-- row Begin -->
                    <div class="col-sm-6">
                        <!-- col-sm-6 Begin -->
                        <div id="mainImage">
                            <!-- #mainImage Begin -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- carousel slide Begin -->
                                <ol class="carousel-indicators">
                                    <!-- carousel-indicators Begin -->
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol><!-- carousel-indicators Finish -->

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center><img class="img-responsive"
                                                src="admin_area/product_images/<?php echo $pro_img1; ?>"
                                                alt="Product 3-a">
                                        </center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive"
                                                src="admin_area/product_images/<?php echo $pro_img2; ?>"
                                                alt="Product 3-b">
                                        </center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive"
                                                src="admin_area/product_images/<?php echo $pro_img3; ?>"
                                                alt="Product 3-c">
                                        </center>
                                    </div>
                                </div>

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                    <!-- left carousel-control Begin -->
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a><!-- left carousel-control Finish -->

                                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                    <!-- right carousel-control Begin -->
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a><!-- right carousel-control Finish -->

                            </div><!-- carousel slide Finish -->
                        </div><!-- mainImage Finish -->

                        <?php echo $product_label ?>


                    </div><!-- col-sm-6 Finish -->

                    <div class="col-sm-6">
                        <!-- col-sm-6 Begin -->
                        <div>
                            <!-- box Begin -->
                            <h1 class="text-center title-product"> <?php echo $pro_title; ?> </h1>

                            <?php add_cart(); ?>

                            <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal"
                                method="post">
                                <!-- form-horizontal Begin -->
                                <div class="form-group text-center">
                                    <!-- form-group Begin -->
                                    <label for="" class="col-md-5 control-label title-product">Products Quantity</label>

                                    <div class="col-md-7">
                                        <!-- col-md-7 Begin -->
 
                                        <select name="product_qty" id="" class="form-control">
                                            <!-- select Begin -->
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select><!-- select Finish -->
                                    </div><!-- col-md-7 Finish -->

                                </div><!-- form-group Finish -->

                                <div class="form-group">
                                    <!-- form-group Begin -->
                                    <label for="" class="col-md-5 control-label title-product">Product Size</label>

                                    <div class="col-md-7">
                                        <!-- col-md-7 Begin -->

                                        <select name="product_size" class="form-control" required
                                            oninput="setCustomValidity('')"
                                            oninvalid="setCustomValidity('Must pick 1 size for the product')">
                                            <!-- form-control Begin -->
                                            <!-- form-control Begin -->

                                            <option>Select a Size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>

                                        </select><!-- form-control Finish -->

                                    </div><!-- col-md-7 Finish -->
                                </div><!-- form-group Finish -->

                                <p class="price price-2"><?php echo $product_price;
                                                    echo  $product_sale_price; ?></p>

                                <p class="text-center buttons text-button"><button class="btn btn-primary btn-primary i fa fa-shopping-cart">
                                       <span class="text-button inline"> Add to
                                        cart</span></button></p>

                            </form><!-- form-horizontal Finish -->

                        </div><!-- box Finish -->

                        <div class="row" id="thumbs">
                            <!-- row Begin -->

                            <div class="col-xs-4">
                                <!-- col-xs-4 Begin -->
                                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                    <!-- thumb Begin -->
                                    <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 1"
                                        class="img-responsive">
                                </a><!-- thumb Finish -->
                            </div><!-- col-xs-4 Finish -->

                            <div class="col-xs-4">
                                <!-- col-xs-4 Begin -->
                                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                    <!-- thumb Begin -->
                                    <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 2"
                                        class="img-responsive">
                                </a><!-- thumb Finish -->
                            </div><!-- col-xs-4 Finish -->

                            <div class="col-xs-4">
                                <!-- col-xs-4 Begin -->
                                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                    <!-- thumb Begin -->
                                    <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product 4"
                                        class="img-responsive">
                                </a><!-- thumb Finish -->
                            </div><!-- col-xs-4 Finish -->

                        </div><!-- row Finish -->

                    </div><!-- col-sm-6 Finish -->


                </div><!-- row Finish -->

                <div class="box" id="details">
                    <!-- box Begin -->

                    <h4>Product Details</h4>

                    <p>

                        <?php echo $pro_desc; ?>

                    </p>

                    <h4>Size</h4>

                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                    </ul>

                    <hr>

                </div><!-- box Finish -->

                <div id="row same-heigh-row">
                    <!-- #row same-heigh-row Begin -->
                    <div class="col-md-3 col-sm-6">
                        <!-- col-md-3 col-sm-6 Begin -->
                        <div class="box same-height headline">
                            <!-- box same-height headline Begin -->
                            <h3 class="text-center">Products You Maybe Like</h3>
                        </div><!-- box same-height headline Finish -->
                    </div><!-- col-md-3 col-sm-6 Finish -->

                    <?php

                    $get_products = "select * from products order by rand() LIMIT 0,3";

                    $run_products = mysqli_query($con, $get_products);

                    while ($row_products = mysqli_fetch_array($run_products)) {

                        $pro_id = $row_products['product_id'];

                        $pro_title = $row_products['product_title'];

                        $pro_price = $row_products['product_price'];

                        $pro_sale_price = $row_products['product_sale'];

                        $pro_img1 = $row_products['product_img1'];

                        $pro_label = $row_products['product_label'];

                        $manufacturer_id = $row_products['manufacturer_id'];

                        $get_manufacturer = "select * from manufacturers where manufacturer_id = '$manufacturer_id'";

                        $run_manufacturer = mysqli_query($db, $get_manufacturer);

                        $row_manufacturer = mysqli_fetch_array($run_manufacturer);

                        $manufacturer_title = $row_manufacturer['manufacturer_title'];

                        if ($pro_label == "sale") {

                            $product_price = "<del> $$pro_price</del>";

                            $product_sale_price = "| $ $pro_sale_price ";
                        } else {

                            $product_price = "$$pro_price ";

                            $product_sale_price = " ";
                        }

                        if ($pro_label == "") {
                        } else {

                            $product_label = "
                            
                                <a href='#' class='label $pro_label'>
                                
                                    <div class='theLabel'> $pro_label </div>
                                    <div class='labelBackground'>  </div>
                
                
                                </a>
                            
                            
                            ";
                        }

                        echo "
                        
                        <div class='col-md-3 col-sm-6 center-responsive'>
                        
                            <div class='product'>
                            
                                <a href='details.php?pro_id=$pro_id'>
                                
                                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                                
                                </a>
                                
                                <div class='text'>
                                
                                <center>
                
                                    <p class='btn btn-primary'> $manufacturer_title </p>
                
                                </center>
                
                                    <h3>
                            
                                        <a href='details.php?pro_id=$pro_id'>
                
                                            $pro_title
                
                                        </a>
                                    
                                    </h3>
                                    
                                    <p class='price'>
                                    
                                        $product_price  $product_sale_price
                                    
                                    </p>
                                    
                                    <p class='button'>
                                    
                                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                
                                            View Details
                
                                        </a>
                                    
                                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                
                                            <i class='fa fa-shopping-cart'></i> Add to Cart
                
                                        </a>
                                    
                                    </p>
                                
                                </div>
                
                                $product_label
                            
                            </div>
                        
                        </div>
                        
                        ";
                    }

                    ?>

                </div><!-- #row same-heigh-row Finish -->

            </div><!-- col-md-12 Finish -->

        </div><!-- container Finish -->
    </div><!-- #content Finish -->

    <?php

    include("includes/footer.php");

    ?>





</body>

</html>