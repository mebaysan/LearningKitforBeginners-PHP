<?php
/*
mkdir() -> dizin oluşturur
rmdir() -> dizin siler
*/
mkdir('olusandizin');
rmdir('olusandizin');

mkdir('guvenlidizin', 0777); // chmod'u belirledik herkes okuyup yazabilir mi vs..
rmdir('guvenlidizin');
