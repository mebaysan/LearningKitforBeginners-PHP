<?php
    // range(parametre1,parametre2) -> ilk parametre başlangıç değeri, ikinci parametre bitiş değeri. iki değer arasında sayı üretir ve dizi olarak döner.
    //print_r(range(0,100));
    // memory_get_usage(); -> parametre olarak verilen değerin bize byte cinsinden değerini gönderir.
    // memory_get_usage()
    // number_format()

    function byteToMB($byte)
    {
        return number_format($byte / 1048576, 2);
    }

    $sayilar = range(0, 1000000);

    echo byteToMB(memory_get_usage()) . ' MB bellek kullanıldı<br>';

    function say($baslangic, $limit)
    {
        for ($i = $baslangic; $i <= $limit; $i++){
            yield $i;
        }
    }

    $sayilar = say(0, 1000000);
    
    echo byteToMB(memory_get_usage()) . ' MB bellek kullanıldı';

?>