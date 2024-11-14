<?php
$get = $_GET['get'];
$mpdUrl = 'https://fxtlgrp-live1-814bffb9b389f652.akamaized.net/out/v1/' . $get;

$mpdheads = [
  'http' => [
      'header' => "User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36\r\n",
      'follow_location' => 1,
      'timeout' => 5
  ]
];
$context = stream_context_create($mpdheads);
$res = file_get_contents($mpdUrl, false, $context);
echo $res;
?>
