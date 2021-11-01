<?php

$active = 'Shop';
include("includes/header.php");

?>

<?php if (!isset($_GET['user_query'])) {


?>

<div id="content">
    <!-- #content Begin -->
    <div class="container">
        <!-- container Begin -->
        <div class="col-md-12">
            <!-- col-md-12 Begin -->

            <ul class="breadcrumb">
                <!-- breadcrumb Begin -->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Shop
                </li>
            </ul><!-- breadcrumb Finish -->

        </div><!-- col-md-12 Finish -->

        <div class="col-md-3">
            <!-- col-md-3 Begin -->

            <?php

                include("includes/sidebar.php");

                ?>

        </div><!-- col-md-3 Finish -->

        <div class="col-md-9">
            <!-- col-md-9 Begin -->

            <div class='box'>
                <!-- box Begin -->
                <h1>Shop</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur
                    illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis
                    veritatis perferendis, quaerat!
                </p>
            </div><!-- box Finish -->

            <div id="products" class="row">
                <!-- row Begin -->

                <?php getProducts(); ?>

            </div><!-- row Finish -->

            <center>
                <ul class="pagination">
                    <!-- pagination Begin -->

                    <?php getPaginator(); ?>

                </ul><!-- pagination Finish -->
            </center>

        </div><!-- col-md-9 Finish -->

        <div id="wait" style="position:absolute;top:40%;left:45%;padding: 200px 100px 100px 100px;"></div>

    </div><!-- container Finish -->
</div><!-- #content Finish -->

<?php

    include("includes/footer.php");

    ?>


<?php } else { ?>
<div id="content">
    <!-- #content Begin -->
    <div class="container">
        <!-- container Begin -->
        <div class="col-md-12">
            <!-- col-md-12 Begin -->

            <ul class="breadcrumb">
                <!-- breadcrumb Begin -->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Shop
                </li>
            </ul><!-- breadcrumb Finish -->

        </div><!-- col-md-12 Finish -->

        <div class="col-md-3">
            <!-- col-md-3 Begin -->

            <?php

                include("includes/sidebar.php");

                ?>

        </div><!-- col-md-3 Finish -->

        <div class="col-md-9">
            <!-- col-md-9 Begin -->

            <div class='box'>
                <!-- box Begin -->
                <h1>Shop</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur
                    illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis
                    veritatis perferendis, quaerat!
                </p>
            </div><!-- box Finish -->

            <div id="products">
                <!-- row Begin -->

                <?php getProductsQuery(); ?>

            </div><!-- row Finish -->

            <center>
                <ul class="pagination">
                    <!-- pagination Begin -->

                    <?php getPaginator(); ?>

                </ul><!-- pagination Finish -->
            </center>

        </div><!-- col-md-9 Finish -->

        <div id="wait" style="position:absolute;top:40%;left:45%;padding: 200px 100px 100px 100px;"></div>

    </div><!-- container Finish -->
</div><!-- #content Finish -->

<?php

    include("includes/footer.php");

    ?>



<?php } ?>


</body>

</html>