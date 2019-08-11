<?php
/*
    func_num_args() -> kaç parametre gelmiş bize sayısını verir
    func_get_args() -> gelen parametreleri dizi olarak döndürebiliriz
    func_get_arg()  -> bu fonksiyona bir index numarası vererek o parametrenin değerine ulaşabiliyoruz.
*/
function test(){
    echo func_num_args()."<hr>";
    print_r(func_get_args());
    echo "<hr>";
    echo "3. parametre = ".func_get_arg(2);
}
test("enes","baysan","parametre3","parametre4");