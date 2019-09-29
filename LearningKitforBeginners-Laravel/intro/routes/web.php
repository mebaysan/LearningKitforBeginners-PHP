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
// genelde web kısmı için route'lar buraya yazılır
// php artisan serve -> uygulamayı çalıştırır
// php artisan route:list -> elimizdeki route'ların listesini verir

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/about', function () {
//    return "Merhaba ben about";
//});
//Route::get('/contact', function () {
//    return view("contact"); // bu şekilde views altından view döndürebiliriz.
//});
//Route::get('/post/{category}/{id}', function ($category, $id) { // bu şekilde parametreli route'lar oluşturabiliriz
//    return "Merhaba $category'li postun post numarası $id";
//});

use App\Http\Controllers\DenemeController;
Route::get('/','DenemeController@index');
Route::get("/post", "PostController@index"); // PostController altındaki index methoduna gidecek
Route::get("/post/{id}", "PostController@show"); // bu şekilde parametreli requestleri ayarlayabiliriz

Route::resource('category', 'CategoryController'); // temel crud işlemlerinin hepsini tek bir route'da toplar
Route::get('/myview', 'CategoryController@showmyview');
Route::get('/deneme/{id}', 'DenemeController@deneme');
Route::Get('/deneme2/{isim}/{soyisim}', 'DenemeController@deneme2');
Route::Get('/deneme3','DenemeController@deneme3');
