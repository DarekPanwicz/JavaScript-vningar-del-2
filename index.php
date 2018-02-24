<?php

//print_r($_SERVER);

$ch =curl_init();
$mysqli = new mysqli('127.0.0.1', 'dajmos008', 'vegeta11', 'bookstore');
var_dump($mysqli);

/*$mysqli->query("INSERT INTO books
     (id, title, `author`, isbn, `publisher`, `pages`, `year`, `cover`, `copies`)
     VALUES (NULL, \"Test\", \"Autor\", \"9992158107\", \"wydawca\", 100, 2017, \"hard\", 32)"
);*/
// fetch_assoc
$result= $mysqli->query('SELECT * FROM books');
$temp =array();
while($row=$result->fetch_assoc()){

    $temp[]= $row;
}

var_dump($temp);
