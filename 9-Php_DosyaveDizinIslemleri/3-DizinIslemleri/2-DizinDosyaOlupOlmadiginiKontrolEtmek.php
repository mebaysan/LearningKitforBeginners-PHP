<?php
/*
file_exists() -> parametre olarak verilen dosya adında bir dosya varmı yokmu onu kontrol eder

*/

function dosya_kontrol($dosya_adi)
{
    if (file_exists($dosya_adi)) {
        echo "$dosya_adi diye bir dosya var";
    } else {
        echo "$dosya_adi diye bir dosya yok";
    }
}
dosya_kontrol('naber');
