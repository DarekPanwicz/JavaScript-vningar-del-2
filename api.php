<?php
require_once('Base.php');
require_once('Create.php');
require_once('Read.php');
require_once('Delete.php');
require_once('Update.php');

$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {

    case 'GET':
        $read = new Read($_GET['id']);
        echo $read->get();
        $_GET;

        break;
        case 'POST':

        $create = new Create($_POST['title']);
        echo $create->addBook();
        $_POST;

        break;
        case 'PUT':
        $params = json_decode(file_get_contents('php://input'), true);
        //params ['id']; params ['title'];
        $uppdate = new Update();
        $uppdate->setId($params['id']);
        $uppdate->setTitle($params['title']);
        $uppdate->setAuthor($params['author']);
        $uppdate->setIsbn($params['isbn']);
        $uppdate->setPublisher($params['publisher']);
        $uppdate->setPages($params['pages']);
        $uppdate->setCover($params['cover']);
        $uppdate->setYear($params['year']);
        $uppdate->setCopies($params['copies']);
        $uppdate->uppdate();
        break;
        case 'DELETE':

        // $delete = new Delete($_GET['id']);
        // echo $delete->delete();
        //var_dump(urldecode($_GET['title']));
        //Url decode daje sie zawsze gdy jest string ktorego chcemy zdekodowac tak by pasowal w bazie
        $delete = new Delete ((int)@$_GET['id'], urldecode((string)@$_GET['title']));
        $delete->deleteByTitle();
        break;

    default:
        echo "error";


}