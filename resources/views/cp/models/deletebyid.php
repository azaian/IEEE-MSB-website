<?php

/**
 *
 */
class deleteById extends classes
{
    private $id;
    private $tablename;
    private $where;

    function __construct($id, $tablename,$where)
    {
        $this->id = intval($id);
        $this->tablename = str_replace(array("'", ";", "--",), " ", $tablename);
        $this->where=$where;
        $this->connect_db();

        $this->delete();

        $this->close_db();

    }

    private function delete()
    {
        $query = "delete from $this->tablename $this->where" ;
        if (!$sql = mysqli_query($this->database->db, $query)) {

            throw new Exception("Error delete the row from $this->tablename $this->id");

        } else {
            echo '<script type="text/javascript">alert("row number ' . $this->id . ' deleted form ' .$this->tablename.' ");</script>';
            return true;
        }
    }

}

?>