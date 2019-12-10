<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Page</title>
</head>
<body>
<h1>New Page Sayfası <b>Route Oluşturma</b></h1>
<a href="{{route('matchview')}}">Git : {{route('matchview')}}</a>
<!-- Bu şekilde isimlendirdiğimiz route'u kullanabiliriz. Django'da ki {% url 'url_adi' %} gibi   -->
<br>
<a href="{{route('parametreli_view',['kategori'=>'deneme','islem'=>'deneme_islemi','sonuc'=>'iste_bu_sekilde_parametreli_routing'])}}">Parametreli <!-- Bu şekilde parametreli view'lara yönlendirme yapabiliriz -->
    View'a git</a>
</body>
</html>
