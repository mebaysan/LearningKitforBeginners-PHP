<?php
ob_start();
session_start();
include "functions.php";
include "db.php";
if (!$con) { // eğer con nesnesi false gelirse veya yoksa ekrana hata vereceğiz
    echo "<div class='alert alert-danger'>Hata! Veritabanı bağlantısı Sağlanamadı</div>";
}