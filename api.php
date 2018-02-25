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

            $delete = new Delete($id);
            $this ->getDB()->("DELETE FROM books WHERE id = $id");
            echo "ok" ;


            public function deleteByTitle (string $title)
        {
            $delete = new Delete($title);
            $this ->getDB()->("DELETE FROM books WHERE title = $title");
            echo "Ksiazka zostala usunieta";
        }


        break;

        default:
        echo "error";


}