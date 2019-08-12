<?php
function deneme()
{
    return 'Çalıştı!';
}

function kontrol_et($function)
{
    if (function_exists($function)) { // (function_exists() içeri parametre olarak verilen değer eğer var ise true yok ise false döndürür. Bu sayede bu onksiyonları kullanıp kullanamyacağımızı öğreniriz. 
        print "$function fonksiyonu var";
    } else {
        print "$function fonksiyonu yok";
    }
}

kontrol_et('deneme2');
