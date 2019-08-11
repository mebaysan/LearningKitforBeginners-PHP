<?php
/*
    Fonksiyon Tanımlama
büyük-küçük harf farketmiyor.
türkçe karakter kullanılabilir.
function test(){

}
function Test(){

}
İkisi birbirine eşittir.
*/
function deneme()
{
    return "Hello";
}
$kelime = deneme();
print "$kelime";
print "<hr>";
function topla($sayi1, $sayi2 = 10) // bildiğimiz gibi default değer verdik.
{
    $sonuc = $sayi1 + $sayi2;
    return "$sayi1 + $sayi2 = $sonuc ";
}
$sonuc = topla(3);
print "$sonuc" . "<hr>";
$sonuc = topla(3, 6);
print $sonuc . "<hr>";

// Dışarıdaki değişkeni fonksiyon içerisinde kullanmak için global veya $GLOBALS tanımları kullanılır.
$ad = "Enes";
function selamla($soyad)
{
    /*
    1. kullanım
    global $ad;
    return "Merhaba $ad $soyad";
    */
    return "Merhaba " . $GLOBALS['ad'] . " " . $soyad;
}
print selamla("Baysan");
print "<hr>";
$yazi = "enes baysan enes baysan enes baysan";
print substr($yazi, 0, 7) . "<hr>"; // substr() -> bu fonksiyon string parçalamımıza yarar. ilk parametre hangi string, ikincisi kaçındı indexten başlayacak üçüncüsü kaçıncı indexe kadar alacak.
print "$yazi değerinin toplam karakter sayısı = " . strlen($yazi); // strlen() -> bu fonksiyon içeri verilen parametrenin karakter sayısını alır.
