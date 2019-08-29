<?php
$ch = curl_init(); // curl başlattık
curl_setopt_array( // curl parametrelerini ayarladık
    $ch, // curl'u verdik
    [
        CURLOPT_URL => "http://localhost/20-Php_CURL/dosyayuklemeform.php", // nereye gidecek
        CURLOPT_RETURNTRANSFER => true, // geriye değer döndürsün mü
        CURLOPT_POST => true, // post olacak mı
        CURLOPT_POSTFIELDS => [ // gidecek post verileri
            'adsoyad' => 'curl ile test',
            'dosya' => new CURLFile('test.txt', 'text/plain')
        ]
    ]);
$source = curl_exec($ch);
curl_close($ch);

print_r($source);