<?php

/*
        Sabit Değişkenler;
            Object veri türünü taşıyamazlar.
            define() fonksiyonu ile tanımlanır.
            Türkçe karakterler içerebilir.
            Sayı ile başlayamaz
            Harf veya _ karakteri ile başlar.
            Case-sensitive
    */
define("sabit_değişken", "sabit_değişkenin değeri"); // sabit değişkenin adı ilk parametre, değeri ise ikinci parametredir.
echo sabit_değişken;
