<?php
require_once('Base.php');
require_once('Create.php');
require_once('Read.php');
require_once('Delete.php');
require_once('Update.php');

$method= $_SERVER["REQUEST_METHOD"];

switch ($method) {

        case 'GET':
            $read = new Read($_GET['id']);
            echo $read->get();
            $_GET;


        case 'POST':
            $_POST;
            $create= new Create();


        case 'PUT':
            $params = file_get_contents('php://input');
            $update = new Update();


        case 'DELETE':

           // $delete = new Delete($_GET['id']);
           // echo $delete->delete();
            //var_dump(urldecode($_GET['title']));
            //Url decode daje sie zawsze gdy jest string ktorego chcemy zdekodowac tak by pasowal w bazie
            $delete = new Delete($_GET['id'],urldecode($_GET['title']));
            $delete->deleteByTitle();






        break;

        default:
        echo "error";


}