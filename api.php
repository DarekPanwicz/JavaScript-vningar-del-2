<?php

/*require_once(Base.php);
require_once(Create.php);
require_once(Read.php);
require_once(Delete.php);
require_once(Update.php);*/

$method= $_SERVER["REQUEST_METHOD"];

switch ($method) {

        case 'GET':
            $read = new Read();

            $_GET;


        case 'POST':
            $_POST;
            $create= new Create();


        case 'PUT':
            $params = file_get_contents('php://input');
            $update = new Update();


        case 'DELETE':
            $_GET;
            $delete = new Delete();
        break;

        default:
        echo "error";


}