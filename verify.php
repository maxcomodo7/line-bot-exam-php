<?php
$access_token = 'QI9yH61LtbLUjJkZ4oQr/ukn9ODZDVGGO1c5T1BB8wWnlWhrT39tXSoWr8iXjtbvd/mqCQQjHZzID6S7P8oKeeSu93TVI2AcmBlC7iokXRYo6XomDo7DfEdk57XfX+V9ZQrFv5wSX3kOCqUVf6nx2gdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
