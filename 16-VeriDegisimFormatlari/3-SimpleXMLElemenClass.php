<?php
// bu şema ile enes.xml dosyamızın aynısını eklemiş olduk
header('Content-type: text/xml');
$xml = new SimpleXMLElement('<enes/>');
$xml->addChild('ad', 'Enes');
$xml->addChild('soyad', 'Baysan');
$skills = $xml->addChild('softwareSkills'); // bir liste ekledik değer vermedik
    $web = $skills->addChild('web'); // skills altına web diye ayrı bir liste ekledik
        $web->addAttribute('id','1');
        $web->addChild('language', 'PHP'); // web listesi altına language değişkenine PHP ekledik
        $web->addChild('language', 'JavaScript');
    $desktop = $skills->addChild('desktop');
        $desktop->addAttribute('id','2');
        $desktop->addChild('language', 'C#');
        $desktop->addChild('language', 'Java');
    $other = $skills->addChild('other');
        $other->addAttribute('id','3');
        $other->addChild('language', 'Python');
echo $xml->asXML(); // xml nesnemizi xml formatına çevirip ekrana yazıyoruz.
