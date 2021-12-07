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
                        
                        $contact_name = $_POST['name'];
                        
                        $contact_subject = $_POST['subject'];
                        
                        $contact_email = $_POST['email'];
                        
                        $contact_msg = $_POST['message'];
                        
                        $insert_contact = "insert into contact (contact_name,contact_subject,contact_email,contact_msg) values ('$contact_name','$contact_subject','$contact_email','$contact_msg')";

                        $run_contact = mysqli_query($con, $insert_contact);

                        if ($run_contact) {
                            
                            echo"<script>alert('Seu contato foi enviado');</script>";
                        }
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