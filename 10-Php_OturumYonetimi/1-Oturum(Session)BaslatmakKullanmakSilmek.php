<?php
session_start(); // oturumu başlatmak için bu fonksiyonun kullanılması şarttır
$_SESSION['kullanici_adi'] = 'Baysan';
$_SESSION['kullanici_mail'] = 'menesbaysan@gmail.com';
$_SESSION['kullanici_id'] = 1;
echo "<h3> Hoşgeldiniz " . $_SESSION['kullanici_adi'] . "</h3><hr>";
foreach ($_SESSION as $key => $value) {
    echo "$key = $value" . "<br>";
}
unset($_SESSION['kullanici_id']); // SESSION içinden verdiğimiz değeri kaldırır.
session_destroy(); // bütün sessionları siler
