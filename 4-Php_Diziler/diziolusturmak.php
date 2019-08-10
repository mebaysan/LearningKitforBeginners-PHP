<?php
/*
    Dizi Tanımlama
1-) array()
2-) []
*/
$meslek = "Öğrenci";
$kimlik = array("Enes", "Baysan", $meslek);
print_r($kimlik); // print_r() -> bu fonksiyon bize dizi içindeki tüm elemanları verir.
print $kimlik[2];