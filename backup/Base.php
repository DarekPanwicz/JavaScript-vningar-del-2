<?php


abstract class Base
{
    abstract public function validate();

    private static $_db;


public function getDB(): mysqli
{
    //inicjalizacja polaczenia z baza

    //dopisac
    if(!self::$_db){
        self::$_db = new mysqli('127.0.0.1', 'dajmos008', 'vegeta11', 'bookstore');


    }
    return self::$_db;

}

}