<?php

require_once('Base.php');

class Update extends Base

{
    private $id = 0;
    private $title = "";
    private $author = "";
    private $isbn = "";
    private $publisher = "";
    private $pages = 0;
    private $cover = "";


    const HARD_COVER = 'hard';
    const SOFT_COVER = 'soft';

    public function validate()
    {

        if (!is_int($this->id) && mb_strlen($this->id) < 0) {
            return false;
        }
        if (!is_string($this->isbn) || strlen($this->isbn) !== 13) {
            return false;
        }
        if ($this->cover !== self::HARD_COVER and $this->cover !== self::SOFT_COVER) {
            return false;
        }
        if (is_int($this->year) && $this->year > date('Y')) {
            return false;
        }
        $this->isbn = addslashes($this->isbn);
        if (mb_strlen($this->isbn) !== 13) {
            return false;
        }

        $this->title = addslashes($this->title);
        $this->author = addslashes($this->author);
        $this->publisher = addslashes($this->publisher);

        return true;
    }

    public function uppdate()
    {
        var_dump($this->validate());
        if ($this->validate()) {
            $this->getDB()->query("UPDATE books SET title ='{$this->title}' ,author ='{$this->author}' ,isbn='{$this->isbn}' ,publisher='{$this->publisher}' ,pages={$this->pages} ,cover='{$this->cover}' WHERE id = {$this->id}");
       }
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    public function setPages($pages)
    {
        $this->pages = $pages;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function setCover($cover)
    {
        $this->cover = $cover;
    }

    public function setCopies($copies)
    {
        $this->copies = $copies;
    }


}