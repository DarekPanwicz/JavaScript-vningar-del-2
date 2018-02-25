<?php

require_once('Base.php');

class Read extends Base
{

    private $id =0;

    public function __construct(int $id)
    {
        $this->id = (int) $id;
    }

    public function validate()
    {

    }

    public function setId(int $id)
    {
        $this->id=$id;
    }

    public function get()
    {
        $result= $this->getDB()->query("SELECT * FROM books WHERE id = ". $this->id);
        $temp = [];

        var_dump($result->fetch_row());
        while($row= $result->fetch_row())
        {
            $temp[]= $row;

        }
        return $temp;
    }
}