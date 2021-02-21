<?php


$curl = curl_init('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD,EUR');
curl_setopt($curl, CURLOPT_FAILONERROR, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
$http_BTC = curl_exec($curl);

$curl2 = curl_init('https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=USD,EUR');
curl_setopt($curl2, CURLOPT_FAILONERROR, true);
curl_setopt($curl2, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl2, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, false);  
$http_ETH = curl_exec($curl2);


$curl3 = curl_init('https://min-api.cryptocompare.com/data/price?fsym=XRP&tsyms=USD,EUR');
curl_setopt($curl3, CURLOPT_FAILONERROR, true);
curl_setopt($curl3, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl3, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl3, CURLOPT_SSL_VERIFYPEER, false);  
$http_XRP = curl_exec($curl3);

echo("
{
    \"BTC\": {$http_BTC}, 
    \"ETH\": {$http_ETH}, 
    \"XRP\": {$http_XRP}
}
");



?>