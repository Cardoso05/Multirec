<?php

$active = 'Home';

?>
<?php

session_start();

include("includes/db.php");
include("functions/functions.php");

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src='js/shop.js'></script>

</head>

<body>

    <div id="navbar" class="navbar navbar-dark ">
        <!-- navbar navbar-default Begin -->

        <div class="container background">
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

                <div class="padding-nav ">
                    <!-- padding-nav Begin -->

                    <ul class="nav navbar-nav  ">
                        <!-- nav navbar-nav left Begin -->

                        <li class="<?php if ($active == 'Home') echo "active"; ?>">
                            <a href="index.php">Inicio</a>
                        </li>
                        <li class="<?php if ($active == 'Shop') echo "active"; ?>">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li class="<?php if ($active == 'Account') echo "active"; ?>">

                            <?php

                            if (!isset($_SESSION['customer_email'])) {

                                echo "<a href='checkout.php'>Conta</a>";
                            } else {

                                echo "<a href='customer/my_account.php?my_orders'>Conta</a>";
                            }

                            ?>

                        </li>
                        <li class="<?php if ($active == 'Cart') echo "active"; ?>">
                            <a href="cart.php">Carrinho</a>
                        </li>
                        <li class="<?php if ($active == 'Contact') echo "active"; ?>">
                            <a href="contact.php">Contato</a>
                        </li>

                    </ul><!-- nav navbar-nav left Finish -->

                </div><!-- padding-nav Finish -->

                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <!-- btn navbar-btn btn-primary Begin -->

                    <i class="fa fa-shopping-cart"></i>

                    <span><?php items(); ?> Itens no Carrinho</span>

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

                <div class="<?php if ($active != 'Shop') {
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

    <div class="container" id="slider">
        <!-- container Begin -->

        <div class="col-md-12">
            <!-- col-md-12 Begin -->

            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <!-- carousel slide Begin -->

                <ol class="carousel-indicators">
                    <!-- carousel-indicators Begin -->

                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>

                </ol><!-- carousel-indicators Finish -->

                <div class="carousel-inner">
                    <!-- carousel-inner Begin -->

                    <?php

                    $get_slides = "select * from slider LIMIT 0,1";

                    $run_slider = mysqli_query($con, $get_slides);

                    while ($row_slides = mysqli_fetch_array($run_slider)) {
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        $slide_url = $row_slides['slide_url'];

                        echo "
                                
                                <div class='item active'>
                                    <a href='$slide_url'>
                                        <img src='admin_area/slides_images/$slide_image'>
                                    </a>
                                </div>


                            ";
                    }


                    $get_slides = "select * from slider LIMIT 1,3";
                    $run_slider = mysqli_query($con, $get_slides);

                    while ($row_slides = mysqli_fetch_array($run_slider)) {
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        $slide_url = $row_slides['slide_url'];

                        echo "
                                
                            <div class='item '>
                                <a href='$slide_url'>
                                    <img src='admin_area/slides_images/$slide_image'>
                                </a>
                            </div>


                            ";
                    }

                    ?>

                </div><!-- background Finish -->

                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <!-- left carousel-control Begin -->

                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>

                </a><!-- left carousel-control Finish -->

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <!-- left carousel-control Begin -->

                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>

                </a><!-- left carousel-control Finish -->

            </div><!-- carousel slide Finish -->

        </div><!-- col-md-12 Finish -->

    </div><!-- container Finish -->


    <div id="hot">
        <!-- #hot Begin -->



        <div class="container">
            <!-- container Begin -->

            <div class="col-md-12">
                <!-- col-md-12 Begin -->

                <h2>
                    Ultimos Produtos
                </h2>

            </div><!-- col-md-12 Finish -->

        </div><!-- container Finish -->


    </div><!-- #hot Finish -->

    <div id="content" class="container">
        <!-- container Begin -->

        <div class="row">
            <!-- row Begin -->

            <?php getPro(); ?>

        </div><!-- row Finish -->

    </div><!-- container Finish -->

    <?php

    include("includes/footer.php");

    ?>





</body>

</html>