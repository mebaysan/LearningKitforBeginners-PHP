<?php
if (isset($_POST['submit'])) {
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];
    if (!$kullanici_adi || !$sifre) {
        $hata = "Lütfen kullanıcı adı veya şifre giriniz!";
    } elseif ($kullanici_adi != $uye['kullanici_adi']) {
        $hata = "Kullanıcı adı bulunamadı!";
    } elseif ($sifre != $uye['sifre']) {
        $hata = "Yanlış şifre girdiniz!";
    } else {
        $_SESSION['kullanici_adi'] = $uye['kullanici_adi'];
        // header() -> yönlendirme fonksiyonudur.
        header('Location:/10-Php_OturumYonetimi/2-GirişYapUygulaması'); // hangi dizin altında nereye yonlendireceksek Location: olarak onu veriyoruz.
    }
}
?>
<?php if (isset($hata)) : ?>
<div style="border: 1px solid red">
    <?php echo $hata; ?>
</div>
<?php endif; ?>
<form action="" method="post">
    <label>Kullanıcı Adı:</label>
    <br>
    <input type="text" name="kullanici_adi">
    <hr>
    <label>Şifre :</label>
    <br>
    <input type="password" name="sifre">
    <br>
    <input type="hidden" name="submit" value="1">
    <button type="submit">Giriş</button>
</form>