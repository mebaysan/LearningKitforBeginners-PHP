<?php
/*
chmod() -> parametre olarak dosya adı ve modu alır
1.numara -> 0 ile başlar
2.numara -> dosya sahibi izinleri
3.numara -> kullanıcı grupları izinleri
4.numara -> geri kalan herkesin izinleri


1 = execute (işlem) izni
2 = yazma izni
4 = okuma izni
Bu 3 numaranın toplamı 7 yapar. Eğer 2. numarada 7 varsa dosya sahibine tüm izinler verilmiş olur, 3. numarada 7 varsa kullanıcı gruplarına tüm izinler verilmiş olur, 4.numarada 7 varsa herkese tüm izinler verilmiş olur
4 + 2 = 6 -> yazma ve okuma izni
4 + 1 = 5 -> okuma ve işlem izni
.
.
.
.
böyle gider toplamlara göre izinler verilir.
*/
chmod('test.txt', 0777);
