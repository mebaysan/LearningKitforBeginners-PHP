<?php

# preg_match()
# preg_match_all()

$metin = 'ben php yi çok seviyorum!';
$sonuc = preg_match('/\bphp\b/', $metin);

/*
if ($sonuc){
    echo 'EVET';
} else {
    echo 'HAYIR';
}
*/

$url = 'http://www.php.net/index.html';
//preg_match('@^(?:http://)?([^/]+)@i', $url, $sonuc);

//print_r($sonuc);
# @^(?:http://)?([^/]+)@i

$tarih = '2017-12-25';
//$desen = '/(?<yil>\d{4})-(?<ay>\d{2})-(?<gun>\d{2})/';
//preg_match($desen, $tarih, $sonuc);
//print_r($sonuc);

$desen = '/^\d{4}-\d{2}-\d{2}$/';
//$sonuc = preg_match($desen, $tarih);

/*
if ($sonuc){
    echo 'tarih formatı geçerli!';
} else {
    echo 'tarih formatı geçersiz!';
}
*/

$eposta = 'tayfunerbilen@gmail.com.tr';
$desen = '/^(\w+)@([a-z]+)\.([a-z]{2,})(.[a-z]{2}|)$/';

/*
$sonuc = preg_match($desen, $eposta);

if ($sonuc){
    echo 'geçerli bir e-posta adresi!';
} else {
    echo 'e-posta adresi geçersiz!';
}
*/

preg_match($desen, $eposta, $sonuc);

print_r($sonuc);

?>