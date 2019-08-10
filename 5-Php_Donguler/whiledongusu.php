<?php
$a = 0;
// birinci kullanım
while ($a <= 10) { // koşul sağlandığı sürece blok çalışır
    print "\$a'nın şuanki değeri = $a" . '<br>';
    $a++;
}
print "<hr>";
// ikinci kullanım. while iki şekilde yazımı vardır.
$b = 0;
while ($b <= 10) :
    print "\$b'nin şuanki değeri = $b" . '<br>';
    $b++;
endwhile;
