<?php
header("content-type: text/html; charset=utf-8");

$ch = curl_init();

$header = ["token:rd1"];
$data = array(
    "id" => "10",
    "name" => "Steve_Hong"
);
$url = "http://tt181.me/test0975313025.php";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$output = curl_exec($ch);

curl_close($ch);

echo htmlspecialchars($output);
