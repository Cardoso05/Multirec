<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="styles/style.css">



    <title>M-Dev Store</title>
</head>


<body>

    <div id="top">

        <div class="container">

            <div class="col-md-6 offer">
                <a class="btn btn-success btn-sm">Welcome</a>
                <a href="checkout.php">4 Items in your cart | Total price: R$300 </a>
            </div>

            <div class="col-md-6">
                <ul class="menu">
                    <li><a href="customer_register.php">Register</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                    <li><a href="cart.php">Go to Cart</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>

        </div>

    </div>

    <div id="navbar" class="navbar navbar-default">

        <div class="container">

            <div class="navbar-header">

                <a href="index.php" class="navbar-brand home">

                    <img src="images/ecom-store-logo.png" alt="" class="hidden-xs">

                    <img src="images/ecom-store-logo-mobile.png" alt="" class="visible-xs">

                </a>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                    <span class="sr-only">Toggle Navigation</span>

                    <i class="fa fa-align-justify"></i>

                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

                    <span class="sr-only">Toggle Search</span>

                    <i class="fa fa-search"></i>


                </button>

            </div>

            <div class="navbar-collapse collapse" id="navigation">

                <div class="padding-nav">

                    <ul class="nav navbar-nav left">

                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>

                    </ul>

                </div>

                <a href="cart.php" class="btn navbar-btn btn-primary right">

                    <i class="fa fa-shopping-cart"></i>
                    <span>4 items In Your Cart</span>

                </a>

                <div class="navbar-collapse collapse right">

                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse"
                        data-target="#search">

                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>

                    </button>

                </div>

                <div class="collapse clearfix" id="search">

                    <form method="get" action="results.php" class="navbar-form">

                        <div class="input-group">
                            <input class="form-control" name="user_query" placeholder="Search" required></input>

                            <span class="input-group-btn">

                                <button type="submit" name="search" value="search" class="btn btn-primary">

                                    <i class="fa fa-search"></i>

                                </button>

                            </span>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <div id="content">

        <div class="container">

            <div class="col-md-12">

                <ul class="breadcrumb">

                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        Shop
                    </li>

                </ul>

            </div>

            <div class="col-md-3">

                <?php 
                
                        include("includes/sidebar.php");
            
                    ?>

            </div>

            <div class="col-md-9">

                <div class="box">

                    <h1>
                        Shop
                    </h1>

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s
                    </p>

                </div>

                <div class="row">

                    <div class="col-md-4 col-sm-6 center-responsive">

                        <div class="product">

                            <a href="details.php">

                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg"
                                    alt="Product 1">

                            </a>

                            <div class="text">

                                <h3>

                                    <a href="details.php">
                                        M-dev Woman T-Shirt
                                    </a>

                                </h3>

                                <p class="price">
                                    $30
                                </p>

                                <p class="button">

                                    <a href="details.php" class="btn btn-default">
                                        View Details
                                    </a>

                                    <a href="details.php" class="btn btn-primary">

                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>

                                    </a>

                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="col-md-4 col-sm-6 center-responsive">

                        <div class="product">

                            <a href="details.php">

                                <img class="img-responsive" src="admin_area/product_images/product-2.jpg"
                                    alt="Product2">

                            </a>

                            <div class="text">

                                <h3>

                                    <a href="details.php">
                                        M-dev Woman T-Shirt
                                    </a>

                                </h3>

                                <p class="price">
                                    $30
                                </p>

                                <p class="button">

                                    <a href="details.php" class="btn btn-default">
                                        View Details
                                    </a>

                                    <a href="details.php" class="btn btn-primary">

                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>

                                    </a>

                                </p>

                            </div>

                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 center-responsive">

                        <div class="product">

                            <a href="details.php">

                                <img class="img-responsive" src="admin_area/product_images/product-3b.jpg"
                                    alt="Product 1">

                            </a>

                            <div class="text">

                                <h3>

                                    <a href="details.php">
                                        M-dev Woman T-Shirt
                                    </a>

                                </h3>

                                <p class="price">
                                    $30
                                </p>

                                <p class="button">

                                    <a href="details.php" class="btn btn-default">
                                        View Details
                                    </a>

                                    <a href="details.php" class="btn btn-primary">

                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>

                                    </a>

                                </p>

                            </div>

                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 center-responsive">

                        <div class="product">

                            <a href="details.php">

                                <img class="img-responsive" src="admin_area/product_images/product-4a.jpg"
                                    alt="Product 1">

                            </a>

                            <div class="text">

                                <h3>

                                    <a href="details.php">
                                        M-dev Woman T-Shirt
                                    </a>

                                </h3>

                                <p class="price">
                                    $30
                                </p>

                                <p class="button">

                                    <a href="details.php" class="btn btn-default">
                                        View Details
                                    </a>

                                    <a href="details.php" class="btn btn-primary">

                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>

                                    </a>

                                </p>

                            </div>

                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 center-responsive">

                        <div class="product">

                            <a href="details.php">

                                <img class="img-responsive" src="admin_area/product_images/product-5a.jpg"
                                    alt="Product 1">

                            </a>

                            <div class="text">

                                <h3>

                                    <a href="details.php">
                                        M-dev Woman T-Shirt
                                    </a>

                                </h3>

                                <p class="price">
                                    $30
                                </p>

                                <p class="button">

                                    <a href="details.php" class="btn btn-default">
                                        View Details
                                    </a>

                                    <a href="details.php" class="btn btn-primary">

                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>

                                    </a>

                                </p>

                            </div>

                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 center-responsive">

                        <div class="product">

                            <a href="details.php">

                                <img class="img-responsive" src="admin_area/product_images/product-6a.jpg"
                                    alt="Product 1">

                            </a>

                            <div class="text">

                                <h3>

                                    <a href="details.php">
                                        M-dev Woman T-Shirt
                                    </a>

                                </h3>

                                <p class="price">
                                    $30
                                </p>

                                <p class="button">

                                    <a href="details.php" class="btn btn-default">
                                        View Details
                                    </a>

                                    <a href="details.php" class="btn btn-primary">

                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>

                                    </a>

                                </p>

                            </div>

                        </div>
                    </div>

                    <div class="center">
                        <ul class="pagination">
                            <li><a href="#">First Page</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Last Page</a></li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php 
                
            include("includes/footer.php");
        
        ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

</body>

</html>