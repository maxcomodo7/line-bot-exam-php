
<?php
require "vendor/autoload.php";
$access_token = 'b522c397e38192ce9542775a23dd9ba7';
$channelSecret = 'xbrrzERPKP5rcZE7eDdNnRAzvF/lJ9yk8xNsMTtVbKk2gr35pKBIhmMm9Gn4xG6uYtxryHEzNdaBzxGRGw67vvZHF3yoPpcMV4k9A/MYnrcd7DRvKwccqkBg9UbmGpcV5mIGDU2GHZOLKctuHey8MgdB04t89/1O/w1cDnyilFU=';
$idPush = 'U894bbc0369203954038647c5232ebccc'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();






