<?php


class Login extends classes
{


    private $userName;
    private $password;

    function __construct($userName, $password)
    {
        $this->setData($userName, $password);
        $this->connect_db();
        if ($this->getData()) {
            return true;
        }
    }


    private function setData($userName, $password)
    {
        // remove ' ; -- to avoid sql injection
        $this->userName = str_replace(array("'", ";", "--"), "", $userName);
        $this->password = str_replace(array("'", ";", "--"), "", $password);


    }


    private function getData()
    {

        $q = "select * from users where username='$this->userName' AND password='$this->password' ";

        $sql = mysqli_query($this->database->db, $q);

        if (mysqli_num_rows($sql) > 0) {

            $this->close_db();
            return TRUE;
        } else {
            throw new Exception("the password or email is invalid");

        }

    }


}


?>