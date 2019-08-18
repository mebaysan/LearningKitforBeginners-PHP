<?php
class Customer
{
    public $name;
    public $mail;
    const  AGE = 20;
    public function adGoster() // public erişim bildirgecini koymasaydık da bu fonksiyon public olacaktı.
    {
        return $this->name; // $this -> diğer dillerdende bildiğimiz gibi işlevi tamamen aynıdır. mevcut nesneyi temsil eder.
    }
    public function yasGoster()
    {
        return self::AGE; // sabitleri döndürürken self kelimesi kullanılır. komple tüm sınıfı temsil eder.
    }
}

$customer = new Customer();
$customer->name = "Muhammed Enes"; // bu şekilde sınıfın propertylerine müdahale edebiliyoruz
echo $customer->name . "<hr>";
echo Customer::AGE . "<hr>"; // class içinde bir sabit tanımlayıp onu kullanırken bu şekilde kullanılır ->  Class_Adi::Sabit_Adi
echo $customer->adGoster() . "<hr>"; // bu şekilde bir class'ın fonksiyonlarını kullanabiliriz.
echo $customer->yasGoster();
