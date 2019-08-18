<?php
$dizi = [
    "muhammed", "enes", "baysan"
];

echo json_encode($dizi) . "<br>"; // json_encode -> verilen değişkeni bize json formatına çevirerek verir.
$json = json_encode($dizi);
print_r(json_decode($json)); // json_decode -> verilen json tipindeki değişkeni php formatına çevirir.
echo "<hr>";
$dizi = [
    "ad" => "enes",
    "soyad" => "baysan",
    "software_skills" => [
        "web" => [
            "php",
            "javascript"
        ],
        "desktop" => [
            "c#",
            "java"
        ],
        "other" => "python"
    ]
];
echo json_encode($dizi) . "<hr>";
print_r(json_decode(json_encode($dizi)));