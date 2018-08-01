<?php
if ($_POST||$_GET) {

    if (isset($_POST['submit']) && $_POST['submit'] == 'login') {
        try {
            $loginobj = new login($_POST['username'], $_POST['password']);
            if ($loginobj == true) {
                session_start();
                $_SESSION['username'] = $_POST['username'];
                echo  ' <script>window.location = "../cp/";</script>';
              // header('Location:../cp/');
            }

        } catch (Exception $err) {
            $val = $err->getMessage();
            echo "<script>alert('$val');</script>";
        }
    }

} else {
    include 'views/v_login.blade.php';
}

?>