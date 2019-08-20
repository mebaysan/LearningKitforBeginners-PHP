<?php
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => "http://ihh.org.tr",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_REFERER => "https://wikipedia.org" // wikipedia'dan girmiş gibi gözükecek
]);
$source = curl_exec($ch);
curl_close($ch);
echo $source;