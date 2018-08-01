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
<!--event item-->
<div class="col-md-4 col-sm-4 col-xs-10 col-xs-offset-1 col-sm-offset-0 ">
    <div class="col-xs-12 event">
        <img src="resources/images/events/th-stc-open.png" class="img-responsive">

        <div class="sub-event">
            <h3>STC opening</h3>

            <div class="link">
                <a href="#">See More <i class="fa fa-search"></i>
                </a>
            </div>
        </div>
    </div>
</div>
