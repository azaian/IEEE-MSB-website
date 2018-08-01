<?php


class upload
{

    private $validex;
    private $maxsize;
    private $file;
    private $ex;
    private $dir;

    function __construct($validex, $maxsize, $file,$dir)
    {
        if (is_array($file)) {
            $this->dir=$dir;
            $this->file = $file;
            $this->validex = $validex;
            $this->maxsize = $maxsize;


            if ($this->check() == true) {
                $this->upload();

            }
        } else {
            throw new Exception ("the array is empty");
        }


    }


    private function check()
    {
        for ($i = 0; count($this->file['size']) > $i; $i++) {

            if ($this->maxsize < $this->file['size'][$i]) {
                throw new Exception ("image size is bigger than 5 MB ");
            }
            $this->ex = strtolower(end(explode(".", $this->file['name'][$i])));

            if (!in_array($this->ex, $this->validex)) {
                $values = implode(" ' ", $this->validex);
                throw new Exception ("image must be $values ");
            }

        }
        return true;
    }

    private function  upload()
    {
        for ($i = 0; count($this->file['name']) > $i; $i++) {
            $dst = $this->dir . $this->file['name'][$i];
            $temp = $this->file['tmp_name'][$i];
            if (move_uploaded_file($temp, $dst) == true) {
                return true;
            } else {
                throw new Exception($temp . " uploading filed");
            }
        }
        return true;

    }


}


?>