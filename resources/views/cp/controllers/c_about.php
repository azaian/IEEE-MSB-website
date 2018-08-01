<?php
if ($_POST) {
    if ($_POST['volunteers'] == "add") {
        try {
            $_FILES['image']['name'][0] = "volunteer-" . time() . $_FILES['image']['name'][0];
            $Data['image'] = $_FILES['image']['name'][0];
            $Data = array_merge($Data, $_POST);
            $validex = array("png", "jpg","jpeg");
            $maxsize = 5242880;

            $dir = "../resources/images/volunteers/";
            $uploadobj = new upload($validex, $maxsize, $_FILES['image'], $dir);
            if ($uploadobj == true) {
                $table_name = "volunteers";
                $dataobj = new insertdata($Data, $table_name, "volunteers");
                if ($dataobj == true) {
                    echo "<script>alert('data entered successfully');</script>";
                    echo  ' <script>window.location = "?volunteers=addvolunteers";</script>';
                    //header("Location: ../cp/?volunteers=volunteershome");
                }
            }
        } catch (Exception $err) {
            echo $err->getMessage();


        }
    } elseif (@$_POST['volunteers'] == 'edit') {
        try {
         $Data=array();
            $validex = array("png", "jpg","jpeg");
            $maxsize = 5242880;
            $where = "where id = '" . $_POST['id'] . "'";
            if ($_FILES['image']['name'][0] == "") {
                $uploadobj = true;
            } else {

                $_FILES['image']['name'][0] = "volunteer-" . time() . $_FILES['image']['name'][0];
                $dir="../resources/images/volunteers/";
                $uploadobj = new upload($validex, $maxsize, $_FILES['image'],$dir);
                $Data['image'] = $_FILES['image']['name'][0];
            }
            if ($uploadobj == true) {
                $table_name = "volunteers";
               
                $Data = array_merge($Data, $_POST);
           
                $dataobj = new editbyid($Data, $table_name, $where, "volunteers" /*breakon*/);

                if ($dataobj == true ) {
                    echo "<script>alert('data edited successfully');</script>";
                    echo  ' <script>window.location = "?volunteers=volunteershome";</script>';
                //    header("Location: ../cp/?volunteers=volunteershome");
                }
            }


        } catch (Exception $err) {
            echo $err->getMessage();
        }
    }

} elseif ($_GET) {

    if ($_GET['volunteers'] == "addvolunteers") {
        include_once "views/v_addvolunteer.blade.php";
    } elseif ($_GET['volunteers'] == "volunteershome") {
        try {
            $required = "*";
            $table_name = "volunteers";
            $where = "";
            $limit="";
            $dataobj = new getmultidata($required, $table_name, $where,$limit);
            $data = $dataobj->data;
            include_once "views/v_volunteershome.blade.php";
        } catch (Exception $err) {
            echo $err->getMessage();
        }

    }elseif ($_GET['volunteers'] == 'volunteerdelete') {
        try {
            $where = "where id = '" . $_GET['id'] . "'";
            $table_name = "volunteers";
            $dataobj = new deletebyid($_GET['id'], $table_name, $where);
            unlink("../resources/images/volunteers/" . $_GET['image']);
            if ($dataobj == true ) {
                echo  ' <script>window.location = "?volunteers=volunteershome";</script>';
             //   header("Location: ../cp/?volunteers=volunteershome");
            }
        } catch (Exception $err) {
            echo $err->getMessage();
        }
    }elseif ($_GET['volunteers'] == 'checkimages') {

        try {

            $where = "";
            $required = "image";
            $table_name = "volunteers";
            $limit="";
            $dataobj = new getmultidata($required,$table_name, $where, $limit);
            $data1 = $dataobj->data;

            $data2=array();
            $dir="../resources/images/volunteers/";
            $dataobj=new extraimages($data1,$data2,$dir);
             echo  $dataobj->no. " images has been deleted";

        } catch (Exception $err) {
            echo $err->getMessage();
        }
    }elseif ($_GET['volunteers'] == 'editvolunteer') {
        try {
            $required = "*";
            $where = "where id = '" . $_GET['id'] . "'";
            $table_name = "volunteers";
            $dataobj = new getdata($required, $table_name, $where);
            $data = $dataobj->data;
            include "views/v_editvolunteer.blade.php";
        } catch (Exception $err) {
            echo $err->getMessage();
        }}

} else {
    try {
        $required="*";
        $table_name = "volunteers";
        $where = "";
        $limit="";
        $dataobj = new getmultidata($required,$table_name, $where, $limit);
        $data = $dataobj->data;
        include_once "all.php";
    } catch (Exception $err) {
        echo $err->getMessage();
    }

}