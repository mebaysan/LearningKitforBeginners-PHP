<?php
/*
strlen()        -> stringdeki toplam karakter sayısını verir.
strstr()        -> bir değişken içerisinde bir değer aramamızı sağlar. ilk parametre değişken ikinci parametre değer. eğer değer varsa ilk geçtiği yerden itibaren ifadeyi return eder yoksa false döner.
strpos()        -> bir değişken içerisinde bir değer aramamızı sağlar. ilk parametre değişken ikinci parametre değer. eğer değer varsa ilk geçtiği yerin index numarasını verir.
ucwords()       -> her kelimenin baş harfini büyütmek için kullanılır.
ucfirst()       -> bu ise sadece cümlenin/ifadenin/değişkenin ilk harfini büyütür.
strtolower()    -> büyük yazılan karakterlerin hepsini küçüğe çevirir
strtoupper()    -> küçük yazılan karakterlerin hepsini büyüğe çevirir
trim()          -> solda ve sağda bulunan boşlukları ve tab'ları vs. kaldırır. İstersek ikinci parametre verir özel bir karaktere göre de bu işlemi gerçekleştirebiliriz.
ltrim()         -> solda bulunan boşlukları ve tab'ları vs. kaldırır. İstersek ikinci parametre verir özel bir karaktere göre de bu işlemi gerçekleştirebiliriz.
rtrim()         -> sağda bulunan boşlukları ve tab'ları vs. kaldırır. İstersek ikinci parametre verir özel bir karaktere göre de bu işlemi gerçekleştirebiliriz.
substr()        -> ifadeyi parçalamımıza yarar. kaçıncı indexten kaçıncı indexte gösterilsin onu sağlar.
str_replace()   -> ilk parametre değişecek ifade, ikinci parametre ne ile değişeceği, üçüncü parametre hangi ifadede değişecek. istersek dizi olarakta kullanabiliriz. parametreleri dizi olarak verebiliriz.
str_repeat()    -> ilk parametre hangi ifade, ikinci parametre kaç kez tekrar edileceği. verilen ifadeyi istedğimiz kadar tekrar eder.
*/
$str = "merhaba enes baysan php oğreniyor!";
echo "\$str değişkeni toplamda " . strlen($str) . " karakter" . "<hr>";
echo strstr($str, 'a') . "<hr>";
echo "'a' harfi \$str değişkeninde ilk " . strpos($str, 'a') . ". indexte geçiyor." . "<hr>";
echo ucwords($str) . "<hr>";
echo ucfirst($str) . "<hr>";
echo substr($str, 0, 4) . "<hr>";
echo str_replace('enes', 'muhammed', $str) . "<hr>";
echo str_repeat('!', 10);
