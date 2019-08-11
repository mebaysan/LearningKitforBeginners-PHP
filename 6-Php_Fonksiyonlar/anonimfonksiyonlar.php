<?php
$anonim = function () { // anonim fonnksiyonlar bu şekilde tanımlanır, bir değişkene aktarılır.
    return "Anonim fonksiyon";
};
echo $anonim(); // değişkeni çağırırken normal bir fonksiyon tanımlar gibi çağırırız.
echo "<hr>";
// diziler anonim fonksiyon tutabilirler.
$arr = [
    function () {
        return "1. fonksiyon";
    },
    function () {
        return "2. fonksiyon";
    },
    function () {
        return "3. fonksiyon";
    }
];
print $arr[0](); // bu şekilde dizi içerisindeki fonksiyonu çağırabiliriz.
