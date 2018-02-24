<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-02-24
 * Time: 12:54
 */

abstract class Base
{
    abstract public function validate();

}

public function getDB()
{
    //inicjalizacja polaczenia z baza
    $mysqli = new mysqli('127.0.0.1', 'dajmos008', 'vegeta11', 'bookstore');
    return $mysqli;
}