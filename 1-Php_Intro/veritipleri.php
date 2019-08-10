<?php
/*
        Veri Türleri (Data Types)
            String -> "baysan" 'enes'
            Integer -> 100,200,5000
            Float (Double) -> 5.5 7.2
            Boolean -> true false
            Array
            Object
            Null
    */
$string = 'enes baysan';
$int = 500;
$float = 5.5;
$boolean = true;
$object = new stdClass;
$null = Null;
$array = array();
$dizi = array($string, $int, $float, $boolean, $object, $null, $array);
foreach ($dizi as $key) {
    print gettype($key);
    print "\n\n";
}
print gettype($string); // gettype fonksiyonu bize içine verilen değerin tipini verir.
