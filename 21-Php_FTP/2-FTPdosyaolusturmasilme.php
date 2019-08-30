<?php
// ftp_mkdir -> dizin oluşturur
// ftp_rmdir -> dizin siler
// ftp_chdir -> mevcut dizini değiştirir
// ftp_pwd   -> mevcut dizinin yolunu döndürür
$conn_id = ftp_connect("192.168.1.61"); // bize bir connection id'si döndürür
if ($conn_id) {
    echo 'FTP bağlantısı başarılı' . "<br>";
    $login = ftp_login($conn_id, "user_name", "user_password");
    if ($login) {
        echo "Başarılı bir şekilde $conn_id'e giriş yapıldı" . "<br>";
        ftp_chdir($conn_id, "./public.html"); // connection'daki bu dosyaya gider
        $create = ftp_mkdir($conn_id, "udemy"); // başarılı olursa bize oluşturulan dosyanın adını döner
        $create ? print("$create oluşturuldu") : print("$create oluşturulamadı");
        $delete = ftp_rmdir($conn_id, "udemy"); // connection'ı alır ve silenecek dosya adını alır
        $delete ? print("$create silindi") : print("$create silinemedi");
        echo ftp_pwd($conn_id);
    } else {
        $error = error_get_last();
        echo "$conn_id'e giriş yapılamadı! Hata : " . $error['message'];
    }
} else {
    $error = error_get_last();
    echo "FTP bağlantısı başarısız. Hata : " . $error['message'];
}