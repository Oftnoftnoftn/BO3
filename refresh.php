<?php
// クライアントからのリクエストを受け取る
$url = $_GET['url'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // リダイレクトを追跡
$response = curl_exec($ch);
curl_close($ch);

header('Content-Type: text/html');
echo $response;
?>
