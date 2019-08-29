<?php
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => "https://www.ihh.org.tr",
    CURLOPT_HTTPHEADER => "Token:deneme"
]);
$source = curl_exec($ch);
curl_close($ch);
echo $source;