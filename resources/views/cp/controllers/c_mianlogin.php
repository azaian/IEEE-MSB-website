<?php
if ($_POST||$_GET) {

    if (isset($_POST['submit']) && $_POST['submit'] == 'login') {
        try {
            $loginobj = new login($_POST['username'], $_POST['password']);
            if ($loginobj == true) {

                $_SESSION['username'] = $_POST['username'];
                echo  ' <script>window.location = "events/../";</script>';
//          echo "<script>location.reload();</script>";
            }

        } catch (Exception $err) {
            $val = $err->getMessage();
            echo "<script>alert('$val');</script>";
        }
    }

} else {
    include 'cp/views/mainview.php';
}

?>