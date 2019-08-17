<?php
$tarih = new DateTime();
echo "<h3>Bugün</h3>";
echo $tarih->format('Y-m-d H:i:s') . "<hr>";

$_4gunsonra = new DateTime("+4 day");
echo "<h3>4 Gün Sonra</h3>";
echo $_4gunsonra->format("Y-m-d H:i:s") . "<br>";
echo "<h5>Unix Formatı</h5>" . $_4gunsonra->getTimestamp();
