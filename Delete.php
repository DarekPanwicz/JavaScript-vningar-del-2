<?php

require_once('Base.php');
class Delete extends  Base
{

    private $id =0;
    private $title;

    public function __construct(int $id)
    {
        $this->id = (int) $id;
    }

    public function __construct(string $title)
    {
        $this->title = (string) $title;
    }


    public function validate()
    {

    }

    public function delete()
    {
        $result= $this->getDB()->query("DELETE FROM books WHERE id = ". $this->id);

        }

    public function deleteByTitle()
    {
        $this->getDB()->query("DELETE FROM books WHERE title = ". $this->title);

    }


}