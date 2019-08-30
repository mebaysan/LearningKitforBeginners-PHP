<?php
$zip = new ZipArchive();
$zip->open("dosyalar.zip"); // create parametresini vermiyoruz. zaten mevcut olan bir zip dosyası olduğunu varsayalım
$dosya_icerik = $zip->getFromName("deneme.html"); // bize dosyanın içeriğini verir
echo $dosya_icerik;


$zip->close();