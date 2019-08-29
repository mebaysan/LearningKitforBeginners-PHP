<?php
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => "http://localhost/form.php",
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [ // post edilecek sayfadaki form'Un input name'leri
        'ad' => "enes",
        'soyad' => 'baysan',
        "meslek" => "öğrenci",
        'submit' => 1
    ]
]);
$source = curl_exec($ch);
curl_close($ch);
echo $source;