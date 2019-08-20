<?php
// ftp_connect -> sunucuya bağlanmamızı sağlar
// ftp_login   -> sunucuya girmemizi sağlar
// error_get_last() -> oluşan son hatayı döndürür
$conn_id = ftp_connect("192.168.1.1"); // bize bir connection id'si döndürür
if ($conn_id) {
    echo 'FTP bağlantısı başarılı' . "<br>";
    $login = ftp_login($conn_id, "user_name", "user_password");
    if ($login) {
        echo "Başarılı bir şekilde $conn_id'e giriş yapıldı";
    } else {
        $error = error_get_last();
        echo "$conn_id'e giriş yapılamadı! Hata : " . $error['message'];
    }
} else {
    $error = error_get_last();
    echo "FTP bağlantısı başarısız. Hata : " . $error['message'];
}