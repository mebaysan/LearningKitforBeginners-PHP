<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


$mail = new PHPMailer(true); // true vermemizin sebebi hataları yakalayabilmek

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // mailin smtp kullanacağını belirledik
    $mail->Host       = 'smtp.gmail.com';  // hangi smtp sağlayıcısını kullanacağız
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'gmail_adresim@gmail.com';                     // hangi smtp serveri kullanıyorsanız(gmail) oradaki mail adresi
    $mail->Password   = 'gmail_şifrem';                               // SMTP şifresi
    $mail->SMTPSecure = 'tls';                                  // Mailleri şifreler
    $mail->Port       = 587;                                    // TCP port to connect to

    $mail->setFrom('gmail_adresim@gmail.com', 'Enes Baysan'); // maili gönderen kişi
    $mail->addAddress('joe@example.net', 'Joe User');     // kime gidecek
    $mail->addAddress('ellen@example.com');               // Gördüğümüz gibi name kısmı opsiyoneldir
    $mail->addReplyTo('info@example.com', 'Information'); // giden mail kime reply edilecek. örnek: maili gören kişi cevap yazınca cevap kime gitsin

    // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Dosya ekleyebiliriz
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Dosyamızıa opsiyonel olarak isim verebiliriz

    // Content
    $mail->isHTML(true);                                  // Html gönderebilmek için true dedik
    $mail->Subject = 'Here is the subject'; // konu yani maildeki başlık
    $mail->Body    = '<h3>Merhaba Mailimde HTML kullandım!</h3>';  // mail gövdesi. bu şekilde html formatında yollayabiliriz
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; // bazı mail servisleri html'i desteklemeyebilirz bu sayede alt tarafı okuyabileceklerdir

    $mail->send(); // maili gönderiyoruz
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}