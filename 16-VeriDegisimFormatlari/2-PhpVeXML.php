<?php
/*
            XML
eXtensible Markup Language
verileri taşımak için tasarlanmıştır
-root
    -child


simplexml_load_file()
simplexml_load_string()
*/

$file = simplexml_load_file('enes.xml'); // xml dosyamızı yükledik
print_r($file);
echo "<hr>";

$xml = simplexml_load_string($file);
