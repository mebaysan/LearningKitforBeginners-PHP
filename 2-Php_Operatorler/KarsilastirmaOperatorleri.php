<?php
/*
    Karşılaştırma Operatörleri
        == eşitse
        != eşit değilse
        > büyükse
        < küçükse
        <= küçük veya eşite
        >= büyük veya eşitse
        === denkse
        !== denk değilse
*/

$a = 5;
$b = "5";

echo $a == $b; // true
echo $a === $b; // false. Hem değişkenlerin değerleri eşit olacak hem de türleri eşit olacak.