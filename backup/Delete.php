<?php

require_once('Base.php');
class Delete extends  Base
{

    private $id =0;
    private $title;

    public function __construct(int $id, string $title)
    {
        $this->id = (int) $id;
        $this->title = (string) $title;
    }

    public function validate()
    {

    }

    public function delete()
    {
        $this->getDB()->query("DELETE FROM books WHERE id = ". $this->id);

        }

    public function deleteByTitle()
    {

        $this->getDB()->query("DELETE FROM books WHERE title = '". $this->title . "'");


    }


}