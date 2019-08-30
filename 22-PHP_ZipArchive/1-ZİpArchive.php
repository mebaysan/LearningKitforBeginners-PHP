<?php
$zip = new ZipArchive(); // instance oluşturduk
$zip->open('dosyalar.zip',ZipArchive::CREATE); // oluşacak zip dosyasının adı, ve zip dosyasını oluşturur
$zip->addFile("deneme.html","a.html"); // dsoyanın yolunu veriyoruz ve zip içerisine hangi adla atacağını verdik
$zip->addFile("burası.png"); // sadece dosya adını verirsek o isimle zip içerisine atar
$zip->close(); // açtığımız zipi kapattık
