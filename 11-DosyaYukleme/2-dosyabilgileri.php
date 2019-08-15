<?php
// $_FILES ->  gelen dosyanın bilgilerini bu değişken ile alabiliriz
//print_r($_FILES);
if ($_FILES['dosya']['error'] == 4) {
    echo "Lütfen dosya seçiniz!";
} else {
    print_r($_FILES['dosya']);
    if (is_uploaded_file($_FILES['dosya']['tmp_name'])) {
        $gecerli_dosya_uzantilari = [ // bizim desteklediğimiz mime formatları
            'image/jpeg',
            'image/png',
            'image/gif'
        ];
        $gecerli_dosya_boyutu = (1024 * 1014 * 3);
        $dosya_uzantisi = $_FILES['dosya']['type']; // yüklenen dosya'nın type'ını yani mime formatını aldık
        if (in_array($dosya_uzantisi, $gecerli_dosya_uzantilari)) { // eğer dosyanın uzantisi geçerli dosya uzantılarımız içerisinde varsa
            if ($gecerli_dosya_boyutu >= $_FILES['dosya']['size']) { // dosya boyutumuzu kontrol ediyoruz
                $yukle = move_uploaded_file($_FILES['dosya']['tmp_name'], 'uploads/' . $_FILES['dosya']['name']); // move_uploaded_file() -> ilk parametre dosya yolu ikinci parametre nereye yükleneceği
                if ($yukle) {
                    echo "<h3>Dosyanız Başarıyla Yüklendi</h3>";
                    echo "<img src=uploads/" . $_FILES['dosya']['name'] . "></img>";
                } else {
                    echo "Dosya yüklenirken bir hata oluştu!";
                }
            } else {
                echo "Dosya boyutunuz 3MB'i aşmamalıdır!";
            }
        } else {
            echo "Dosya sadece jpg, png ya da gif formatında olabilir";
        }
    } else {
        echo "Dosya yüklenirken hata oluştu!";
    }
}
