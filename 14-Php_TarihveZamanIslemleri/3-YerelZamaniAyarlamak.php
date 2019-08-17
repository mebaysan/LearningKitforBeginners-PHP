<?php
date_default_timezone_set('Europe/Istanbul'); // Varsayılan zamandilimini IStanbul'a ayarladık
setlocale(LC_TIME, 'tr_TR'); // local olarak tarihi ayarladık bu sayede tarihi türkçe oalrak alabileceğiz. Bu fonksiyonlar ve kısaltmalar için php sitesini ziyaret edebiliriz.
// setlocale ile belirlediğimiz bir lokalde getdate() ile tarih alamayız bunun için strftime() fonksiyonunu kullanmamız gereklidir.

echo strftime("%d %B %Y, %A");
