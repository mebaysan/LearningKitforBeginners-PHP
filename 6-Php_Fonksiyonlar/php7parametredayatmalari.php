<?php
// php7 ile gelen özellik: parametreleri ve dönen değerlere müdahale edebiliyoruz. sadece int parametre alsın, sadece array döndürsün vs...

declare(strict_types=1); // katı kuralları aktif ettik bu sayede parametrelere uyguladığımız filtreler çalışacak.

function topla(int $sayi1, int $sayi2): string // : <type> -> bu şekilde return edecek değerin tipini belirleyebiliyoruz
{
    return (string) ($sayi1 + $sayi2); // return ederken değerleri stringe çevirdik.
}
echo topla(3, 4);
