<?php
try {
    $db = new PDO("mysql:host=localhost2");
} catch (\Throwable $th) {
    echo "Hata var : " . $th->getMessage();
}
