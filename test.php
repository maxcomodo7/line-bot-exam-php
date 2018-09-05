<?php

require_once 'vendor/autoload.php';

$token = 't19dcUTxO9X5THprDCsKuMxkEnRCw68o3PzY32LGCG3';
$ln = new KS\Line\LineNotify($token);

$text = 'สวัสดี Line Notify';
$ln->send($text);