<?php
/*
İki farklı yöntem ile dosya çağırabiliriz.
1-) include -> dosyayı çağırdığımızda dosya yoksa bile sistem çalışmaya devam eder, uyarı verir
2-) require -> dosyayı çağırdığımızda eğer dosya yoksa sistem hata verir ve çalışmaz.
Çağırdığımız dosya içerisindeki fonksiyonları değişkenleri vs. bu dosya içerisinde kullanabiliriz.
*/
/*
include_once -> dosyayı sadece bir kere çağırmamıza yarar. bir kez daha çağıramayız
require_once -> dosyayı sadece bir kere çağırmamıza yarar. bir kez daha çağıramayız
*/
//include 'cagirilandosya.php';
//require 'cagirilandosya.php';
include_once 'cagirilandosya.php';
include_once 'cagirilandosya.php';
include_once 'cagirilandosya.php';
/*
Bu işlem nerelerde kullanılır?
Mesela bir tema yazdık footer ve header'i ayırdık. Bunlar sayesinde header ve footer'ı ayrı ayrı çağırabilirz.
*/
