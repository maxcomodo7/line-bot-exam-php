<?php
require "vendor/autoload.php";
$access_token = 'h6mtWI5v4AnNByl38IuofzhQ22O1Hgz4BefbMtHpp8iX9GSmBdE2tNMw5ZrIXdSrm8ySuUV0aZAfCdiVOPOjVWh63VF5TeblHiKlPj5GbPnyKvla1W4d+y0dgUbUTV4UkxVohrWhqC2eQI6dQsheSQdB04t89/1O/w1cDnyilFU=
';
$channelSecret = '63137591c3e2ae3ed0b7fe6da3369978
';
$idPush = 'Ucdcd57e0f331c2053a61ef8e114dce53'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>
