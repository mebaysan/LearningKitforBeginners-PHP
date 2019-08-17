<?php
/*

strtotime() -> Unix birimi tarihe, Tarihi Unix birime çevirir.

*/

$tarih = "2000-06-23 08:35:14";
echo strtotime($tarih) . "<hr>"; // bize içine parametre olarak verilen tarihin Unix zamanını verir

// 3 gün sonrasını alma(Unix) ve Normal tarihe çevirme
$unix = strtotime('+3 day', time()); // ilk parametre ne kadar iler igidilecek, ikinci parametre nerden gidilecek 
echo "<h3>3 Gün Sonra</h3>";
echo date("Y-m-d H:i:s", $unix);
