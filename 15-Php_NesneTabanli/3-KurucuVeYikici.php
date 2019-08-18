<?php
class Person
{
    // kurucu method -> sınıf oluşurken çalışacak ilk method
    public function __construct()
    {
        echo "kurucu method çalıştı!" . "<br>";
    }
    // Yıkıcı method -> sınıfın çalışması bittiğinde çalışacak son method
    public function __destruct()
    {
        echo "yıkıcı method çalıştı!" . "<br>";
    }
    public function selamVer($name)
    {
        return "Selam $name";
    }
}

$kişi = new Person();
echo $kişi->selamVer("Enes") . "<br>";
