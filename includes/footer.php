<div id="footer">
    <!-- #footer Begin -->
    <div class="container">
        <!-- container Begin -->
        <div class="row">
            <!-- row Begin -->
            <div class="col-sm-6 col-md-3">
                <!-- col-sm-6 col-md-3 Begin -->

                <img src="images/logo.png" alt="">

                <hr>

                <h4>Pages</h4>

                <ul>
                    <!-- ul Begin -->
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                </ul><!-- ul Finish -->

                <hr class="hidden-md hidden-lg hidden-sm">

            </div><!-- col-sm-6 col-md-3 Finish -->

            <div class="col-sm-6 col-md-3">
                <!-- col-sm-6 col-md-3 Begin -->

                <h4>Top Products Categories</h4>

                <ul>
                    <!-- ul Begin -->

                    <?php

                    $get_p_cats = "select * from product_categories";

                    $run_p_cats = mysqli_query($con, $get_p_cats);

                    while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

                        $p_cat_id = $row_p_cats['p_cat_id'];

                        $p_cat_title = $row_p_cats['p_cat_title'];

                        echo "

                            <li>

                                <a href='shop.php?p_cat_id'>

                                    $p_cat_title

                                </a>

                            </li>


                            ";
                    }

                    ?>

                </ul><!-- ul Finish -->

                <hr class="hidden-md hidden-lg">

            </div><!-- col-sm-6 col-md-3 Finish -->

            <div class="col-sm-6 col-md-3">
                <!-- col-sm-6 col-md-3 Begin -->

                <h4>Fale Conosco </h4>


                <ul>
                    <li><a href="#">+55 11 9999-9999</a></li>
                    <li><a href="#">contato.multirec@multirec.com.br</a></li>
                </ul>

                <a href="contact.php">Nossa Página De Contato</a>

                <hr class="hidden-md hidden-lg">

            </div><!-- col-sm-6 col-md-3 Finish -->

            <div class="col-sm-6 col-md-3">

                <h4>Notícias</h4>

                <p class="text-muted">
                    Fique por dentro das nossas novidades
                </p>

                <form action="" method="post">
                    <!-- form begin -->
                    <div class="input-group">
                        <!-- input-group begin -->

                        <input type="text" class="form-control" name="email">

                        <span class="input-group-btn">
                            <!-- input-group-btn begin -->

                            <input type="submit" value="subscribe" class="btn btn-default">

                        </span><!-- input-group-btn Finish -->

                    </div><!-- input-group Finish -->
                </form><!-- form Finish -->

                <hr>

                <h4>Redes Sociais</h4>

                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>

            </div>
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->


<div id="copyright">
    <!-- #copyright Begin -->
    <div class="container">
        <!-- container Begin -->
        <div class="col-md-6">
            <!-- col-md-6 Begin -->

            <p class="pull-left">&copy; 2022 Multirec All Rights Reserve</p>

        </div><!-- col-md-6 Finish -->

    </div><!-- container Finish -->
</div><!-- #copyright Finish -->

<script src="js/bootstrap/jquery-331.min.js"></script>
<script src="js/bootstrap/bootstrap-337.min.js"></script>