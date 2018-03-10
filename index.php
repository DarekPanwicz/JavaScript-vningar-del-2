<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 18.02.18
 * Time: 14:58
 */
declare(strict_types=1);


//Data for post.
//$data = [
//    "id" => NULL,
//    "title" => "Pawel Kochanenk",
//    "author" => "DP Haha",
//    "year" => 1990
//];

//data for delete

$data = [
    "id" => null,
    "title"=> "AI will kill us ALL :(",
    "author"=>"Elon Musk",
    "publisher"=>"Solar City",
    "pages"=> 248
];

$dataEncoded = json_encode($data);

//$data = array("name" => "Hagrid", "age" => "36");
//$data_string = json_encode($data);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);


$ch = curl_init('http://localhost:81/bitbucket/js/js/api.php');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $dataEncoded);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Accept: text/plain',
    'Content-Length: ' . strlen($dataEncoded),
    'Content-Type: application/json'

));
$result = curl_exec($ch);
var_dump($result);