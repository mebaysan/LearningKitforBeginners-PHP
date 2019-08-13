<?php
/*
print_r()                   -> parametre olarak verilen dizinin elemanlarını verir (daha insancıl)
var_dump()                  -> parametre olarak verilen dizinin elemanlarını verir (daha programsal)
explode()                   -> parametre olarak verilen değeri ilk parametreye göre parçalar, dizi haline getirir. ilk parametre neye göre parçalanacağı, ikinci parametre neyin parçalanacağı.
implode()                   -> parametre olarak verilen değeri ilk parametreye göre birleştirir. ilk parametre ne ile birleştirileceği, ikinci parametre ise hangi dizinin elemanlarının birleştirileceği.
count()                     -> parametre olarak verilen dizinin eleman sayısını verir.
is_array()                  -> parametre olarak verilen dizi bir array mi değil mi onu kontrol eder. eğer array ise true değil ise false döner.
shuffle()                   -> parametre olarak verilen diziyi her bastığımızda karıştırarak basar.
array_combine()             -> parametre olarak verilen dizileri anahtar-değer(key-value) olarak birleştirir.
array_count_values()        -> parametre olarak verilen bir dizide tekrarlanan elemanların kaç kez tekrarlandığını bulmak için kullanılır.
array_flip()                -> parametre olarak verilen dizideki anahtar-değer(key-value) yerlerini değiştirir.
array_key_exists()          -> parametre olarak verilen dizi içerisinde belirtilen anahtar var mı yok mu onu döndürür. ilk parametre aranacak 'key' değeri, ikinci parametre içinde aranılacak aray değişkeni.
*/
print "<h3>Dizi Fonksiyonları Bölüm 1</h3>";
$dizi = range(10, 200);
print_r($dizi);
var_dump($dizi);
print "<hr>";
$cümle = "enes,baysan,php,öğreniyor";
$array = explode(",", $cümle); // virgülleri atarak cümle değişkenini parçalayacak ve dizi haline getirecek.
print_r($array);
print "<hr>";
$newarray = implode("|", $array); // $array değişkenini | ile birleştirir.
print $newarray;
print "<hr>";
print "\$dizi değişkeninin eleman sayısı = " . count($dizi);
print "<hr>";
if (is_array($dizi)) {
    print "\$dizi değişkeni bir arraydir" . "<hr>";
} else {
    print "\$dizi değişkeni bir array değildir" . "<hr>";
}
$array = [1, 2, 3, 4, 5];
shuffle($array); // bir değişkene eşitlememize gerek yok. Dizinin elemanlarının yerini değiştirecek.
print_r($array);
print "<hr>";
$keys = [1, "a", "enes"];
$values = ["sayı", "harf", "isim"];
$keyvalue = array_combine($keys, $values); // yeni bir değişkene atayarak daha rahat kullanabiliriz.
print_r($keyvalue);
print "<hr>";
$arr = [1, 2, 3, 1, 2, 3, 4, 5, 6, 1, 2, 1, 1, 1, 1, 2, 3, 4, 4, 3, 3, 3, 2, 2, 2, 8, 9];
print_r(array_count_values($arr));
print "<hr>";
$newarr = array_flip($keyvalue); // yukarda oluşturduğumuz $keyvalue dizisinin key-value değerlerinin yerlerini değiştirdik.
print_r($newarr);
print "<hr>";
$array = [
    'ad' => 'enes',
    'soyad' => 'baysan'
];
if (array_key_exists('ad', $array)) { // ilk parametre aranacak key değeri, ikinci parametre içinde aranacak array
    print "\$array değişkeninde 'ad' anahtarı vardır";
} else {
    print "\$array değişkeninde 'ad' anahtarı yoktur";
}
