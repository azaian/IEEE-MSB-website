<?php

/**
 *  insertdata
 */
class insertdata extends classes
{
    private $data;
    private $tablename;
    private $keys;
    private $values;
    private $breakon;

    function __construct($data, $table_name, $breakon)
    {
        if (is_array($data)) {
            $this->data = $data;
            $this->check();
            $this->tablename = $table_name;
            $this->breakon = $breakon;
        } else {
            throw new Exception("data must be an array");

        }
        $this->connect_db();
        $this->addData();
        $this->close_db();

    }

    private
    function addData()
    {


        foreach ($this->data as $key => $value) {
            if ($key == $this->breakon) {
                break;
            }

            $this->keys[] = $key;
            $this->values[] = $value;
        }
        $table_keys = implode($this->keys, ",");
        $x=implode($this->values, "','");
        $table_values ="'" . $x . "'";


//	echo $table_values . $table_keys;

        $query = "insert into $this->tablename ($table_keys) values ($table_values)";


        if ($sql = mysqli_query($this->database->db, $query)) {
            return true;
        } else {
            echo "<script>alert('this is error database'+" . mysqli_error($this->database->db) . ");</script>";
            throw new Exception("Error in inserting data <br>".mysqli_error($this->database->db));


        }

    }

    private
    function check()
    {
        foreach ($this->data as $key =>$value) {
            $this->data[$key] = str_replace(array("'", ";", "--",), " ", $this->data[$key]);
        }
    }


}

?>