<?php
/*
scandir() -> dizini taratır
glob()    ->
is_dir -> gelen parametre dizin mi değil mi
is_file -> gelen parametre dosya mı değil mi 
*/

$dosyalar = scandir('.'); // . -> şuanda bu dosyamın çalıştığı dizin anlamına gelir.
$sayac = 1;
echo "<h3>scandir()</h3>";
foreach ($dosyalar as $dosya) {
    echo "$sayac. dosya adı = $dosya" . "<br>";
    $sayac++;
}

echo "<hr>";
echo "<h3>glob()</h3>";
$dosyalar = glob("*"); // dosyanın çalıştığı mevcut dizin için * koyulur. GLOB_ONLYDIR diye opsiyonel bir ikinci parametre vardır. bunu koyarsak sadece dizinleri listeler.
$sayac = 1;
foreach ($dosyalar as $dosya) {
    echo "$sayac. dosya adı = $dosya" . "<br>";
    $sayac++;
}
echo "<hr>";
echo "<h3>glob('*php')</h3>";
$dosyalar = glob("*php"); // sadece php uzantılı dosyaları verir.
$sayac = 1;
foreach ($dosyalar as $dosya) {
    echo "$sayac. dosya adı = $dosya" . "<br>";
    $sayac++;
}
echo "<hr>";
echo "<h3>glob('*{php,txt},GLOB_BRACE')</h3>";
$dosyalar = glob("*{php,txt}", GLOB_BRACE); // sadece php ve txt uzantılı dosyaları verir.
$sayac = 1;
foreach ($dosyalar as $dosya) {
    echo "$sayac. dosya adı = $dosya" . "<br>";
    $sayac++;
}
