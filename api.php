<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 24.02.18
 * Time: 12:57
 */

declare(strict_types=1);

require_once 'Create.php';
require_once 'Update.php';
require_once 'Delete.php';
require_once 'Read.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "GET":
        $read = new Read((int) $_GET['id']);
        echo(json_encode($read->get()));
        break;
    case "DELETE":
        $delete = new Delete();
        $params = json_decode(file_get_contents('php://input'));
        if (isset($params->id)) {
            $delete->deleteDB($params->id);
            echo "Book with id: {$params->id} was deleted.";
        }

        if(isset($params->title)) {
            $delete->deleteByTitle($params->title);
            echo "Book with title: {$params->title} was deleted";
        }

        break;
    case "PUT":
        $update = new Update();
        $params = json_decode(file_get_contents('php://input'));
        $update->validate($params);
        $update->updateBook();
        break;
    case "POST":
        $create = new Create();
        $params = json_decode(file_get_contents("php://input"));
        $create->createBook($params);
        echo "Book created";
        break;
    default:
        echo $method . " not supported.";
}
