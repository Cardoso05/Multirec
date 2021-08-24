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

                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="Contact Us"></a>
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

    <div class="container" id="slider">

        <div class="col-md-12">

            <div class="carousel slide" id="myCarousel" data-ride="carousel">

                <ol class="carousel-indicators">

                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>

                </ol>

                <div class="carousel-inner">

                    <div class="item active">

                        <img src="admin_area/slides_images/slide-1.jpg" alt="Slider Image 1">

                    </div>

                    <div class="item">

                        <img src="admin_area/slides_images/slide-2.jpg" alt="Slider Image 2">

                    </div>


                    <div class="item">

                        <img src="admin_area/slides_images/slide-3.jpg" alt="Slider Image 3">

                    </div>


                    <div class="item">

                        <img src="admin_area/slides_images/slide-4.jpg" alt="Slider Image 4">

                    </div>

                </div>

                <a href="#myCarousel" class="left carousel-control" data-slide="prev">

                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>

                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">

                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>

                </a>


            </div>

        </div>

    </div>

    <div id="advantages">

        <div class="container">

            <div class="same-height-row">

                <div class="col-sm-4">

                    <div class="box same-height">

                        <div class="icon">

                            <i class="fa fa-heart"></i>

                        </div>

                        <h3><a href="#">Best Offer</a></h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget eros commodo</p>

                    </div>

                </div>



                <div class="col-sm-4">

                    <div class="box same-height">

                        <div class="icon">

                            <i class="fa fa-tag"></i>

                        </div>

                        <h3><a href="#">Best Prices</a></h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget eros commodo</p>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="box same-height">

                        <div class="icon">

                            <i class="fa fa-thumbs-up"></i>

                        </div>

                        <h3><a href="#">100% Original </a></h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget eros commodo,</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div id="hot">

        <div class="box">

            <div class="container">

                <div class="col-md-12">

                    <h2>
                        Our Latest Products
                    </h2>

                </div>

            </div>

        </div>

    </div>


    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

</body>

</html>