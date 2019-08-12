<?php
// kendini tekrar eden fonksiyonlar.
function say($sayi)
{
    print $sayi . "<br>";
    if ($sayi < 10) { // eğer sayı 10'dan küçükse tekrar kendini çalıştır ve sayi'yi 1 artır dedik.
        say($sayi + 1);
    }
}
//say(1);

$kategoriler = [
    [
        'id' => 1,
        'parent' => 0, // ana kategori id
        'ad' => 'Dersler'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'ad' => 'Güncel'
    ],
    [
        'id' => 3,
        'parent' => 0,
        'ad' => 'Blog'
    ],
    [
        'id' => 4,
        'parent' => 1,
        'ad' => 'PHP Dersleri'
    ],
    [
        'id' => 5,
        'parent' => 1,
        'ad' => 'Python Dersleri'
    ],
    [
        'id' => 6,
        'parent' => 4,
        'ad' => 'Diziler'
    ],
    [
        'id' => 7,
        'parent' => 4,
        'ad' => 'Recursive Fonksiyonlar'
    ]
];

function kategoriler($kategoriler, $parent = 0)
{
    print "<ul>";
    foreach ($kategoriler as $kategori) {
        if ($kategori['parent'] == $parent) { // dedikki eğer gelen data'nın 'parent' kısmı parametre olarak verilen parent'a eşitse listele
            print '<li>' . $kategori['ad'];
            print kategoriler($kategoriler, $kategori['id']); // Burada RECURSIVE kullandık. şart sağlanırsa listele ve tekrar bak eğer o parent'ta varsa tekrar bu fonksiyonu çalıştır. 
            echo '</li>';
        }
    }
    print "</ul>";
}
kategoriler($kategoriler);
