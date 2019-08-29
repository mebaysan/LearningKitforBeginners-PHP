<?php
$file = fopen('inen.jpg', 'w+');
$ch = curl_init("https://cdnuploads.aa.com.tr/uploads/sirkethaberleri/Contents/2019/04/02/thumbs_b_c_4f658af5cb06d7682dc5c73d7cc4fcd4.jpg"); // resmin yolunu verdik
curl_setopt($ch, CURLOPT_FILE, $file);
curl_exec($ch);
curl_close($ch);
