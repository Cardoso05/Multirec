<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>
<?php

    if (isset($_GET['delete_manufacturer'])) {

        $delete_id = $_GET['delete_manufacturer'];

        $delete_manu = "delete from manufacturers where manufacturer_id = '$delete_id'";

        $run_delete = mysqli_query($con, $delete_manu);

        if ($run_delete) {

            echo "<script>alert('Um dos seus fabricantes foi deletado')</script>";

            echo "<script>window.open('index.php?view_manufacturers','_self')</script>";
        }
    }




?>
<?php
}
?>