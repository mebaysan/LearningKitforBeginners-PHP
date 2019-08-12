<?php
function say()
{
    $sayi = 1;
    echo "say fonksiyonu " . $sayi . "<br>";
    $sayi++;
}
// İkisi arasındaki fark: say fonksiyonunda hep 1 yazar, fakat say2 fonksiyonunu ardarda çağırınca sayı değişkeni hep bir artar.
function say2()
{
    static $sayi = 1;
    echo "say2 fonksiyonu " . $sayi . "<br>";
    $sayi++;
}



say();
say();
say();
say();
say2();
say2();
say2();