<?php
class getmultidata extends classes{

//    private $event_name;
    private $table_name;
    public $data;
    private $where;
    private $required;

    function __construct($required,$table_name,$where)
    {   $this->required=$required;
        $this->table_name=$table_name;
        $this->where=$where;


        $this->connect_db();
        $this->query();
        $this->close_db();

    }
    private function query()
    {
        $query="select $this->required from  $this->table_name $this->where order by 'id'  ";

        if(!$sql=mysqli_query($this->database->db,$query))
        {
            throw new Exception("Error can not get the data from $this->table_name table");
        }else
        {

            $num=mysqli_num_rows($sql);

            while ( $num>0) {

                $this->data[]=mysqli_fetch_array($sql);

                $num--;

            }

        }
        return $this->data;


    }

}