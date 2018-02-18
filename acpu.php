<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-02-18
 * Time: 12:54
 */

class acpu
{
declare(strict_types=1);

    private  $time; //domyslny czas istnienia cachu

       public  function setTime($time)
       {
           $this->time= $time;
           return $this;

       }
    public  function getTime():int
    {
        $this->time;
    }


    public function add(string $key, $data): bool
    {
        apcu_store($key, $data);
    }


    public function addMulti(array $data): bool
    {
        return apcu_store($data);
    }


    public function get(string $key)
    {

    }


    public function delete(string $key)
    {

    }


    public function clearAll(string $key)
    {

    }
}