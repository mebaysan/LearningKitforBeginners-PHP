<?php
// do-while ile while arasındaki fark -> While'da koşul sağlandığı sürece çalışır. Do-While'da önce Do çalışır sonrasında koşul sağlanırsa While çalışır.
$a = 0;
do {
    print "\$a'nın şuanki değeri = $a" . '<br>';
    $a++;
} while ($a >= 10); // koşul sağlanmıyor fakat koşula bakmadan önce bir kere mutlaka do bloğu çalışır.
