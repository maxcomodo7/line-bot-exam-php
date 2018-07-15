<?php


$access_token = 'h6mtWI5v4AnNByl38IuofzhQ22O1Hgz4BefbMtHpp8iX9GSmBdE2tNMw5ZrIXdSrm8ySuUV0aZAfCdiVOPOjVWh63VF5TeblHiKlPj5GbPnyKvla1W4d+y0dgUbUTV4UkxVohrWhqC2eQI6dQsheSQdB04t89/1O/w1cDnyilFU=';

$userId = 'Ucdcd57e0f331c2053a61ef8e114dce53';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

