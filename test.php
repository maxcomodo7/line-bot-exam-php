
<?php
include ('line-bot-api/php/line-bot.php');
$channelSecret = '99b832e0d5bcfcfbce3739874efef43c';
$access_token  = 'QI9yH61LtbLUjJkZ4oQr/ukn9ODZDVGGO1c5T1BB8wWnlWhrT39tXSoWr8iXjtbvd/mqCQQjHZzID6S7P8oKeeSu93TVI2AcmBlC7iokXRYo6XomDo7DfEdk57XfX+V9ZQrFv5wSX3kOCqUVf6nx2gdB04t89/1O/w1cDnyilFU=';
$bot = new BOT_API($channelSecret, $access_token);
	
$bot->sendMessageNew('U80ad520d26c5d3bde39e62139780767b', 'Hello World !!');
if ($bot->isSuccess()) {
    echo 'Succeeded!';
    exit();
}
// Failed
echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
exit();
