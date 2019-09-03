<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "2976";
$db_name = "cms";
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$connection)
    echo "<div class='alert alert-danger'>Veritabanı Bağlantısı Sağlanamadı!</div>";