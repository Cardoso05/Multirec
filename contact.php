<?php
$active = 'Contact';
include("includes/header.php")

?>

<div id="content">
    <!-- #content Begin -->
    <div class="container">
        <!-- container Begin -->
       


        <div class="col-md-12">
            <!-- col-md-12 Begin -->

            <div class="box">
                <!-- box Begin -->

                <div class="box-header">
                    <!-- box-header Begin -->

                    <center>
                        <!-- center Begin -->

                        <h2>Contate-nos</h2>

                        <p class="text-muted">
                            <!-- text-muted Begin -->

                            Se você tem alguma dúvida sobre nosso produto ou serviço  
                            

                        </p><!-- text-muted Finish -->

                    </center><!-- center Finish -->

                    <form action="contact.php" method="post">
                        <!-- form Begin -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Nome</label>

                            <input type="text" class="form-control" name="name" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Email</label>

                            <input type="text" class="form-control" name="email" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Assunto</label>

                            <input type="text" class="form-control" name="subject" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label>Mensagem</label>

                            <textarea name="message" class="form-control"></textarea>

                        </div><!-- form-group Finish -->

                        <div class="text-center">
                            <!-- text-center Begin -->

                            <button type="submit" name="submit" class="btn btn-primary">

                                <i class="fa fa-user-md"></i> Enviar Mensagem

                            </button>

                        </div><!-- text-center Finish -->

                    </form><!-- form Finish -->

                    <?php

                    if (isset($_POST['submit'])) {
                        //admin receives message with this

                        $sender_name = $_POST['name'];

                        $sender_email = $_POST['email'];

                        $sender_subject = $_POST['subject'];

                        $sender_message = $_POST['message'];

                        $receiver_email = "matheuszekka@gmail.com";

                        mail($receiver_email, $sender_email, $sender_subject, $sender_message);

                        /// auto reply to sender with this ///

                        $email = $_POST['email'];

                        $subject = "Welcome to my website";

                        $msg = "Thanks for sending us message. ASAP we will replay your message";

                        $from = "matheuszekka@gmail.com";

                        mail($email . $subject, $msg, $from);

                        echo "<h2>Your message has sent sucessfully </h2>";
                    }

                    ?>

                </div><!-- box-header Finish -->

            </div><!-- box Finish -->

        </div><!-- col-md-12 Finish -->

    </div><!-- container Finish -->
</div><!-- #content Finish -->

<?php

include("includes/footer.php");

?>





</body>

</html>