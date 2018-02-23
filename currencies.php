<?php
if (isset($_POST['value']) &&  isset($_POST['currency'])) {
    //Pobieranie file_get_contents z http://api.nbp.pl/api/exchangerates/tables/A/
    //Przy użyciu file_get_contents (parsowanie json - json_decode(string, true)) zaisać do tablicy kursy wszystkich walut w stosunku do PLN

    //Tablice zapisać do cache
    //Obliczyć kurs wg przesłanej waluty i wartości


    $data = file_get_contents("http://api.nbp.pl/api/exchangerates/tables/A/");
    $json_data = json_decode($data,true);

//var_dump('<pre>'. print_r($json_data, true) . '</pre>');
    $jsonX= $json_data[0]['rates'];


    $savedCurrencyInTab = [];

    foreach($jsonX as $jsonTab) {
        if ($jsonTab["code"] == $_POST['currency']) {
            echo $jsonTab["mid"] *$_POST['value'];

            $savedCurrencyInTab[] =$jsonTab;



}

       // var_dump('<pre>'. print_r($jsonTab, true) . '</pre>');

    }

    //var_dump($currencies) ;

} else {
    die("Błędne dane");
}