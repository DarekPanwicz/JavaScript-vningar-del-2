<?php

/*require_once(Base.php);
require_once(Create.php);
require_once(Read.php);
require_once(Delete.php);
require_once(Update.php);*/

$method= $_SERVER["REQUEST_METHOD"];

switch ($method) {

        case 'GET':
        break;

        case 'POST':
        break;

        case 'PUT':
        break;

        case 'DELETE':
        break;

        default:
        echo "error";


}