<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

    if (isset($_GET['delete_p_cat'])) {

        $delete_id = $_GET['delete_p_cat'];

        $delete_p_cat = "delete from product_categories where p_cat_id = $delete_id";

        $run_delete = mysqli_query($con, $delete_p_cat);

        if ($run_delete) {

            echo "<script> alert('Uma das suas categoria de produtos foi deletada');</script>";
            echo "<script> window.open('index.php?view_p_cats','_self')</script>";
        }
    }




}