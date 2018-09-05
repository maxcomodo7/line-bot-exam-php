<?php



require "vendor/autoload.php";

$access_token = '99b832e0d5bcfcfbce3739874efef43c';

$channelSecret = 'QI9yH61LtbLUjJkZ4oQr/ukn9ODZDVGGO1c5T1BB8wWnlWhrT39tXSoWr8iXjtbvd/mqCQQjHZzID6S7P8oKeeSu93TVI2AcmBlC7iokXRYo6XomDo7DfEdk57XfX+V9ZQrFv5wSX3kOCqUVf6nx2gdB04t89/1O/w1cDnyilFU=';

$idPush = 'U80ad520d26c5d3bde39e62139780767b'

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







