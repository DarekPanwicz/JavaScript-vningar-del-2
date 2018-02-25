<?php

require_once('Base.php');
class Create extends  Base
{

    private $title;

    public function __construct(string $title)
    {
        $this->title = (string) $title;
    }


    public function validate()
    {
        // TODO: Implement validate() method.
        $_POST['title']= addslashes($_POST['title']);
    }

    public function addBook(string $title)
    {
        $this->getDB()->query("INSERT INTO books (id,title) VALUES(null,'Smok')");
        $title=addslashes($title);
    }
}