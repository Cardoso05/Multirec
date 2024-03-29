<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <!-- navbar navbar-inverse navbar-fixed-top begin -->
    <div class="navbar-header">
        <!-- navbar-header begin -->

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <!-- navbar-toggle begin -->

            <span class="sr-only">Toggle Navigation</span>

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

        </button><!-- navbar-toggle finish -->

        <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>

    </div><!-- navbar-header finish -->

    <ul class="nav navbar-right top-nav">
        <!-- nav navbar-right top-nav begin -->

        <li class="dropdown">
            <!-- dropdown begin -->

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- dropdown-toggle begin -->

                <i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"></b>

            </a><!-- dropdown-toggle finish -->

            <ul class="dropdown-menu">
                <!-- dropdown-menu begin -->
                <li>
                    <!-- li begin -->
                    <a href="index.php?user_profile=<?php echo $admin_id; ?>">
                        <!-- a href begin -->

                        <i class="fa fa-fw fa-user"></i> Profile

                    </a><!-- a href finish -->
                </li><!-- li finish -->

                <li>
                    <!-- li begin -->
                    <a href="index.php?view_products">
                        <!-- a href begin -->

                        <i class="fa fa-fw fa-envelope"></i> Produtos

                        <span class="badge"><?php echo $count_products; ?></span>

                    </a><!-- a href finish -->
                </li><!-- li finish -->

                <li>
                    <!-- li begin -->
                    <a href="index.php?view_customers">
                        <!-- a href begin -->

                        <i class="fa fa-fw fa-users"></i> Clientes

                        <span class="badge"><?php echo $count_customers; ?></span>

                    </a><!-- a href finish -->
                </li><!-- li finish -->

                <li>
                    <!-- li begin -->
                    <a href="index.php?view_cats">
                        <!-- a href begin -->

                        <i class="fa fa-fw fa-gear"></i> Categoria do Produto

                        <span class="badge"><?php echo $count_p_categories; ?></span>

                    </a><!-- a href finish -->
                </li><!-- li finish -->

                <li class="divider"></li>

                <li>
                    <!-- li begin -->
                    <a href="logout.php">
                        <!-- a href begin -->

                        <i class="fa fa-fw fa-power-off"></i> Log Out

                    </a><!-- a href finish -->
                </li><!-- li finish -->

            </ul><!-- dropdown-menu finish -->

        </li><!-- dropdown finish -->

    </ul><!-- nav navbar-right top-nav finish -->

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <!-- collapse navbar-collapse navbar-ex1-collapse begin -->
        <ul class="nav navbar-nav side-nav">
            <!-- nav navbar-nav side-nav begin -->
            <li>
                <!-- li begin -->
                <a href="index.php?dashboard">
                    <!-- a href begin -->

                    <i class="fa fa-fw fa-dashboard"></i> Dashboard

                </a><!-- a href finish -->

            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#products">
                    <!-- a href begin -->

                    <i class="fa fa-fw fa-tag"></i> Produtos
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="products" class="collapse">
                    <!-- collapse begin -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?insert_product"> Inserir Produtos </a>
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_products"> Ver Produtos </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->
            <li>
                <!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#manufacturer">
                    <!-- a href begin -->

                    <i class="fa fa-fw fa-star"></i> Fabricantes
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="manufacturer" class="collapse">
                    <!-- collapse begin -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?insert_manufacturer"> Inserir Fabricantes </a>
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_manufacturers"> Ver Fabricantes </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#p_cat">
                    <!-- a href begin -->

                    <i class="fa fa-fw fa-edit"></i> Categoria dos Produtos
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="p_cat" class="collapse">
                    <!-- collapse begin -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?insert_p_cat"> Inserir Categoria dos Produtos </a>
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_p_cats"> Ver Categoria dos Produtos </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#cat">
                    <!-- a href begin -->

                    <i class="fa fa-fw fa-book"></i> Categoria
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="cat" class="collapse">
                    <!-- collapse begin -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?insert_cat"> Inserir Categoria </a>
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_cats"> Ver Categoria </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#slides">
                    <!-- a href begin -->

                    <i class="fa fa-fw fa-gear"></i> Slides
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="slides" class="collapse">
                    <!-- collapse begin -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?insert_slide"> Inserir Slide </a>
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_slides"> Ver Slides </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#boxes">
                    <!-- a href begin -->

                    <i class="fa fa-fw fa-dropbox"></i> Boxes
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="boxes" class="collapse">
                    <!-- collapse begin -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?insert_box"> Inserir Box </a>
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_boxes"> Ver Box </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#terms">
                    <!-- a href begin -->

                    <i class="fa fa-fw fa-table"></i> Termos
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="terms" class="collapse">
                    <!-- collapse begin -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?insert_terms"> Inserir Termos </a>
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_terms"> Ver Termos </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="index.php?view_customers">
                    <!-- a href begin -->
                    <i class="fa fa-fw fa-users"></i> Ver Clientes
                </a><!-- a href finish -->
            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="index.php?view_orders">
                    <!-- a href begin -->
                    <i class="fa fa-fw fa-book"></i> Ver Pedidos
                </a><!-- a href finish -->
            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="index.php?view_payments">
                    <!-- a href begin -->
                    <i class="fa fa-fw fa-money"></i> Ver Pagamentos
                </a><!-- a href finish -->
            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="index.php?edit_css">
                    <!-- a href begin -->
                    <i class="fa fa-fw fa-pencil"></i> CSS Editor
                </a><!-- a href finish -->
            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#users">
                    <!-- a href begin -->

                    <i class="fa fa-fw fa-users"></i> Admins
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="users" class="collapse">
                    <!-- collapse begin -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?insert_user"> Inserir Admins </a>
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_users"> Ver Admin </a>
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?user_profile=<?php echo $admin_id; ?>"> Edite Seu Profile </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="logout.php">
                    <!-- a href begin -->
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a><!-- a href finish -->
            </li><!-- li finish -->

        </ul><!-- nav navbar-nav side-nav finish -->
    </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->

</nav><!-- navbar navbar-inverse navbar-fixed-top finish -->
<?php
}
?>