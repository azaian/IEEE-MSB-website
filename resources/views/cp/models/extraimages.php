<?php

class extraimages
{
    private $data1;
    private $data2;
    private $dir;
    private $images;
    private $data;
    public $no=0;


    function __construct($data1, $data2, $dir)
    {

        $this->data1 = $data1;
        $this->data2 = $data2;

        $this->dir = $dir;
        $this->images = scandir($this->dir);
        $this->perpar();
        $this->unlink();
    }

    private function perpar()
    {

        for ($i = 0; count($this->data1) > $i; $i++)
        {
            $this->data[]=$this->data1[$i][0];
        }
        for ($i = 0; count($this->data2) > $i; $i++)
        {
            $this->data[]=$this->data2[$i][0];
        }

    }


    private function unlink()
    {

        for ($i = 0; count($this->images) > $i; $i++) {

            if (file_exists($this->images[$i])) {
                continue;
            }
            if (!in_array($this->images[$i], $this->data)) {
                echo $this->images[$i] . " has been deleted <br>";
                unlink($this->dir.$this->images[$i]);
                $this->no++;

            }

        }

    }
}
