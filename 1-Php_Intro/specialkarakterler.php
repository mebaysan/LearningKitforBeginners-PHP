<?php
/*
        Sihirli Karakterler
            \t -> bir boşluk bırakır
            \n -> alt satıra geçirir
            \\ -> önündeki gizli karakteri etkisizleştirir, escape karakteridir.
            \$ -> çift tırnak içerisinde değişkenleri kullanabiliriz. Ve burada değişkeni gösterebiliriz.
            \' ->
            \" ->
    */

$person = 'Enes Baysan';
print "\$person değişkeni = $person değerine eşittir"; // 7. satır
print "$person dedi ki \"Ben yazılımcı olacağım\""; // aynısı tek tırnak için de geçerli