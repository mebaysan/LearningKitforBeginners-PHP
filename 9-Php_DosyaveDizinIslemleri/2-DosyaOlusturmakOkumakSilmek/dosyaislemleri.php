<?php
/*
        Dosya Oluşturmak
    touch()
*/
touch('olusturulandosya.txt');
touch('olusturulandosya2.txt', time() - 84000); // time parametresi opsiyoneldir. oluşturulma zamanını belirlememizi sağlar.
/*
        Dosya Açma-Kapama Yazma Okuma Silme
    fopen() -> dosyayı açmamızı sağlar. ikinci parametre dosya açma kipidir.
            * r  -> okumak için aç
            * r+ -> okumak ve yazmak için aç
            * w  -> yazmak için aç ( dosya yoksa oluşturulur varsa üstüne yazar içeriği sıfırlar)
            * w+ -> okumak ve yazmak için aç
            * a  -> yazmak için aç ( dosyanın sonuna ekleme yapar)
            * a+ -> okumak ve yazmak için aç
    fclose() -> dosyayı kapatmamızı sağlar
    fwrite() -> dosyaya birşeyler yazmamızı sağlar
    fread() -> dosyayı okumamızı sağlar ( tüm içerik)
    fgets() -> dosyayı satır satır okumamızı sağlar
    feof()  -> dosyanın sonuna gelinip gelinmediğini döndürür
    filesize() -> dosya karakter sayısını döndürür
    unlink()   -> dosyayı siler
    file() -> dosya içeriğini direk bir diziye aktarır
    file_get_contents() -> dosya içeriğini direk olarak alır. aynı zamanda bir sitenin kaynak kodlarını da alabilir. -> file_get_contents("http://baysan.net");
    file_put_contents() -> dosya içeriğine bir şeyler ekleyebiliriz. ilk parametre hangi dosya, ikinci parametre ne yazılacak, üçüncü parametre opsiyonel FILE_APPEND, üçüncü parametre verilmezse dosyanın üstüne yazar içeriği siler ama 3. parametre verilirse dosyaya ekleme yapar
*/
$dosya = fopen('olusturulandosya.txt', 'r');
//fwrite($dosya, 'Hello World!');
echo fread($dosya, filesize('olusturulandosya.txt')) . "<hr>"; // ikinci parametre olarak kaç karakter okunacağını alır.
fclose($dosya);
unlink('olusturulandosya2.txt');
$degerler = file('naber.txt');
print_r($degerler);
echo "<hr>";
$icerik = file_get_contents('naber.txt');
print $icerik . "<hr>";
$eklenecek = "naber" . rand(0, 1000) . "\n";
file_put_contents('naber.txt', $eklenecek, FILE_APPEND);
