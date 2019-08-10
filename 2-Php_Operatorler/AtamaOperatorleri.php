<?php
/*
    Atama Operatörleri
       =
       +=
       -=
       /=
       *=
       %=
       .= -> birleştirerek değer atama
       . -> birleştirme operatörü
*/
$a = 5;
$b = 7;
$c = $a.$b; // 57
echo $c;
echo $c.=$a; // 575