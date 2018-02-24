<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-02-24
 * Time: 12:58
 */
$method= $_SERVER["REQUEST_METHOD"];

switch ($method) {
        case 'GET':
        echo 'GET';
        break;

        case 'POST':
        echo 'POST';
        break;

        case 'PUT':
        echo 'PUT';
         break;

        case 'DELETE':
        echo 'DELETE';
         break;

}