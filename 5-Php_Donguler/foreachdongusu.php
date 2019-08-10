<?php
// foreach sadece dizilerde kullanılır.
$arr = ['enes', 'baysan', 'öğrenci', 'naber', 'sanane'];
$sayac = 1;
foreach ($arr as $key) { // arr dizisi içindeki her elemanı $key olarak kullan
    print "$sayac. eleman = $key" . "<br>";
    $sayac++;
}
print "<hr>";
$uyeDetay = [
    'ad' => 'Enes',
    'soyad' => 'Baysan',
    'meslek' => 'Öğrenci'
];
foreach ($uyeDetay as $key => $value) { // uyeDetay arrayi içindeki key leri al ve valuellerini de al
    print $key . ': ' . $value . '<br>';
}
