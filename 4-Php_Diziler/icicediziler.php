<?php
$kategoriler = [
    'siteler' => [
        'e-ticaret' => [ // e-ticaret bu dizinin key'i, alttakiler value'si. dictionary(python) gibi düşünebilirz
            'sahibinden',
            'n11',
            'hepsiburada'
        ], 'eğitim' => [
            'udemy',
            'mebis',
            'w3schools'
        ]
    ]
];
//print_r($kategoriler['siteler']['e-ticaret']); // bize kategoriler içindeki siteler içindeki e-ticaret'i verir. json gibi düşünebiliriz.
print_r($kategoriler);
