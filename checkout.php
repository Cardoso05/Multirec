<?php
$active = 'Account';
include("includes/header.php")

?>

<div id="content">
    <!-- #content Begin -->
    <div class="container">
        <!-- container Begin -->
        <div class="col-md-12">
            <!-- col-md-12 Begin -->


        </div><!-- col-md-12 Finish -->


        <div class="col-md-12">
            <!-- col-md-12 Begin -->

            <?php

            if (!isset($_SESSION['customer_email'])) {

                include("customer/customer_login.php");
            } else {

                include("payment_options.php");
            }

            ?>


        </div><!-- col-md-12 Finish -->

    </div><!-- container Finish -->

</div><!-- #content Finish -->

<?php

include("includes/footer.php");

?>





</body>

</html>



?>