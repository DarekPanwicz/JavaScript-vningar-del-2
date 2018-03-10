<?php


$url = 'http://localhost:63342/js/js/api.php'; //Tu dajecie URL do Waszego API


//GET - pobieramy dane o książkach
$ch = curl_init($url . '?id=1'); //Zapytanie o książkę o id = 1
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type:application/json', //informujemy serwer na który wysłamy zapytanie, że dane przyjdą w postaci JSON'a
    'Accept:application/json' //Informujemy serwer, że dane które ma nam wysłać, też mają być w postaci JSON'a
));
$result = curl_exec($ch); //W odpowiedzi API musi Wam zrócić wszystkie dane książki w postaci JSON'a






/*
//POST - wysyłamy tytuł nowej ksiażki, która ma zostać dodana
$ch = curl_init($url);
$data = json_encode(array("title" => "Hagrid"));
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  //POST lub PUT lub DELETE
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data),
    'Accept: application/json, text/html, text/plain'
));
$result = curl_exec($ch); //W dopowiedzi musicie dostać ID utworzonej książki*/