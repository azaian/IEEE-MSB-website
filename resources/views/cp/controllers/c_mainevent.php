<?php
if($_POST||$_GET){
    if (isset($_GET)) {
//      main site part
        if (isset($_GET['event_id'])) {
            try {
                $required = "*";
                $table_name = "event_details";
                $where = " where id=" . "'" . $_GET['event_id'] . "'";
                $dataobj = new getdata($required, $table_name, $where);
                $data = $dataobj->data;
                echo  ' <script>window.location = " events/?event_id='.$_GET['event_id'].'";</script>';
            } catch (Exception $err) {
                echo $err->getMessage();
            }
        } //        cp part

}}else{
    try {
        $required="*";
        $table_name = "events";
        $where = "";
        $limit="limit 6";
        $dataobj = new getmultidata($required,$table_name, $where,$limit);
        $data = $dataobj->data;
        include_once "all.php";
    } catch (Exception $err) {
        echo $err->getMessage();
    }
}