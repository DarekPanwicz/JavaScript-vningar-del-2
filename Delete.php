<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 24.02.18
 * Time: 12:52
 */
declare(strict_types=1);
require_once 'Base.php';
class Delete extends Base
{
    public function validate($params)
    {
        // TODO: Implement validate() method.
    }

    public function deleteDB($id)
    {
        $this->getDB()->query("DELETE FROM books WHERE id = $id");
    }

    public function deleteByTitle($title)
    {
        $this->getDB()->query("DELETE FROM books WHERE title = '$title'");
    }
}
