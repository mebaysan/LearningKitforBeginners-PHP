<?php
/*
            Unix Zaman
    1 Ocak 1970'den bu güne geçen saniye sayısına verilen sayısal veri tipi
*/
/*
date()
getdate()
time()
*/
// Standart tarih formatı ---> yıl-ay-gün saat:dakika:saniye
echo date("Y m d") . "<hr>"; // -> Year month day Yıl ay gün olarak verir.
echo "<h3>Standart Tarih Formatı</h3><br>";
echo date("Y-m-d H:i:s") . "<hr>";
$tarih = getdate(); // bugünün tarihini unix timestamp olarak alır
print_r($tarih);
echo "<hr>";
echo "<h3>Unix Zaman</h3><br>";
echo time() . "<hr>";
$today = time();
echo date("Y-m-d H:i:s", $today); // ikinci parametreye opsiyonel olarak timestamp verebiliriz. Bu sayede o timestamp'e ait tarihe gider.
