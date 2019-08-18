<?php
/*
set_error_handler()    --- ölümcül hataları yakalayamaz.
triger_error()
*/
function ozelHataYakalayici($no, $msg, $file, $line) // kendimize bir fonksiyon yazıyoruz. 4 parametre alıyor. no -> hata numarası, msg -> hata mesajı, file -> hatanın oluştuğu dosya, line -> hatanın oluştuğu satır
{
    echo $msg;
}
set_error_handler('ozelHataYakalayici'); // yazdığımız bu fonksiyon adını set_error_handler() fonksiyonuna veriyoruz bu sayede yazdığımız fonksiyon hata yakalayıxcı oluyor
