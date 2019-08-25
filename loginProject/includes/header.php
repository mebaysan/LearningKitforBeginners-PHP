<?php
// init.php içerisinde db.php ve functions.php'yi çağırdık ve her sayfada header'i çağırdığımız için bu sayede her sayfada db.php ve functions.php'yi kullanabileceğiz.
include "functions/init.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
<div class="container">