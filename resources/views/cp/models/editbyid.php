<?php



class editbyid extends classes
{
    private $where;
    private $data;
    private $tablename;
    private $breakon;

    function __construct($data,$tablename,$where,$breakon)
    {
        $this->where=$where;
        $this->data=$data;
        $this->tablename=$tablename;
        $this->breakon=$breakon;

        $this->connect_db();
        $this->edit();
        $this->close_db();
    }


    private function edit()
    {

        foreach ($this->data as $key => $value) {
            if ($key == $this->breakon) {
                break;
            }

            $string[]= $key."="."'".$value."'";
        }

        $sets=implode($string, " , ");



        $query="update $this->tablename set  $sets $this->where";
        if($sql=mysqli_query($this->database->db,$query))
        {
            return true;
        }
        else
        {
            throw new Exception("Error in edithing data<br>".mysqli_error($this->database->db));
            return false;

        }
    }
}

?>