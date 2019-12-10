<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/newpage', function () { // /newpage url'i tanımladık
    return view('new_page'); // resources/views altındaki new_page.blade.php'yi döndürecek bize
    //return $_SERVER['REQUEST_METHOD'];
});
Route::match(['get', 'post'], '/matchview', function () { // match Route ile method kısıtlamaları yapabiliriz. ilk parametre (liste tipi) istek methodlarını alır, ikinci parametre route adıdır, üçüncü parametre ise fonksiyondur.
    return view('match_view');
})->name('matchview'); // name ile Route'a isim verebiliriz.
//Route::any('/matchview', function () { // any Route ile hiç sınırlama yapmadan bütün methodlara izin veririz.
//    return view('match_view');
//});
Route::get('/parametreli/{kategori}/{islem}/{sonuc?}/', function ($kategori, $islem, $sonuc = null) { // Route tanımlarken parametreler '{}' içerisine yazılır ve fonksiyon da bir parametre alır. Eğer Route parametreleri zorunlu değil ise ? koyulur ve fonksiyonda da null olarak set edilir.
    $sonuc_html = "";
    if ($sonuc != null)
        $sonuc_html = "<li>Sonuc Adı: <b>" . $sonuc . "</b></li>";
    return "
<ul>
<li>Route Adı : <b>Parametreli</b></li>
<li>Kategori Adı: <b>" . $kategori . "</b></li>
<li>İşlem Adı: <b>" . $islem . "</b></li>"
        . $sonuc_html . "

</ul>
";
})->name('parametreli_view');

Route::get('/parametreli2/{id}/{kat_id}', function ($id, $kat_id) {
    return "Id'si -> " . $id . "    ------------------  Kategori Id'si ->" . $kat_id;

//})->where('id', '[0-9]+'); // tek bir parametreyi kısıtlarken bu şekilde (Regex ile)
})->where(['id' => '[0-9]+', 'soyad' => '[0-9]+']); // birden fazla parametreyi kısıtlarken bu şekilde dizi mantığını kullanırız. (Regex ile)
