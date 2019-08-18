<?php
// Static'ler ram'e yazılır ve ordan okunur böylelikle daha hızlı olurlar.
class Test
{
    public $a = "a";
    public static $b = "b";
    public static function hello()
    {
        // static fonksiyonlardan sadece static değişkenlere ulaşabiliriz.
        // self -> aynı sınıf içerisinde static methoda ulaşmak istersek
        // parent -> türettiğimiz sınıf içerisinde static methoda ulaşmak istersek.
        // return self::$a; // -> hata verecektir. $a static değil
        return self::$b;
    }
}
echo Test::hello(); // içerisinde static method olan bir sınıfımız varsa o methoda bu şekilde erişebiliriz.
