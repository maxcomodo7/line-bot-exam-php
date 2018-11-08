<?php
require "vendor/autoload.php";
$access_token = 'xbrrzERPKP5rcZE7eDdNnRAzvF/lJ9yk8xNsMTtVbKk2gr35pKBIhmMm9Gn4xG6uYtxryHEzNdaBzxGRGw67vvZHF3yoPpcMV4k9A/MYnrcd7DRvKwccqkBg9UbmGpcV5mIGDU2GHZOLKctuHey8MgdB04t89/1O/w1cDnyilFU=
';
$channelSecret = 'b522c397e38192ce9542775a23dd9ba7
';
$idPush = 'U894bbc0369203954038647c5232ebccc'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดี');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
