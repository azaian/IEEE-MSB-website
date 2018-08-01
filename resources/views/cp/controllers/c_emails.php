<?php

if (isset($_POST)) {
    if (isset($_POST['emails'])){
        if ($_POST['emails'] == "sendmail") {


            $headers = 'From: ' . $_POST['email'] . "\r\n" .
                'Reply-To: ' . $_POST['email'] . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            $text=str_replace(array(";","'","--")," . ",$_POST['text'] );
            $email_to="info@ieee-msb.org";
            @mail($email_to, $_POST['subject'], $_POST['text'], $headers);
            echo"<script>alert('email was sent')</script>";
            echo  ' <script>window.location = "../contact us/";</script>';
            header("location:../contact us/");
        }
    }
}