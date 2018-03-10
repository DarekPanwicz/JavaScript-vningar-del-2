<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 24.02.18
 * Time: 12:52
 */
declare(strict_types=1);
require_once 'Base.php';
class Read extends Base
{

    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function validate($params)
    {
        // TODO: Implement validate() method.
    }

    public function get(): array
    {
        $result = $this->getDB()->query("SELECT * FROM books WHERE id = $this->id");
        $results = [];
        while ($row = $result->fetch_assoc()) {
            array_push($results, $row);
        }

        return $results;
    }
}