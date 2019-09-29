@extends('layouts.app') <!-- layouts içinden app isimli layoutu çağırdık -->
@section('content') <!-- layout içinde belirttiğimiz sectionlara müdahale ediyoruz -->
    <h1>MyView2 Page</h1>
    <h3>Welcome {{$isim}} {{$soyisim}}</h3>
@endsection


@section('footer')
    <div class="container" id="example">
        <h2>This is footer</h2>
        <script>alert("this is footer {{$isim}}");</script>
    </div>
@endsection
