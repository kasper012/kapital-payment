<?php

// $url = "https://optimal.az/index.php?route=api/product_feed";
// $key = '{Is1jjiPPWQwJLhumaJdgbUmyGxbA7toWr1yFv0qYhY2Zf5WYmrSK6fbojcXRECxa5QjdO3j51cXf8iH0hBvSou4JHTuYMTyshh7HPaZZGwkbmgJn5INKGqu53K8voczvRgPkr1PFwNKDpc58osD5RKXDygNUtptuRqNF5KE4xZg1XHrAoYtMKsJ7AYgGVavsFB5FjULTn6Gn48upe66uRi8LsN80jjohnR6sjNwDsA6IM1wJH1ERbmOWdOPWKJwa}';
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, false);

// $headers = array(
//    "Key: Bearer {$key}"
// );
// curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// $exec = curl_exec($curl);
// curl_close($curl);
// print_r($exec);


$token='Is1jjiPPWQwJLhumaJdgbUmyGxbA7toWr1yFv0qYhY2Zf5WYmrSK6fbojcXRECxa5QjdO3j51cXf8iH0hBvSou4JHTuYMTyshh7HPaZZGwkbmgJn5INKGqu53K8voczvRgPkr1PFwNKDpc58osD5RKXDygNUtptuRqNF5KE4xZg1XHrAoYtMKsJ7AYgGVavsFB5FjULTn6Gn48upe66uRi8LsN80jjohnR6sjNwDsA6IM1wJH1ERbmOWdOPWKJwa';
$URL='https://optimal.az/index.php?route=api/product_feed';
$arr = array (
	'token' => $token
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$URL);
curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
$result=curl_exec ($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
curl_close ($ch);
print_r($result);
?>

