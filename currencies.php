<?php
if (isset($_POST['value']) &&  isset($_POST['currency'])) {

    $startTime = microtime(true);

    $data = file_get_contents("http://api.nbp.pl/api/exchangerates/tables/A/");
    $json_data = json_decode($data,true);

//var_dump('<pre>'. print_r($json_data, true) . '</pre>');

    $jsonX= $json_data[0]['rates'];

   $savedCurrencyInTab = [];

   $apcuAddCurrencyTab= apcu_store('speed',$savedCurrencyInTab);
   $apcuFetchCurrencyTab= apcu_fetch('speed', $apcuAddCurrencyTab);



    } else
        {
            foreach($jsonX as $jsonTab) {
                if ($jsonTab["code"] == $_POST['currency']) {
                    $currenciesResult = $jsonTab["mid"] * $_POST['value'];

                    $savedCurrencyInTab[] = $currenciesResult;
                    echo $currenciesResult;


                }

            }
 else {
    die("Błędne dane");
}

// var_dump('<pre>'. print_r($jsonTab, true) . '</pre>');


echo " Czas wczytania:  " . number_format(( microtime(true) - $startTime), 4) . " Seconds\n";

