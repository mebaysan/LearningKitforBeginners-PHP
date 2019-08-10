<?php
for ($i = 0; $i < 10; $i++) {
    print "\$i değeri = $i" . '<br>'; // . ile '<br>' etiketini birleştirdik bu sayede alt alta indi.
}

$arr = ['enes', 'baysan', 'öğrenci', 'naber', 'sanane'];
$sayac = 1;
print "<hr>";
for ($i = 0; $i < count($arr); $i++) { // count() fonksiyonu sayesinde dizilerin eleman sayısına ulaşabiliriz.
    print "$sayac. eleman = $arr[$i]" . '<br>';
    $sayac++;
}
