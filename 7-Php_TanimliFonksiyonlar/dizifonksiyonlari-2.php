<?php
/*
array_map()         -> parametre olarak verilen dizi içerisindeki her elemana dilediğimiz işlemi yapar ve geri döndürür
array_filter()      -> boş olarak uygularsak index'i boş olan elemanları kaldırır ve sadece dolu elemanları döner. Diğer türlü ise yine istediğimiz bir fonksiyonu kullanarak döndürebiliriz.
array_merge()       -> iki diziyi birleştirir.
array_rand()        -> array içerisinden rastgele key'leri seçmemizi sağlar
array_reverse()     -> parametre olarak verilen diziyi tersten sıralamak için kullanılır.
array_search()      -> dizide değer aramak için kullanılır. eğer değer(value) varsa değerin anahtarı(key) geri döndürülür.
in_array()          -> ilk parametre aranacak değer, ikinci parametre hangi dizide aranacağı. yukarıdaki ile benzer.
array_shift()       -> dizinin ilk elemanını alıp diziden çıkartır.
array_pop()         -> dizinin son elemanını alıp diziden çıkartır.
array_slice()       -> dizinin belli bir alanını seçmek için kullanılır. ilk parametre hangi dizi, ikinci parametre hangi alanlar.
array_sum()         -> parametre olarak verilen dizi içerisindeki tüm elemanları toplar.
array_product()     -> parametre olarak verilen dizi içerisindeki tüm elemanları çarpar.
array_unique()      -> dizide tekrarlanan elemanları siler.
*/
function filtrele($val)
{
    return $val * 2;
}
$arr = [1, 2, 3, 4, 5];
$arr2 = array_map('filtrele', $arr); // ilk parametre uygulanacak fonksiyon, ikinci parametre dizi
print_r($arr2);
echo "<hr>";
$arr = ["", "enes", "", "baysan"];
print_r(array_filter($arr)); // içindeki boş elemanları attı ve doluları döndü.
print "<br>";
$arr = [1, 2, 3, 4, 5];
$arr2 = array_filter($arr, function ($item) {
    return $item > 2 && $item < 5; // bu şartı sağlayan elemanları dönecek
});
print_r($arr2);
print "<hr>";
$arr = [1, 2, 3];
$arr2 = ["dört", "beş", "altı"];
$arr3 = array_merge($arr, $arr2); // $arr ve $arr2'yi birleştirip tek dizi haline getirdi.
print_r($arr3);
print "<hr>";
$arr = [
    'ad' => 'enes',
    'soyad' => 'baysan',
    'meslek' => 'öğrenci'
];
print_r(array_rand($arr)); // bu şekilde istersek kaç adet anahtar döndürmesi gerektiğini söyleyebiliriz.
print "<hr>";
// Değerleri döndürmesi için array_map() ile ufak bir trick yapabiliriz.
$random_keys = array_rand($arr, 2);
$random_keys_values = array_map(function ($key) {
    global $arr;
    return $arr[$key];
}, $random_keys); // array_map kullanarak $random_keys dizisi içerisindeki her elemanda $key değeri var mı diye bakıyoruz varsa return ediyoruz.
print_r($random_keys_values);
print "<hr>";
$arr = [1, 2, 3, 4, 5];
print_r(array_reverse($arr));
print "<hr>";
$arr = [
    'ad' => 'enes',
    'soyad' => 'baysan',
    'a' => [
        'b' => [
            'c' => 'var'
        ]
    ]
];
print array_search('enes', $arr); // ilk parametre aranacak değer, ikinci parametre hangi dizide aranacağı.
echo "<hr>";
function _array_search($cur_val, $arr) // ilk parametre olarak istenilen değeri, ikinci parametre olarak arama yapılacak diziyi alıyoruz
{
    foreach ($arr as $key => $value) { // her dizi içerisinde dönüyoruz
        if ($value == $cur_val) { // eğer foreachh ile dönme sırasında değer aranılan değere eşit ise true döndürüyoruz
            return true;
        }
        if (is_array($value)) { // eğer foreach sırasında dönerken value bir array ise tekrar yukardaki işlemi tekrar ediyoruz.
            return _array_search($cur_val, $value); // (recursive fonksiyon)
        }
    }
    return false; // 71. satır olmazsa false döndürüyoruz.
}
print _array_search('var', $arr); // kendi yazdığımız fonksiyonu kullandık.
print "<hr>";
$arr = [1, 2, 3, 4, 5];
if (in_array(2, $arr)) {
    echo "2 değeri var" . "<hr>";
} else {
    echo "2 değeri yok" . "<hr>";
}

$arr = [1, 2, 3, 4, 5];
$ilk_eleman = array_shift($arr);
print_r($arr);
print "<br>";
echo $ilk_eleman . "<hr>";
echo array_pop($arr) . "<hr>"; // son elemanı seçer
// array_slice() --- ilk 2 eleman hariç hepsi
$arr = [1, 2, 3, 4, 5];
print_r(array_slice($arr, 2));
echo "<hr>";
// 2. elemandan 4. elemana
print_r(array_slice($arr, 1, 3));
echo "<hr>";
// son 2 eleman
print_r(array_slice($arr, -2));
echo "<hr>" . array_sum($arr) . "<hr>";
echo array_product($arr) . "<hr>";
$arr = [1, 2, 3, 4, 5, 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 34, 4, 4, 5];
echo "<p>\$arr dizisinde hangi elemandan kaç tane var</p>";
print_r(array_count_values($arr));
echo "<br><hr>";
$new_arr = array_unique($arr);
echo "yeni dizi" . "<br>";
print_r($new_arr);
echo "<p><b>oluşan yeni \$new_arr</b> dizisinde hangi elemandan kaç tane var.</p>";
print_r(array_count_values($new_arr));
