<?php

if ($_POST || $_GET) {

    if (isset($_POST)) {
        if (@$_POST['event'] == 'add') {
            try {

                $_FILES['event_image']['name'][0] = "th-" . time() . $_FILES['event_banner']['name'][0];
                $_FILES['event_banner']['name'][0] = time() . $_FILES['event_banner']['name'][0];
                $Ddata = array("event_name" => $_POST['event_name'], "event_desc" => $_POST['event_desc'], "event_banner" => $_FILES['event_banner']['name'][0], "date" => $_POST['date'], "username" => $_POST['username']);
                $Edata = array("event_name" => $_POST['event_name'], "event_image" => $_FILES['event_image']['name'][0], "date" => $_POST['date'], "username" => $_POST['username']);

                $validex = array("png", "jpg");
                $maxsize = 5242880;
                $dir="../resources/images/events/";
                $uploadobj[] = new upload($validex, $maxsize, $_FILES['event_banner'],$dir);
                $uploadobj[] = new upload($validex, $maxsize, $_FILES['event_image'],$dir);
                if ($uploadobj[0] == true && $uploadobj[1] == true) {
                    $table_name = "event_details";
                    $dataobj[] = new insertdata($Ddata, $table_name, "event");
                    $table_name = "events";
                    $dataobj[] = new insertdata($Edata, $table_name, "event");
                    if ($dataobj[0] == true && $dataobj[1] == true) {
                        echo "<script>alert('data entered successfully');</script>";
                        echo  ' <script>window.location = "../cp/?event=eventhome";</script>';
                       // header("Location: ../cp/?event=eventhome");
                    }
                }


            } catch (Exception $err) {
                echo $err->getMessage();
            }
        }
        elseif (@$_POST['event'] == 'edit') {
            try {
                $validex = array("png", "jpg");
                $maxsize = 5242880;
                $where = "where id = '" . $_POST['id'] . "'";
                if ($_FILES['event_image']['name'][0] == "") {
                    $Ddata = array("event_name" => $_POST['event_name'], "event_desc" => $_POST['event_desc'], "date" => $_POST['date'], "username" => $_POST['username']);
                    $Edata = array("event_name" => $_POST['event_name'], "date" => $_POST['date'], "username" => $_POST['username']);
                    $uploadobj[0] = true;
                    $uploadobj[1] = true;


                } else {
                    echo $_FILES['event_image']['name'][0];
                    $_FILES['event_image']['name'][0] = "th-" . time() . $_FILES['event_banner']['name'][0];
                    $_FILES['event_banner']['name'][0] = time() . $_FILES['event_banner']['name'][0];
                    $Ddata = array("event_name" => $_POST['event_name'], "event_desc" => $_POST['event_desc'], "event_banner" => $_FILES['event_banner']['name'][0], "date" => $_POST['date'], "username" => $_POST['username']);
                    $Edata = array("event_name" => $_POST['event_name'], "event_image" => $_FILES['event_image']['name'][0], "date" => $_POST['date'], "username" => $_POST['username']);
                    $dir="../resources/images/events/";
                    $uploadobj[] = new upload($validex, $maxsize, $_FILES['event_banner'],$dir);
                    $uploadobj[] = new upload($validex, $maxsize, $_FILES['event_image'],$dir);

                }
//                , "gallery_id" => $_POST['gallery_id']
//                $Ddata = array("event_name" => $_POST['event_name'], "event_desc" => $_POST['event_desc'], "event_banner" => $_FILES['event_banner']['name'][0], "date" => $_POST['date'], "username" => $_POST['username']);
//                $Edata = array("event_name" => $_POST['event_name'], "event_image" => $_FILES['event_image']['name'][0], "date" => $_POST['date'], "username" => $_POST['username']);


                if ($uploadobj[0] == true && $uploadobj[1] == true) {
                    $table_name = "event_details";
                    $dataobj[] = new editbyid($Ddata, $table_name, $where, "event" /*breakon*/);
                    $table_name = "events";
                    $dataobj[] = new editbyid($Edata, $table_name, $where, "event" /*breakon*/);
                    if ($dataobj[0] == true && $dataobj[1] == true) {
                        echo "<script>alert('data edited successfully');</script>";
                        echo  ' <script>window.location = "../cp/?event=eventhome";</script>';
                      // header("Location: ../cp/?event=eventhome");

                    }
                }


            } catch (Exception $err) {
                echo $err->getMessage();
            }
        }

    }


//    get part
    if (isset($_GET)) {
//      main site part
        if (isset($_GET['event_id'])) {
            try {
                $required = "*";
                $table_name = "event_details";
                $where = " where id=" . "'" . $_GET['event_id'] . "'";
                $dataobj = new getdata($required, $table_name, $where);
                $data = $dataobj->data;
                include "event_details.php";

            } catch (Exception $err) {
                echo $err->getMessage();
            }
        } //        cp part
        elseif (isset($_GET['event'])) {

            if ($_GET['event'] == 'eventhome') {
                try {
                    $required="*";
                    $table_name = "event_details";
                    $where = "";
                    $limit="";
                    $dataobj = new getmultidata($required,$table_name, $where, $limit);
                    $data = $dataobj->data;
                    include_once "views/v_eventshome.blade.php";
                } catch (Exception $err) {
                    echo $err->getMessage();
                }
            } elseif ($_GET['event'] == 'addevent') {
                include "views/v_addevent.blade.php";

            } elseif ($_GET['event'] == 'eventdelete') {
                try {
                    $where = "where id = '" . $_GET['id'] . "'";
                    $table_name = "events";
                    $dataobj[] = new deletebyid($_GET['id'], $table_name, $where);
                    unlink("../resources/images/events/th-" . $_GET['banner']);
                    $table_name = "event_details";
                    $dataobj[] = new deletebyid($_GET['id'], $table_name, $where);
                    unlink("../resources/images/events/" . $_GET['banner']);

                    if ($dataobj[0] == true && $dataobj[1] == true) {
                        echo "<script>alert('data deleted successfully');</script>";
                        header("Location: ../cp/?event=eventhome");
                    }
                } catch (Exception $err) {
                    echo $err->getMessage();
                }
            } elseif ($_GET['event'] == 'editevent') {
                try {
                    $required = "*";
                    $where = "where id = '" . $_GET['id'] . "'";
                    $table_name = "event_details";
                    $dataobj = new getdata($required, $table_name, $where);
                    $data = $dataobj->data;
                    $data['event_image'] = "th-" . $data['event_banner'];
                    include "views/v_editevent.blade.php";
                } catch (Exception $err) {
                    echo $err->getMessage();
                }
            } elseif ($_GET['event'] == 'checkimages') {

                try {

                    $where = "";
                    $required = "event_banner";
                    $table_name = "event_details";
                    $limit="";
                    $dataobj = new getmultidata($required,$table_name, $where, $limit);
                    $data1 = $dataobj->data;
                    $required = "event_image";
                    $table_name = "events";
                    $limit="";
                    $dataobj = new getmultidata($required,$table_name, $where, $limit);
                    $data2=$dataobj->data;
                    $dir="../resources/images/events/";
                    $dataobj=new extraimages($data1,$data2,$dir);
                    echo  $dataobj->no. " images has been deleted";
                } catch (Exception $err) {
                    echo $err->getMessage();
                }
            }


        }
    }
} else {

    try {
        $required="*";
        $table_name = "events";
        $where = "";
        $limit="";
        $dataobj = new getmultidata($required,$table_name, $where, $limit);
        $data = $dataobj->data;
        include_once "all.php";
    } catch (Exception $err) {
        echo $err->getMessage();
    }

}