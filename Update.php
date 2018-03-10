<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 24.02.18
 * Time: 12:53
 */
declare(strict_types=1);
require_once 'Base.php';
class Update extends Base
{
    private $id = null;
    private $title = null;
    private $author = null;
    private $ISBN = null;
    private $publisher = null;
    private $pages = null;
    private $cover = null;
    private $year = null;
    private $copies = null;
    const covers = ['hard', 'soft'];

    public function validate($params)
    {
        if (isset($params->id) && $params->id > 0) {
            $this->setId($params->id);
        } else {
            echo "Wrong ID";
            return null;
        }

        if (isset($params->title)) {
            $this->setTitle(addslashes($params->title));
        }

        if (isset($params->author)) {
            $this->setAuthor(addslashes($params->author));
        }

        if (isset($params->ISBN)) {
            if (mb_strlen($params->ISBN) === 13) {
                $this->setISBN(addslashes($params->ISBN));
            } else {
                echo "Wrong ISBN";
                return null;
            }
        }

        if (isset($params->publisher)) {
            $this->setPublisher(addslashes($params->publisher));
        }

        if (isset($params->pages)) {
            if ($params->pages > 0 && is_int($params->pages)) {
                $this->setPages($params->pages);
            } else {
                echo "Wrong number of pages";
                return null;
            }
        }

        if (isset($params->year)) {
            if ($params->year > 1800 && $params->year < 2018) {
                $this->setYear($params->year);
            } else {
                echo "Wrong year.";
                return null;
            }
        }

        if (isset($params->cover)) {
            if (!in_array($params->cover, self::covers)) {
                echo "Cover should be soft or hard.";
                return null;
            } else {
                $this->setCover($params->cover);
            }
        }

        if (isset($params->copier)) {
            if ($params->copies > 0 && is_int($params->copies)) {
                $this->setCopies($params->copies);
            } else {
                echo "Wrong number of pages";
                return null;
            }
        }
    }

    public function updateBook()
    {
        $query = "UPDATE books SET ";
        $updatedFileds = [];
        if(isset($this->title)){
            array_push($updatedFileds, "title = '$this->title'");
        }
        if(isset($this->author)){
            array_push($updatedFileds, "author = '$this->author'");
        }
        if(isset($this->ISBN)){
            array_push($updatedFileds, "ISBN = '$this->ISBN'");
        }
        if(isset($this->year)){
            array_push($updatedFileds, "year = '$this->year'");
        }
        if(isset($this->publisher)){
            array_push($updatedFileds, "publisher = '$this->publisher'");
        }
        if(isset($this->pages)){
            array_push($updatedFileds, "pages = '$this->pages'");
        }
        if(isset($this->year)){
            array_push($updatedFileds, "year = '$this->year'");
        }
        if(isset($this->cover)){
            array_push($updatedFileds, "cover = '$this->cover'");
        }
        if(isset($this->copies)){
            array_push($updatedFileds, "copies = '$this->copies'");
        }
        $query .= join(", ", $updatedFileds) . " ";

        $query .= "WHERE id = $this->id";

        echo $query;
        //echo $query;

        $this->getDB()->query($query);
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param null $copies
     */
    public function setCopies($copies)
    {
        $this->copies = $copies;
    }

    /**
     * @param null $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param null $ISBN
     */
    public function setISBN($ISBN)
    {
        $this->ISBN = $ISBN;
    }

    /**
     * @param null $publisher
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * @param null $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @param null $pages
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
    }

    /**
     * @param null $cover
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
    }

    private function setYear($year)
    {
        $this->year = $year;
    }
}
