<?php
/*
setcookie()  -> cookie oluşturur
$_COOKIE     -> cookieleri dizi olarak saklar
*/
setcookie('site', 'baysansoftwear', time() + 15); // ilk parametre cookie adı, ikinci parametre ise cookie değeri, üçüncü parametre zamanı belirtir. time() -> şuan    time() + 5 -> 5 saniye geçerli
print_r($_COOKIE);

/*
cookie'yi silmek için oluşturduğumuz cookie ile aynı isimde bir cookie daha oluşturup ne kadarlık bir cookie oluşturduysak o kadar -'lik bir cookie daha oluşturmalıyız
Örnek:
time() + 15>'lik bir cookie için -> time() -15 'lik bir cookie oluşturursak bu cookie silinecektir.

*/
