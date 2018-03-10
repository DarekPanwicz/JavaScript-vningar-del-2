<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 24.02.18
 * Time: 12:54
 */
declare(strict_types=1);
abstract class Base
{
    private static $_db;

    abstract public function validate($params);

    /**
     * @return mysqli
     */
    public function getDB():mysqli
    {
        if(!self::$_db) {
            self::$_db = new mysqli('127.0.0.1', 'dajmos008', 'vegeta11', 'bookstore');
        }

        return self::$_db;
    }
}
