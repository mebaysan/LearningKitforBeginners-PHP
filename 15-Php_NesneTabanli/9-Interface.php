<?php
/*
                    interface iel abstract sınıf farkları
    interface
        - soyut methodlar ve sabitler içerir
        - sadece public method tanımlanabilir
        - aynı sınıfta birden fazla interface kullanılabilir
    abstract
        - soyut methodlar, sabitler, normal method ve özellikleri içerir
        - public, protected, private tanımlanabilir
        - aynı sınıf sadece bir abstract sınıftan türeyebilir
*/
interface Crud
{
    // c#'tan bildiğimiz normal interface işte :P
    public function create();
    public function read();
    public function delete();
    public function update();
}
