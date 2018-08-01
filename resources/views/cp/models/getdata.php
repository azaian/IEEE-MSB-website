<?php
class getdata extends classes{

    private $event_name;
    private $table_name;
    private $where;
    public $data;
    private $required;



function __construct($required, $table_name,$where)
{
    $this->table_name=$table_name;
    $this->required=$required;
//    $this->event_name=$requisted_data;
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

                $this->data=mysqli_fetch_array($sql);

                $num--;

            }

        }
        return $this->data;


}

}