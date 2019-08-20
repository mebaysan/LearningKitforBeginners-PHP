<?php
$curl = curl_init(); // curl oturumunu başlatıyoruz


//curl_setopt($curl, CURLOPT_URL, 'https://www.ihh.org.tr/'); // 1-) mevcut oturumdaki curl değişkeni, 2-) curl'u ne için kullanacağımız, 3-) nereye istek yapacağımız
curl_setopt_array($curl, [CURLOPT_URL => 'https://www.ihh.org.tr/', CURLOPT_RETURNTRANSFER => true]); // bu şekilde dizi olarak da verebiliriz parametreleri


$source = curl_exec($curl); // curl'u çalıştırıyoruz. bunu bir değişkene de aktarabilirz. python'daki selenium gibi.


curl_close($curl); // mevcut curl'u sonlandırıyoruz.

//echo $source;
preg_match('/<title>(.*?)<\/title>/', $source, $title); // regex yardımı ile 2 title arasını aldık
print_r($title);