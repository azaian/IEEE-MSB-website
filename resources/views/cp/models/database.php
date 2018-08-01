<?php


class database
{

    private $host;
    private $user;
    private $password;
    private $database;
    public $db;
    function __construct()
    {
        $info = new database_info();

        $this->host = $info->host;
        $this->user = $info->user;
        $this->password = $info->password;
        $this->database = $info->database;

        $this->connect();
    }

    private function connect()
    {
        $this->db = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error());
        }
    }

    function close()
    {
        mysqli_close($this->db);
    }

}


?>