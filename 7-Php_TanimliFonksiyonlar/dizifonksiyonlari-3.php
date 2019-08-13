<?php
/*
array_values()      -> parametre olarak verilen dizideki value'leri bir diziye aktarır. Asıl şurada çok işe yarar -> array_unique() ile gereksiz tekrar eden elemanları sıraladıktan sonra index numarası dağınık gidiyordu fakat bunu array_values() ile tekrar kullanırsak/birleştirirsek index numarası düzenli hale gelecektir
array_push()        -> parametre olarak verilen diziye ikinci parametre olarak verilen değeri ekler.(2,3,4,5. parametreler kullanılabilir.)
array_unshift()     -> parametre olarak verilen dizinin başına parametreleri(2,3,4,5) ekler
array_keys()        -> parametre olarak verilen dizideki key'leri bir diziye aktarır.
current()           -> parametre olarak verilen dizinin İLK elemanını verir.
end()               -> parametre olarak verilen dizinin SON elemanını verir.
next()              -> parametre olarak verilen diziden bir sonraki elemanı alır
prev()              -> parametre olarak verilen diziden bir önceki elemanı alır
reset()             -> parametre olarak verilen dizideki seçili elemanı resetler.
extract()           -> parametre olarak verilen dizinin key'lerini bir değişken olarak kullanmamızı sağlar ve bu değişkenlerin değerleri key'lerin value'leri olur.
asort()             -> parametre olarak verilen dizideki DEĞERLERİ KÜÇÜKTEN BÜYÜĞE sıralar.
arsort()            -> parametre olarak verilen dizideki DEĞERLERİ BÜYÜKTEN KÜÇÜĞE sıralar.
ksort()             -> parametre olarak verilen dizideki KEY'leri KÜÇÜKTEN BÜYÜĞE sıralar.
krsort()            -> parametre olarak verilen dizideki KEY'leri BÜYÜKTEN KÜÇÜĞE sıralar.
*/

$arr = [
    'ad' => 'enes',
    'soyad' => 'baysan',
    'meslek' => 'öğrenci'
];
print_r(array_values($arr));
echo "<hr>";
print_r(array_keys($arr));
echo "<hr>";
$arr = [1, 2, 3, 4];
array_push($arr, 9, 10, 11, 12);
print_r($arr);
echo "<hr>";
array_unshift($arr, -1, -2, -3);
print_r($arr);
echo "<hr>";
echo "ilk eleman = " . current($arr) . " son eleman = " . end($arr) . "<hr>";
$arr = [
    "ad" => "enes",
    "soyad" => "baysan"

];
extract($arr);
echo $ad;
