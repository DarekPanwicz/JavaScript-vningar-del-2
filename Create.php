<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 24.02.18
 * Time: 12:52
 */
declare(strict_types=1);
require_once 'Base.php';
class Create extends Base
{
    public function validate($params)
    {
        // TODO: Implement validate() method.
    }

    public function createBook($params)
    {
        $this->getDB()->query(
            "INSERT INTO books
                  (id, title, author, publisher,pages)
                  VALUES (NULL, '$params->title', '$params->author' , '$params->publisher' , '$params->pages')");
    }
}
